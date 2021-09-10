(function ($) {
	$('#qwe').delay(3000).slideUp(1000);


	$('.themsanpham').submit(function(){
		var tensp = $('input[name="tensanpham"]').val();
		var soluongton = $('input[name="soluongton"]').val(); 
		var soluongnhap = $('input[name="soluongnhap"]').val();
		var dongia = $('input[name="dongia"]').val();
		var giagoc = $('input[name="giagoc"]').val();
		var khuyuenmai = parseInt($('input[name="khuyuenmai"]').val());
		var flag = true;

		//tensp
		if(tensp == "")
		{
			$('#loitensp').text('Tên sản phẩm không được rỗng');
			flag = false;
		}else
		{
			$('#loitensp').text('');
		}
		//so luong nhap
			if(isNaN(soluongnhap)==true)
			{
				$('#loislnhap').text('Số lượng phải là số nguyên');
				flag = false;
			}
			else
				if(soluongnhap < 0)
				{
					$('#loislnhap').text('Số lượng phải lớn hơn 0');
					flag = false;
				}else
					{
						$('#loislnhap').text('');
					}			


		//so luong ton

			if(isNaN(soluongton)==true)
			{
				$('#loislton').text('Số lượng phải là số nguyên');
				flag = false;
			}else
			if(soluongton < 0)
			{
				$('#loislton').text('Số lượng phải lớn hơn 0');
				flag = false;
			}else
				{
					$('#loislton').text('');
				}
		// don gia
		if(isNaN(dongia)==true)
		{
			$('#loidongia').text('Phải là số nguyên');
			flag = false;
		}else
			if(dongia == 0)
			{
				$('#loidongia').text('Đơn giá phải lơn hơn 0');
				flag = false;
			}else
				if(dongia < 0)
				{
					$('#loidongia').text('Đơn giá phải lơn hơn 0');
					flag = false;
				}else{
					$('#loidongia').text('');
				}	

		// gia goc
		if(isNaN(giagoc)==true)
		{
			$('#loigiagoc').text('Phải là số nguyên');
			flag = false;
		}else
			if(giagoc == 0)
			{
				$('#loigiagoc').text('giá gốc phải lơn hơn 0');
				flag = false;
			}else
				if(giagoc < 0)
				{
					$('#loigiagoc').text('giá gốc phải lơn hơn 0');
					flag = false;
				}else
					if(giagoc < dongia)
					{
						$('#loigiagoc').text('giá gốc phải lơn hơn đơn giá');
						flag = false;
					}else{
						$('#loigiagoc').text('');
					}

		// khuyen mai
		if(khuyuenmai == "")
		{
			$('#loikhuyuenmai').text('Khuyến mãi phải lơn hơn đơn giá');
			flag = false;
		}else
			if(khuyuenmai < 0)
			{
				$('#loikhuyuenmai').text('Khuyến mãi phải lớn hơn không');
				flag = false;
			}else{
				$('#loikhuyuenmai').text('');
			}

	return flag;
});


	// them user 
	$('.themuser').click(function(){
		var option = $('#myTab').val();
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var email = $('input[name="email"]').val();
		var reg_Ngaysinh = /[0-9]{2}[\/][0-9]{2}[\/][0-9]{4}/;
		var reg_username = /[A-Za-z0-9]{4,12}/;
		var reg_sdt = /[0][0-9]{9}/;
     	var reg_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
     	var flag = true;

     	// nhan vien
		if(option == 1)
		{
			var tenNV = $('input[name="tennv"]').val();
			var diachiNV = $('input[name="diachiNV"]').val();
			var sdtNV = $('input[name="sdtNV"]').val();
			var ngaysinhNV = $('input[name="ngaysinhNV"]').val();
			var ngay = ngaysinhNV.slice(0,2);
			var thang = ngaysinhNV.slice(3,5);
			var nam = ngaysinhNV.slice(6);

			if(reg_username.test(username) == false)
			{
				$('#loiusernamesaidinhdang').text('username không đúng định dạng A-Z a-z 0-9');
				$('#loiusernamedodai').text('username dài từ 6 - 12 ký tự');
				flag = false;
			}else
			{
				$('#loiusernamesaidinhdang').text('');
				$('#loiusernamedodai').text('');
			}

     		//password
	     	if(reg_username.test(password)==false)
	     	{
	     		$('#loipasswordsaidinhdang').text('password không đúng định dạng A-Z a-z 0-9');
	     		$('#loipassworddodai').text('password dài từ 6 - 12 ký tự');
	     		flag = false;
	     	}else
	     	{
	     		$('#loipasswordsaidinhdang').text('');
	     		$('#loipassworddodai').text('');
	     	}

	     	//email
	     	if(reg_email.test(email)==false || email == "")
	     	{
	     		$('#loiemail').text('email không đúng định dạng hoặc không được bỏ trống');
	     		flag = false;
	     	}else
	     	{
	     		$('#loiemail').text('');
	     	}

			if(tenNV == "")
			{
				$('#loitennv').text('Tên nhân viên không được bỏ trống');
				flag = false;
			}else{
				$('#loitennv').text('');
			}

			if(reg_Ngaysinh.test(ngaysinhNV) == false)
			{
				$('#loingaysinhNV').text('Ngày Sinh không đúng định dạng');
				flag = false;
			}else{
				$('#loingaysinhNV').text('');
			}

			// kiem tra ngay thang nam
			if(ngaysinhNV == ""){
				$('#loingaysinhNV').text('Ngày sinh không được bỏ trống');
				flag = false;
			}else
				if(thang < 1 || thang > 12)
				{
					$('#loingaysinhNV').text('Sai tháng');
					flag = false;
				}else 
					if(ngay <1 || ngay>31)
					{
						$('#loingaysinhNV').text('Sai ngày');
						flag = false;
					}else
						if(ngay == 31 && (thang ==4 || thang == 6 || thang == 9 || thang == 11))
						{
							$('#loingaysinhNV').text('Tháng có 30 ngày');
							flag = false;	
						}else
							if(thang == 2)
							{
								var namnhuan = (nam % 4 == 0 && (nam % 100 != 0 || nam % 400 == 0));
								if(ngay > 29 || ngay == 29 && !namnhuan)
								{
									$('#loingaysinhNV').text('Tháng 2 co 29 ngày');
									flag = false;
								}else{
									$('#loingaysinhNV').text('');
								}
							}

			if(diachiNV == "")
			{
				$('#loidiachiNV').text('Địa chỉ không được bỏ trống');
				flag = false;
			}else{
				$('#loidiachiNV').text('');
			}

			if(sdtNV.length != 10 )
			{
				$('#loisdtNV').text('Số điện thoại sai định dạng');
				flag = false;
			}else
				if(reg_sdt.test(sdtNV)==false)
				{
					$('#loisdtNV').text('Số điện thoại sai định dạng');
					flag = false;
				}else{
					$('#loisdtNV').text('');
				}
		return flag;
		}

		// khach hang
		if(option == 2)
		{
			var tenKH = $('input[name="tenKH"]').val();
			var diachiKH = $('input[name="diachiKH"]').val();
			var sdtKH = $('input[name="sdtKH"]').val();
			var ngaysinhKH = $('input[name="ngaysinhKH"]').val();
			var ngay = ngaysinhKH.slice(0,2);
			var thang = ngaysinhKH.slice(3,5);
			var nam = ngaysinhKH.slice(6);

			//alert(sdtKH.length);

			//username
	     	if(reg_username.test(username) == false)
	     	{
	     		$('#loiusernamesaidinhdang').text('username không đúng định dạng A-Z a-z 0-9');
	     		$('#loiusernamedodai').text('username dài từ 6 - 12 ký tự');
	     		flag = false;
	     	}else
	     	{
	     		$('#loiusernamesaidinhdang').text('');
	     		$('#loiusernamedodai').text('');
	     	}
	    	
	     	//password
	     	if(reg_username.test(password)==false)
	     	{
	     		$('#loipasswordsaidinhdang').text('password không đúng định dạng A-Z a-z 0-9');
	     		$('#loipassworddodai').text('password dài từ 6 - 12 ký tự');
	     		flag = false;
	     	}else
	     	{
	     		$('#loipasswordsaidinhdang').text('');
	     		$('#loipassworddodai').text('');
	     	}

	     	//email
	     	if(reg_email.test(email)==false || email == "")
	     	{
	     		$('#loiemail').text('email không đúng định dạng hoặc không được bỏ trống');
	     		flag = false;
	     	}else
	     	{
	     		$('#loiemail').text('');
	     	}
			if(tenKH == "")
			{
				$('#loitenKH').text('Tên khách hàng không được bỏ trống');
				flag = false;
			}else{
				$('#loitenKH').text('');
			}

			if(reg_Ngaysinh.test(ngaysinhKH) == false)
			{
				$('#loingaysinhKH').text('Ngày Sinh không đúng định dạng');
				flag = false;
			}else{
				$('#loingaysinhKH').text('');
			}

			// kiem tra ngay thang nam
			if(ngaysinhKH == ""){
				$('#loingaysinhKH').text('Ngày sinh không được bỏ trống');
				flag = false;
			}else
				if(thang < 1 || thang > 12)
				{
					$('#loingaysinhKH').text('Sai tháng');
					flag = false;
				}else 
					if(ngay <1 || ngay>31)
					{
						$('#loingaysinhKH').text('Sai ngày');
						flag = false;
					}else
						if(ngay == 31 && (thang ==4 || thang == 6 || thang == 9 || thang == 11))
						{
							$('#loingaysinhKH').text('Tháng có 30 ngày');
							flag = false;	
						}else
							if(thang == 2)
							{
								var namnhuan = (nam % 4 == 0 && (nam % 100 != 0 || nam % 400 == 0));
								if(ngay > 29 || ngay == 29 && !namnhuan)
								{
									$('#loingaysinhKH').text('Tháng 2 co 29 ngày');
									flag = false;
								}else{
									$('#loingaysinhKH').text('');
								}
							}
			if(diachiKH == "")
			{
				$('#loidiachiKH').text('Địa chỉ không được bỏ trống');
				flag = false;
			}else{
				$('#loidiachiKH').text('');
			}


			
				if(reg_sdt.test(sdtKH)==false)
				{
					$('#loisdtKH').text('Số điện thoại sai định dạng');
					flag = false;
				}else
					if(sdtKH.length != 10 )
					{
						$('#loisdtKH').text('Số điện thoại sai định dạng 1');
						flag = false;
					}
						else{
							$('#loisdtKH').text('');
						}

		return flag;
		}
	});


	// sua user
	$('.suauser').click(function(){
		var username = $('input[name="username"]').val();
		var password = $('input[name="password"]').val();
		var email = $('input[name="email"]').val();
		var reg_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var reg_password = /^[a-z0-9]{6,12}$/;
		var reg_username = /^[A-Za-z0-9]{4,12}$/;
		var flag = true;

		// username
		if(username == "")
		{
			$('#loiusername').text('Username không được rỗng');
			flag = false;
		}else
			if(reg_username.test(username)==false)
			{
				$('#loiusername').text('Username không đúng định dạng username');
				$('#loiusernamedodai').text('Username dài 6 - 12 ký tự');
				flag = false;
			}else{
				$('#loiusername').text('');
				$('#loiusernamedodai').text('');
			}


		// password

			if(password == "")
			{
				$('#loipassword').text('Username không được rỗng');
				flag = false;
			}else
				if(reg_password.test(password)==false)
				{
					$('#loipassword').text('Password không đúng định dạng');
					$('#loipassworddodai').text('Password dài 6 - 12 ký tự');
					flag = false;
				}else
					{
						$('#loipassword').text('');
						$('#loipassworddodai').text('');
					}

		// email
		if(email == "")
		{
			$('#loiemail').text('email không được rỗng');
			flag = false;
		}else
			if(reg_email.test(email)==false)
			{
				$('#loiemail').text('email sai định dạng');
				flag = false;
			}else
				{
					$('#loiemail').text('');
				}

	return flag;
	});

	// sua nhan vien

	$('#suanhanvien').click(function(){
		var tennhanvien = $('input[name="tennv"]').val();
		var diachi = $('input[name="diachi"]').val();
		var sdt = $('input[name="sdt"]').val();
		var ngaysinh = $('input[name="ngaysinh"]').val();
		var reg_Ngaysinh = /[0-9]{2}[\/][0-9]{2}[\/][0-9]{4}/;
		var reg_sdt = /[0][0-9]{9}/;
		var reg_username = /[A-Za-z0-9]{4,12}/;
		var ngay = ngaysinh.slice(0,2);
		var thang = ngaysinh.slice(3,5);
		var nam = ngaysinh.slice(6);

		var flag = true;

		if(tennhanvien == "")
		{
			$('#loitennv').text('Tên không được rỗng');
			flag = false;
		}else
			if(reg_username.test(tennhanvien)==false)
			{
				$('#loitennv').text('Tên không đúng định dạng');
				flag = false;
			}else{
				$('#loitennv').text('');
			}

		if(diachi == "")
		{
			$('#loidiachi').text('Địa chỉ không được rỗng');
			flag = false;
		}else
		{
			$('#loidiachi').text('');
		}

		if(reg_sdt.test(sdt)==false)
		{
			$('#loisdt').text('Số điện thoại sai định dạng');
			flag = false;
		}else
		{
			$('#loisdt').text('');
		}

		if(reg_Ngaysinh.test(ngaysinh)==false)
		{
			$('#loingaysinh').text('Ngày sinh sai định dạng');
			flag = false;
		}else
		{
			$('#loingaysinh').text('');
		}

		if(ngaysinh == ""){
				$('#loingaysinh').text('Ngày sinh không được bỏ trống');
				flag = false;
			}else
				if(thang < 1 || thang > 12)
				{
					$('#loingaysinh').text('Sai tháng');
					flag = false;
				}else 
					if(ngay <1 || ngay>31)
					{
						$('#loingaysinh').text('Sai ngày');
						flag = false;
					}else
						if(ngay == 31 && (thang ==4 || thang == 6 || thang == 9 || thang == 11))
						{
							$('#loingaysinh').text('Tháng có 30 ngày');
							flag = false;	
						}else
							if(thang == 2)
							{
								var namnhuan = (nam % 4 == 0 && (nam % 100 != 0 || nam % 400 == 0));
								if(ngay > 29 || ngay == 29 && !namnhuan)
								{
									$('#loingaysinh').text('Tháng 2 co 29 ngày');
									flag = false;
								}else{
									$('#loingaysinh').text('');
								}
							}

	return flag;
	});



		// sua khach hang

		$('#suakhachang').submit(function(){
			var tenkhachang = $('input[name="tenkh"]').val();
			var diachi = $('input[name="diachi"]').val();
			var sdt = $('input[name="sdt"]').val();
			var TrangThai = $('input[name="TrangThai"]').val();
			var reg_sdt = /[0][0-9]{9}/;
			var reg_username = /[A-Za-z0-9]{4,12}/;
			var flag = true;

			if(tenkhachang=="")
			{
				$('#loitenkh').text('Tên không được rỗng');
				flag = false;
			}else
				if(reg_username.test(tenkhachang)==false)
				{
					$('#loitenkh').text('Tên không đúng định dạng');
					flag = false;
				}else
					{
						$('#loitenkh').text('');
					}

			if(TrangThai <0 || TrangThai >1)
			{
				$('#loiTrangThai').text('1 OR 0');
				flag = false;
			}else
				if(isNaN(TrangThai)==true)
				{
					$('#loiTrangThai').text('Trạng thái là số nguyên');
					flag = false;
				}else{
					$('#loiTrangThai').text('');
				}

			if(reg_sdt.test(sdt)==false)
			{
				$('#loisdt').text('Số điện thoại sai định dạng');
				flag = false;
			}else{
				$('#loisdt').text('');
			}

	return flag;
	});

		//sua san pham
		$('#suasanpham').click(function(){
		var tensp = $('input[name="tensanpham"]').val();
		var soluongnhap = $('input[name="soluongnhap"]').val();
		var soluongton = $('input[name="soluongton"]').val();
		var dongia = $('input[name="dongia"]').val();
		var giagoc = $('input[name="giagoc"]').val();
		var khuyuenmai = $('input[name="khuyuenmai"]').val();
		var trangthai = $('input[name="trangthai"]').val();
		var flag = true;

		if(tensp == "")
		{
			$('#loitensp').text('Tên sản phẩm không được rỗng');
			flag = false;
		}else{
			$('#loitensp').text('');
		}

		if(soluongnhap=="")
		{
			$('#loislnhap').text('không được rỗng');
			flag = false;
		}else
			if(isNaN(soluongnhap)==true)
			{
				$('#loislnhap').text('số lượng là số nguyên');
				flag = false;
			}else
				if(soluongnhap < 0){
					$('#loislnhap').text('số lượng phải lớn hơn 0');
					flag = false;
				}else
					{
						$('#loislnhap').text('');
					}

		if(soluongton=="")
		{
			$('#loislton').text('không được rỗng');
			flag = false;
		}else
			if(isNaN(soluongton)==true)
			{
				$('#loislton').text('số lượng là số nguyên');
				flag = false;
			}else
			if(soluongton < 0){
				$('#loislton').text('số lượng phải lớn hơn 0');
				flag = false;
			}else
				{
					$('#loislton').text('');
				}

		if(dongia=="")
		{
			$('#loidongia').text('không được rỗng');
			flag = false;
		}else
			if(isNaN(dongia)==true)
			{
				$('#loidongia').text('Đơn giá là số nguyên');
				flag = false;
			}else
				if(dongia < 0){
					$('#loidongia').text('Đơn giá phải lớn hơn 0');
					flag = false;
				}else
					{
						$('#loidongia').text('');
					}

		if(giagoc=="")
		{
			$('#loigiagoc').text('không được rỗng');
			flag = false;
		}else
			if(isNaN(giagoc)==true)
			{
				$('#loigiagoc').text('giá gốc là số nguyên');
				flag = false;
			}else
				if(giagoc < 0){
					$('#loigiagoc').text('giá gốc phải lớn hơn 0');
					flag = false;
				}else
					{
						$('#loigiagoc').text('');
					}

		if(khuyuenmai == ""){
			$('#loikhuyuenmai').text('Khuyến mãi không được rỗng');
			flag = false;
		}else
			if(isNaN(khuyuenmai)==true)
			{
				$('#loikhuyuenmai').text('Khuyến mãi là số nguyên');
				flag = false;
			}else
				if(khuyuenmai < 0){
					$('#loikhuyuenmai').text('Khuyến mãi phải lớn hơn 0');
					flag = false;
				}else
					{
						$('#loikhuyuenmai').text('');
					}


		//trang thai
		if(trangthai == "")
		{
			$('#loitrangthai').text('Trạng thái không được rỗng');
			flag = false;
		}else
			if(isNaN(trangthai)==true)
			{
				$('#loitrangthai').text('Trạng thái phải là số nguyên');
				flag = false;
			}else
				if(trangthai < 0 || trangthai > 1)
				{
					$('#loitrangthai').text('1 hoặc 0');
					flag = false;
				}else
					{
						$('#loitrangthai').text('');
					}
		return flag;
		});

	// sua hoa don
	$('.suahoadon').click(function(){
		var reg_Ngay = /[0-9]{4}[\-][0-9]{2}[\-][0-9]{2}/;//năm tháng ngày
		var ngay_LapHD = $('input[name="ngaylaphd"]').val();
		var namLapHD = ngay_LapHD.slice(0,4);
		var thangLapHD = ngay_LapHD.slice(5,7);
		var ngayLapHD = ngay_LapHD.slice(8);

		var ngayGiao = $('input[name="ngaygiao"]').val();
		var namGiaoHang = ngayGiao.slice(0,4);
		var thangGiaoHang = ngayGiao.slice(5,7);
		var ngayGiaoHang = ngayGiao.slice(8);

		var noiGiao = $('input[name="noigiaohang"]').val();
		var trangthai = $('input[name="trangthai"]').val();

		

		var flag = true;
		//ngay lap hoa don
		if(ngay_LapHD.length!=10)
		{
			$('#loingaylaphd').text('ngày lập hóa đơn sai định dạng');
			flag = false;
		}else
			if(ngay_LapHD == "")
			{
				$('#loingaylaphd').text('ngày lập hóa đơn không được bỏ trống');
				flag = false;
			}else
				if(reg_Ngay.test(ngay_LapHD)==false)
				{
						$('#loingaylaphd').text('Ngày lập háo đơn không đúng định dạng');
						flag = false;
					}else
						if(thangLapHD < 1 || thangLapHD > 12)
						{
							$('#loingaylaphd').text('Sai tháng');
							flag = false;
						}else 
							if(ngayLapHD <1 || ngayLapHD>31)
							{
								$('#loingaylaphd').text('Sai ngày');
								flag = false;
							}else
								if(ngayLapHD == 31 && (thangLapHD ==4 || thangLapHD == 6 || thangLapHD == 9 || thangLapHD == 11))
								{
									$('#loingaylaphd').text('Tháng có 30 ngày');
									flag = false;	
								}else
									if(thangLapHD == 2)
									{
										var namnhuan = (namLapHD % 4 == 0 && (namLapHD % 100 != 0 || namLapHD % 400 == 0));
										if(ngayLapHD > 29 || ngayLapHD == 29 && !namnhuan)
										{
											$('#loingaylaphd').text('Tháng 2 co 29 ngày');
											flag = false;
										}else{
											$('#loingaylaphd').text('');
										}
									}

		// ngay giao hang
		if(ngayGiao.length!=10)
		{
			$('#loingaygiao').text('Ngày giao hàng sai định dạng');
			flag = false;
		}else
			if(ngayGiao == "")
			{
				$('#loingaygiao').text('Ngày giao hàng không được bỏ trống');
				flag = false;
			}else
				if(reg_Ngay.test(ngayGiao)==false)
				{
						$('#loingaygiao').text('Ngày giao hàng không đúng định dạng');
						flag = false;
					}else
						if(thangGiaoHang < 1 || thangGiaoHang > 12)
						{
							$('#loingaygiao').text('Sai tháng');
							flag = false;
						}else 
							if(ngayGiaoHang <1 || ngayGiaoHang>31)
							{
								$('#loingaygiao').text('Sai ngày');
								flag = false;
							}else
								if(ngayGiaoHang == 31 && (thangGiaoHang ==4 || thangGiaoHang == 6 || thangGiaoHang == 9 || thangGiaoHang == 11))
								{
									$('#loingaygiao').text('Tháng có 30 ngày');
									flag = false;	
								}else
									if(thangGiaoHang == 2)
									{
										var namnhuan = (namLapHD % 4 == 0 && (namLapHD % 100 != 0 || namLapHD % 400 == 0));
										if(ngayGiaoHang > 29 || ngayGiaoHang == 29 && !namnhuan)
										{
											$('#loingaygiao').text('Tháng 2 có 29 ngày');
											flag = false;
										}else{
											$('#loingaygiao').text('');
										}
									}

		// noi chuyển hàng

		if(noiGiao == "")
		{
			$('#loinoigiaohang').text('Nơi giao hàng không được bỏ trống');
			flag = false;
		}else
			if(isNaN(noiGiao)==false)
			{
				$('#loinoigiaohang').text('Nơi giao hàng là chuổi');
				flag = false;
			}else
				{
					$('#loinoigiaohang').text('');

				}

		//trạng thái
		if(trangthai == "")
		{
			$('#loitrangthai').text('Trạng thái không được rỗng');
			flag = false;
		}else
			if(isNaN(trangthai)==true)
			{
				$('#loitrangthai').text('Trạng thái phải là số nguyên');
				flag = false;
			}else
				if(trangthai < 0 || trangthai > 1)
				{
					$('#loitrangthai').text('1 = xóa hoặc 0 = không xóa');
					flag = false;
				}else
					{
						$('#loitrangthai').text('');
					}
	return flag;
	});

	$('.suacthd').click(function(){
		var soluong = $('input[name="soluongct"]').val();
		var trangthai = $('input[name="trangthaict"]').val();
		var flag = true;
		if(isNaN(soluong) == true)
		{
			$('#loisoluongct').text('Là số');
			flag = false;
		}else
			if(soluong < 0)
			{
				$('#loisoluongct').text('Lớn hơn 0');
				flag = false;
			}else
				{
					$('#loisoluongct').text('');
				}

		
		if(isNaN(trangthai) == true)
		{
			$('#loitrangthaict').text('Là số');
			flag = false;
		}else
			if(trangthai < 0 || trangthai >1)
			{
				$('#loitrangthaict').text('1 = xóa hoặc 0 = không xóa');
				flag = false;
			}else
				if(trangthai < 0)
				{
					$('#loitrangthaict').text('1 = xóa hoặc 0 = không xóa');
					flag = false;
				}else
				{
					$('#loitrangthaict').text('');
				}
		return flag;
	});
})(jQuery);