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
        $('#loiten').text('L???i t??i kho???n');
        flag = false;
    }
    else
    {
        if(reg_hoten.test(username) == false)
        {
            $('#loiten').text('T??n t??i kho???n kh??ng ????ng ?????nh d???ng');
            flag = false;
        }else
        {
            $('#loiten').text('');
        }
    }

    if(matkhau == "")
    {
        $('#loimk').text('L???i M???t Kh???u');
        flag = false;
    }
    else
    {
        if(reg_hoten.test(matkhau)==false)
        {
            $('#loimk').text('m???t kh???u t??? 4-8 k?? t???');
            flag = false;
        }
        else{
            $('#loimk').text('');
        }

        if( nhaplaimatkhau == "")
        {
            $('#loinlmk').text('nh???p l???i m???t kh???u sai');
            flag = false;
        }
        else
        {
            if(matkhau != nhaplaimatkhau)
            {
                $('#loinlmk').text('m???t kh???u kh??ng gi???ng nh???p l???i m???t kh???u');
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
        $('#loiemail').text('email kh??ng ????ng ?????nh d???ng');
        flag = false;
    }else
    {
        $('#loiemail').text('');
    }

    
    /// ten khach hang
    if(tenKH == "")
    {
       $('#loihoten').text('h??? v?? t??n kh??ng ???????c b??? tr???ng');
       flag = false; 
    }else
    {
        $('#loihoten').text('');
    }


    // dia chi
    if(diachi == "")
    {
       $('#loidiachi').text('?????a ch??? kh??ng ???????c b??? tr???ng');
       flag = false; 
    }else
    {
        $('#loidiachi').text('');
    }


    if(reg_sdt.test(sdt)==false)
    {
        $('#loisdt').text('s??? ??i???n tho???i kh??ng ????ng ?????nh d???ng');
        flag = false;
    }else
    {
        $('#loisdt').text('');
    }

return flag;
});
})(jQuery);