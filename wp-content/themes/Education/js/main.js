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
        // var DefaultBg = thisBtn.css('background-color');
        var DefaultBg = '#2878EB';
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
            thisBtn.children('span').text('???? ?????? ???????? ??????????????????');
            thisBtn.attr('disabled', "disabled");
            setTimeout(function () {
                thisBtn.css({'background-color':DefaultBg});
                thisBtn.children('span').text(DefaultText);
                thisBtn.removeAttr('disabled', "disabled");
            }, 3000);
        }else{
            sendAjaxForm(url, idForm);
            // $('.btn-submit').css({'background-color': '#2878EB'});
            // thisBtn.css({'background-color':DefaultBg});
            thisBtn.children('span').text(DefaultText);
            thisBtn.removeAttr('disabled', "disabled");
            $(thisBtn).closest('form').find('input[required="required"]').each(function () {
                $(this).val('');
                $(this).text('');
            })
        }

    });
    // console.log(JSON.stringify(JsonData));
    function sendAjaxForm(url, idForm) {
        console.log((JsonData));
        $.ajax({
            url:     url, //url ???????????????? (action_ajax_form.php)
            type:     "POST", //?????????? ????????????????
            dataType: "html", //???????????? ????????????
            data: $("#"+idForm).serialize(),  // ?????????????????????? ????????????
            success: function(response) { //???????????? ???????????????????? ??????????????
                // $('.btn-submit').css({'background-color': '#2878EB'});
                let res = '<div class="content__p-submit-container successed"><span class="container__close-icon">x</span><p>'+JsonData.submitMessage+'</p></div>';
                $('.popups__content').append(res);
                $('.popups').show(300);

            },
            error: function(response) { // ???????????? ???? ????????????????????
                // $('.btn-submit').css({'background-color': '#2878EB'});
                let res = '<div class="content__p-submit-container error-bg"><span class="container__close-icon">x</span><p>'+JsonData.errMessage+'</p></div>';
                $('.popups__content').append(res);
                $('.popups').show(300);
            },
            complete: function () {
                // $('.btn-submit').css({'background-color': DefaultBg});
                setTimeout(function () {
                    $('.popups').hide(300);
                    $('.popups__content').html('');
                }, 3000);
            }
        });

    }
    $('.popups__content').on('click', '.container__close-icon', function () {
        $('.popups').hide(300);
        $('.popups__content').html('');
    });
    $('body').click(function () {
        $('.popups').hide(300);
        $('.popups__content').html('');
        }
    );
    $('#up').click(function() {
        $("html, body").animate({
            scrollTop:0
        },1000);
    });
    $(window).scroll(function() {
        // ???????? ???????????????????????? ?????????????????? ???????????????? ?????????? ?????? ???? 200px
        if ($(this).scrollTop()>200) {
            // ???? ?????????????? ???????????? scrollup ??????????????
            $('#up').fadeIn();
        }
        // ?????????? ???????????? ???????????? scrollup
        else {
            $('#up').fadeOut();
        }
    });
});