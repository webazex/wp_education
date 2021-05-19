$(document).ready(function () {
    function animMobBtnBurger(){
        $('.btn-menu-mob__block-center span:nth-child(1)').css({'transform':'rotate(0deg)'});
        $('.btn-menu-mob__block-center span:nth-child(2)').css({'transform':'rotate(0deg)'});
        $('.btn-menu-mob__block-center').css({'justify-content':'space-between'});
        $('.btn-menu-mob__block-center span:nth-child(3)').css({'display':'block'});
    }
    function animMobBtnClose(){
        $('.btn-menu-mob__block-center').css({'justify-content':'center'});
        $('.btn-menu-mob__block-center span:nth-child(3)').css({'display':'none'});
        $('.btn-menu-mob__block-center span:nth-child(1)').css({'transform':'rotate(45deg)'});
        $('.btn-menu-mob__block-center span:nth-child(2)').css({'transform':'rotate(-45deg)'});
    }
    $('.container-mob__btn-menu-mob').click(function () {
        if(($('.header-grid__row-menu').is(':visible')) == true){
            animMobBtnBurger();
            $('#menuH').css({'display':'none'});
        }else{
            animMobBtnClose();
            $('#menuH').css({'display':'flex'});
        }
    });
    $(window).resize(function() {
        if(($('.header-grid__container-mob').is(':visible') !== true)) {
            $('#menuH').css({'display': 'flex'});
        }
    });
    $('.faq__row').click(function () {
        var q = $(this).children('.row__container-q');
        var a = $(this).children('.row__container-a');
        if(a.is(':visible') === true){
            q.children('.container-q__icon').css({'background':'#B0B0B0'});
            q.children('.container-q__icon-anim').css({'background':'#2878EB'});
            q.children('.container-q__text-q').css({'color':'#161223'});
            q.children('.container-q__icon-anim').children('span:nth-child(2)').css({'transform':'rotate(90deg)'});
            a.hide(300);
        }else{
            q.children('.container-q__icon').css({'background':'#161223'});
            q.children('.container-q__icon-anim').css({'background':'#FFA100'});
            q.children('.container-q__text-q').css({'color':'#FFA100'});
            q.children('.container-q__icon-anim').children('span:nth-child(2)').css({'transform':'rotate(0deg)'});
            a.show(300);
        }
    });
    $('.btn-submit').click(function (e) {
        e.preventDefault();
        var url = $(this).closest("form").attr('data-sender');
        var idForm = $(this).closest("form").attr('id');
        var thisBtn = $(this);
        var DefaultBg = thisBtn.css('background-color');
        var DefaultText = thisBtn.children('span').text();
        var thisInputStatus = [];
       $(this).closest('form').find('input[required="required"]').each(function () {

           if($(this).val() !== ''){
                thisInputStatus.push(true);
           }else{
               thisInputStatus.push(false);
           }
       });
       var verifyInputs = true;
       $.each(thisInputStatus, function () {
           if(this == false){
               verifyInputs = false;
           }
       });
        if(verifyInputs === false){
            thisBtn.css({'background-color':'black'});
            thisBtn.children('span').text('Не все поля заполнены');
            thisBtn.attr('disabled', "disabled");
            setTimeout(function () {
                thisBtn.css({'background-color':DefaultBg});
                thisBtn.children('span').text(DefaultText);
                thisBtn.removeAttr('disabled', "disabled");
            }, 3000);
        }else{
            sendAjaxForm(url, idForm);
            thisBtn.css({'background-color':DefaultBg});
            thisBtn.children('span').text(DefaultText);
            thisBtn.removeAttr('disabled', "disabled");
            $(thisBtn).closest('form').find('input[required="required"]').each(function () {
                $(this).val('');
                $(this).text('');
            })
        }

    });
    console.log(JSON.stringify(JsonData));
    function sendAjaxForm(url, idForm) {
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#"+idForm).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно

                let res = '<div class="content__p-submit-container successed"><span class="container__close-icon">x</span><p>Отправлено</p></div>';
                $('.popups__content').append(res);
                $('.popups').show(300);

            },
            error: function(response) { // Данные не отправлены
                let res = '<div class="content__p-submit-container error-bg"><span class="container__close-icon">x</span><p>Ошибка отправки</p></div>';
                $('.popups__content').append(res);
                $('.popups').show(300);
            },
            complete: function () {

            }
        });

    }
    $('.popups__content').on('click', '.container__close-icon', function () {
        $('.popups').hide(300);
        $('.popups__content').html('');
    });
    $('#up').click(function() {
        $("html, body").animate({
            scrollTop:0
        },1000);
    })
    $(window).scroll(function() {
        // если пользователь прокрутил страницу более чем на 200px
        if ($(this).scrollTop()>200) {
            // то сделать кнопку scrollup видимой
            $('#up').fadeIn();
        }
        // иначе скрыть кнопку scrollup
        else {
            $('#up').fadeOut();
        }
    });
});