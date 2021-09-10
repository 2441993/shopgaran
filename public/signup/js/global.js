(function ($) {
    'use strict';
    /*==================================================================
    [ Daterangepicker ]*/
    try {
        $('.js-datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoUpdateInput": false,
            locale: {
                format: 'DD/MM/YYYY'
            },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click',function(){
            isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker',function(ev, picker){
            isClick = 0;
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click',function(e){
            e.stopPropagation();

            if(isClick === 1) isClick = 0;
            else if(isClick === 0) isClick = 1;

            if (isClick === 1) {
                myCalendar.focus();
            }
        });

        $(myCalendar).on('click',function(e){
            e.stopPropagation();
            isClick = 1;
        });

        $('.daterangepicker').on('click',function(e){
            e.stopPropagation();
        });


    } catch(er) {console.log(er);}
    /*[ Select 2 Config ]
    ===========================================================*/
    
    try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
            var that = $(this);
            var selectBox = that.find('select');
            var selectDropdown = that.find('.select-dropdown');
            selectBox.select2({
                dropdownParent: selectDropdown
            });
        });

    } catch (err) {
        console.log(err);
    }
    
    $('.form-signup').submit(function(){
     var username = $('input[name="username"]').val();
     var matkhau = $('input[name="password"]').val();
     var nhaplaimatkhau = $('input[name="Repass"]').val();
     var email = $('input[name="email"]').val();
     var tenKH = $('input[name="tenkhachhang"]').val();
     var diachi = $('input[name="diachi"]').val();
     var sdt = $('input[name="sdt"]').val();
     var reg_sdt = /[0][0-9]{9}/;
     var reg_email = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
     var reg_hoten = /[A-Za-z0-9]{4,15}/;
     var flag = true;

    if(username == "")
    {
        $('#loiten').text('Lỗi tài khoản');
        flag = false;
    }
    else
    {
        if(reg_hoten.test(username) == false)
        {
            $('#loiten').text('Tên tài khoản không đúng định dạng');
            flag = false;
        }else
        {
            $('#loiten').text('');
        }
    }

    if(matkhau == "")
    {
        $('#loimk').text('Lỗi Mật Khẩu');
        flag = false;
    }
    else
    {
        if(reg_hoten.test(matkhau)==false)
        {
            $('#loimk').text('mật khẩu từ 4-8 kí tự');
            flag = false;
        }
        else{
            $('#loimk').text('');
        }

        if( nhaplaimatkhau == "")
        {
            $('#loinlmk').text('nhập lại mật khẩu sai');
            flag = false;
        }
        else
        {
            if(matkhau != nhaplaimatkhau)
            {
                $('#loinlmk').text('mật khẩu không giống nhập lại mật khẩu');
                flag = false;
            }else
            {
                $('#loinlmk').text('');
            }
        }
    }

    //// email
    if(reg_email.test(email) == false)
    {
        $('#loiemail').text('email không đúng định dạng');
        flag = false;
    }else
    {
        $('#loiemail').text('');
    }

    
    /// ten khach hang
    if(tenKH == "")
    {
       $('#loihoten').text('họ và tên không được bỏ trống');
       flag = false; 
    }else
    {
        $('#loihoten').text('');
    }


    // dia chi
    if(diachi == "")
    {
       $('#loidiachi').text('địa chỉ không được bỏ trống');
       flag = false; 
    }else
    {
        $('#loidiachi').text('');
    }


    if(reg_sdt.test(sdt)==false)
    {
        $('#loisdt').text('số điện thoại không đúng định dạng');
        flag = false;
    }else
    {
        $('#loisdt').text('');
    }

return flag;
});
})(jQuery);