$(document).ready(function() {
    $('a[href^="#"]').click(function(){
        const target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000)
    });

    $('#signUp').click(function(){
        $('html, body').animate({
            scrollTop: $('#form_signupDrop').offset().top
        }, 3000)
    });

    $('#review').click(function(){
        $('html, body').animate({
            scrollTop: $('#aboutUs').offset().top
        }, 3000)
    });

    $('.button_footer').click(function(){
        $('html, body').animate({
            scrollTop: $('#form_signupDrop').offset().top
        }, 1000)
    });
    
});

$(document).ready(function(){
    $('#name, #telephone').on('input', function(){
        var name = $('#name').val();
        var telephone = $('#telephone').val();

        if (name.trim() !== '') {
            $('#signUp_form').prop('disabled', false);
        } else {
            $('#signUp_form').prop('disabled', true);
        }
        if (telephone.trim() !== '') {
            $('#signUp_form').prop('disabled', false);
        } else {
            $('#signUp_form').prop('disabled', true);
        } 
    });
    // Валидация при фокусе на поле ввода имени
    $('#name').on('focus', function(){
        var name = $(this).val();
        var regex_name = /^[А-ЯЁа-яё\s]+$/;

        if(!regex_name.test(name)){
            $('#formSignupName').html('*Имя должно содержать только кириллицу.');
            $('#signUp_form').prop('disabled', true);
        } else {
            $('#formSignupName').html('');
            $('#signUp_form').prop('disabled', false);
        }
    });
    $('#telephone').on('input', function() {
        $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''))
    });
    $('#name').on('input', function() {
        $(this).val($(this).val().replace(/[A-Za-z1-9]/, ''))
    });
    // Валидация при фокусе на поле ввода телефона
    $('#telephone').on('focus', function(){
        $(this).mask("+9(999)-999-99-99",{autoclear: false});
        // 
        var telephone = $(this).val();
        var regex_telephone = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/i;;

        if(!regex_telephone.test(telephone)){
            $('#formSignupTelephone').html('*Неправильный формат номера. Пример: +7(911)-465-10-93.');
            $('#signUp_form').prop('disabled', true);
        } else {
            $('#formSignupTelephone').html('');
            $('#signUp_form').prop('disabled', false);
        }
    });

    
    $('#signUp_form').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'formSignUp.php',
            data: $('#signup_form').serialize(),
            success: function(response){
                $('#signUp_form').val('Мы свяжемся с вами!');
                $('#name').val('');
                $('#telephone').val('');
                $('#formSignupName').html('');
                $('#formSignupTelephone').html('');
                $('#dialogWindow').css('display','flex');
                $('#dialogWindow').html(response);
                setTimeout(function() {
                    $('#signUp_form').val('Записаться на прием');
                    $('#signUp_form').prop('disabled', true);
                    $('#dialogWindow').css('display','none');
                }, 6000);
            }, 
            error: function(){
                alert('Произошла ошибка при отправке формы.');
            }
        });
    });
});


$('#submit_avtor').on('click', function(){
    $.ajax({
        type: 'POST',
        url: 'formAvtor.php',
        data: $('.avtorizacia').serialize(),
        success: function(response){
            $('#modalWindow').css('display','none');
            $('#modalDialogWindow').css('display','flex');
            $('#modalDialogWindow').html(response);
            setTimeout(function() {
                $('#modalDialogWindow').css('display','none');
            }, 6000);
        }, 
        error: function(){
            alert('Произошла ошибка при отправке формы.');
        }
    });
});

$('#submit').on('click', function(){
    $.ajax({
        type: 'POST',
        url: 'formReg.php',
        data: $('.registracia').serialize(),
        success: function(response){
            $('#modalWindow').css('display','none');
            $('#modalDialogWindow').css('display','flex');
            $('#modalDialogWindow').html(response);
            setTimeout(function() {
                $('#modalDialogWindow').css('display','none');
            }, 6000);
        }, 
        error: function(){
            alert('Произошла ошибка при отправке формы.');
        }
    });
});