<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware;
use App\sanpham;
use App\nhomsanpham;
use App\hoadon;
use App\thanhtoan;
use App\khachang;
use App\chitiethoadon;
use Cart;
use DB;
use Auth;
use Carbon\Carbon;




class Shoppingcart extends Controller
{
  public function giohang(){
    if(Auth::check())
    {
     $loaisanpham = nhomsanpham::all();
     $Total = Cart::session(Auth::id())->getTotal();
     $Quantity = Cart::session(Auth::id())->getTotalQuantity();
     $Content = Cart::session(Auth::id())->getContent();
     return view( 'shoping-cart',compact('loaisanpham','Total','Quantity','Content') );
   }else{
     return view('login');
   }
 }


 public function shoppingcarts($id,Request $request){
   if (Auth::check()) {
    $product_buy = DB::table('sanpham')->where('masp',$id)->first();
    Cart::session(Auth::id())->add(array('id'=> $product_buy->masp, 
      'name'=> $product_buy->tensp,
      'quantity'=> $request->txtslmua,
      'price'=>$product_buy->dongia - ( $product_buy->dongia * (int)$product_buy->KhuyenMai /100),
      'attributes' => array('hinh'=>$product_buy->hinhsp),
    ));
    DB::table('sanpham')
    ->where('masp',$id)
    ->update(['slton' => $product_buy->slton - $request->txtslmua]);
    return redirect('trang-chu');
  }else
  return redirect('login');
}

public function updateProducts(Request $Request){
    $id = $Request->get('id');
    $qty = $Request->get('qty');
    $spUpdate = Cart::session(Auth::id())->get($id);
    $sanpham = DB::table('sanpham')->where('masp', $id)->first();
    
    if( $qty > $sanpham->slton)
    {
      return 'loi';
    }else
      if($qty > $spUpdate->quantity)
      {
        DB::table('sanpham')->where('masp', $id)->update([
          'slton'=> $sanpham->slton - ($qty - $spUpdate->quantity)
        ]);
      }else
      {
         DB::table('sanpham')->where('masp', $id)->update([
          'slton'=> $sanpham->slton + ($spUpdate->quantity-$qty)
        ]);
      }
    Cart::session(Auth::id())->update($id, array(
      'quantity' => array(
        'relative' => false,
        'value' => $qty
      ),
    ));

}

public function deleteItemCart($id, Request $request){
  if (Auth::check())
  {
    $Content = Cart::session(Auth::id())->getContent();
   foreach ($Content as $key => $item) {
    if($item->id == $id)
    {
     $product = DB::table('sanpham')->where('masp',$id)->first();
     DB::table('sanpham')
     ->where('masp',$id)
     ->update(['slton' => $product->slton + $item->quantity]);
     Cart::session(Auth::id())->remove($item->id);
     return redirect()->back();
   }
 }
}return redirect('login');
}

// public function VNPAY(Request $request)
// {

//         $vnp_TmnCode = "VZ4H4Q75"; //Mã website tại VNPAY 
//         $vnp_HashSecret = "GNFHMUTDFKJKLUJXOTHHHCGPKTNGOODW"; //Chuỗi bí mật
//         $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//         //$vnp_Url = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
//         $vnp_Returnurl = "http://localhost:8080/shopgaran/xu-ly";//địa chỉ sau khi giao dịch thành công hệ thống vnpay trả thông tin về
//         $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
//         $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
//         $vnp_OrderType = 'billpayment';
//         $vnp_Amount = cart::session(Auth::id())->getTotal() * 100;
//         $vnp_Locale = 'vn';
//         $vnp_BankCode = 'NCB';
//         $vnp_IpAddr = request()->ip();

//         $inputData = array(
//           "vnp_Version" => "2.0.0",
//           "vnp_TmnCode" => $vnp_TmnCode,
//           "vnp_Amount" => $vnp_Amount,
//           "vnp_Command" => "refund",
//           "vnp_CreateDate" => date('YmdHis'),
//           "vnp_CurrCode" => "VND",
//           "vnp_IpAddr" => $vnp_IpAddr,
//           "vnp_Locale" => $vnp_Locale,
//           "vnp_OrderInfo" => $vnp_OrderInfo,
//           "vnp_OrderType" => $vnp_OrderType,
//           "vnp_ReturnUrl" => $vnp_Returnurl,
//           "vnp_TxnRef" => $vnp_TxnRef,
//         );

//         if (isset($vnp_BankCode) && $vnp_BankCode != "") {
//           $inputData['vnp_BankCode'] = $vnp_BankCode;
//         }

//         if (isset($vnp_CardType) && $vnp_CardType != "") {
//           $inputData['vnp_CardType'] = $vnp_CardType;
//         }
//         ksort($inputData);
//         $query = "";
//         $i = 0;
//         $hashdata = "";
//         foreach ($inputData as $key => $value) {
//           if ($i == 1) {
//             $hashdata .= '&' . $key . "=" . $value;
//           } else {
//             $hashdata .= $key . "=" . $value;
//             $i = 1;
//           }
//           $query .= urlencode($key) . "=" . urlencode($value) . '&';
//         }

//         $vnp_Url = $vnp_Url . "?" . $query;
//         if (isset($vnp_HashSecret)) {
//            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
//           $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
//           $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
//         }
//         return redirect($vnp_Url);
//     }
    public function VNPAY(Request $request)
{

        $vnp_TmnCode = "VZ4H4Q75"; //Mã website tại VNPAY 
        $vnp_HashSecret = "GNFHMUTDFKJKLUJXOTHHHCGPKTNGOODW"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        //$vnp_Url = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
        $vnp_Returnurl = "http://localhost:8080/shopgaran/xu-ly";//địa chỉ sau khi giao dịch thành công hệ thống vnpay trả thông tin về
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = cart::session(Auth::id())->getTotal() * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
          "vnp_Version" => "2.0.0",
          "vnp_TmnCode" => $vnp_TmnCode,
          "vnp_Amount" => $vnp_Amount,
          "vnp_Command" => "pay",
          "vnp_CreateDate" => date('YmdHis'),
          "vnp_CurrCode" => "VND",
          "vnp_IpAddr" => $vnp_IpAddr,
          "vnp_Locale" => $vnp_Locale,
          "vnp_OrderInfo" => $vnp_OrderInfo,
          "vnp_OrderType" => $vnp_OrderType,
          "vnp_ReturnUrl" => $vnp_Returnurl,
          "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
          $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        if (isset($vnp_CardType) && $vnp_CardType != "") {
          $inputData['vnp_CardType'] = $vnp_CardType;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
          if ($i == 1) {
            $hashdata .= '&' . $key . "=" . $value;
          } else {
            $hashdata .= $key . "=" . $value;
            $i = 1;
          }
          $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
          $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
          $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function xulyVNPAY(Request $request){
      $khachang = DB::table('khachhang')->where('id', Auth::id())->first();
      
        if($request->vnp_ResponseCode == 0)
        {
          $hoadon = new hoadon();
          $hoadon->slsp=Cart::session(Auth::id())->getTotalQuantity();
          $hoadon->ngaylapHD=Carbon::now();
          $hoadon->ngaygiao=Carbon::now();
          $hoadon->noichuyen=$khachang->diachi;
          $hoadon->makh=$khachang->makh;
          $hoadon->idshipper=1;
          $hoadon->save();           

          $items = cart::session(Auth::id())->getContent();
          foreach ($items as $item) {
            $hd = DB::table('hoadon')->where('makh', $khachang->makh)->orderby('mahd','desc')->first();
            $cTHoaDon = new chitiethoadon();
            $cTHoaDon->mahd=$hd->mahd;
            $cTHoaDon->masp=$item->id;
            $cTHoaDon->dongia=$item->price;
            $cTHoaDon->soluong= $item->quantity;     
            $cTHoaDon->save();        
          }
          $hoadon = DB::table('hoadon')->orderby('mahd','desc')->first();
          $thanhtoan = new thanhtoan();
          $thanhtoan->vnp_BankTranNo = $request->vnp_BankTranNo;
          $thanhtoan->vnp_OrderInfo = $request->vnp_OrderInfo;
          $thanhtoan->vnp_TransactionNo = $request->vnp_TransactionNo;
          $thanhtoan->vnp_ResponseCode = $request->vnp_ResponseCode;
          $thanhtoan->vnp_TxnRef = $request->vnp_BankTranNo;
          $thanhtoan->vnp_Amount = $request->vnp_Amount;
          $thanhtoan->vnp_PayDate = $request->vnp_PayDate;
          $thanhtoan->mahd = $hoadon->mahd;
          $thanhtoan->save();
          Cart::session(Auth::id())->clear();
          return redirect('gio-hang')->with(['flag'=>'success','message'=>'Thanh toán thành công']);
        }
        else
        {
         return redirect('gio-hang')->with(['flag'=>'danger','message'=>'Thanh toán không thành công']);
       }
   }

   public function Posthoantra($id){

    $thanhtoan = DB::table('thanhtoans')->where('mahd', $id)->first();
      $vnp_TmnCode = "VZ4H4Q75"; //Mã website tại VNPAY 
      $vnp_HashSecret = "GNFHMUTDFKJKLUJXOTHHHCGPKTNGOODW"; //Chuỗi bí mật
      //$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
      $vnp_Url = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
      $vnp_Returnurl = "http://localhost:8080/shopgaran/hoan-tra";
      $vnp_TxnRef = date("YmdHis");
      $vnp_IpAddr = request()->ip();

       $inputData = array(
        "vnp_Version" => "2.0.0",
        "vnp_TmnCode" => "VZ4H4Q75",
        "vnp_HashSecret" => "GNFHMUTDFKJKLUJXOTHHHCGPKTNGOODW",
        "vnp_Amount" => "4500000",
        "vnp_TransactionType" => "02",
        "vnp_TransDate" => "20201222151332",
        "vnp_TxnRef" => "20201222081318",
        "vnp_OrderInfo" => "1608514523",
        "vnp_IpAddr" => "127.0.0.1",
        "vnp_CreateDate" => "20201221013523",
        "vnp_Command" => "refund",
        "vnp_BankCode"=>"NCB",
        "vnp_BankTranNo"=>"20201222151345",
        "vnp_CardType"=>"ATM",
        "vnp_OrderInfo"=>"khách hàng trả lại hàng",
        "vnp_ResponseCode"=>"00",
        "vnp_TransactionNo"=>"13439355",
        "vnp_Message"=>"00",
        "vnp_CardType"=>"ATM",
        "vnp_Returnurl"=>$vnp_Returnurl,
      );

      ksort($inputData);
      $query = "";
      $i = 0;
      $hashdata = "";
      foreach ($inputData as $key => $value) {
        if ($i == 1) {
          $hashdata .= '&' . $key . "=" . $value;
        } else {
          $hashdata .= $key . "=" . $value;
          $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
      }

      $vnp_Url = $vnp_Url . "?" . $query;
      if (isset($vnp_HashSecret)) {
         // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
        $vnpSecureHash = hash('SHA256', $vnp_HashSecret . $hashdata);
        $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
      }
      return ($vnp_Url);
    }

    public function xulyhoantra (){
      return view('admin.hoadon');
    }
//   public function Posthoantra($id){

//     $thanhtoan = DB::table('thanhtoans')->where('mahd', $id)->first();
//     $vnp_TxnRef = date("YmdHis");
//    $response = \VNPay::refund([
//     'vnp_Amount' => 10000,
//     'vnp_TransactionType' => '03',
//     'vnp_TransDate' => 20190705151126,
//     'vnp_TxnRef' => 32321,
//     'vnp_OrderInfo' => time(),
//     'vnp_IpAddr' => '127.0.0.1',
//     'vnp_TransactionNo' => 496558,
// ])->send();
// dd($response);
// if ($response->isSuccessful()) {
//     // TODO: xử lý kết quả và hiển thị.
//     print $response->getTransactionId();
//     print $response->getTransactionReference();
    
//     var_dump($response->getData()); // toàn bộ data do VNPay gửi về.
    
// } else {

//     print $response->getMessage();
// }

//  }
}
