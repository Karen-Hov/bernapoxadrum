
jQuery(document).ready(function($) {
    $.get($(location).attr('href'));
    $(".callback-button, .callback-button-all").on("click", function (e) {
        $($(this).data("modal")).fadeIn();
    });
    $(".callback-modal, .callback-modal__close").on("click", function (e) {
        e.stopPropagation();

        if (e.target === this) {
            $(this).closest(".callback-modal").fadeOut("fast");
            var id = "#" + $(this).closest(".callback-modal").attr("id");
            $('[data-modal = "' + id + '" ]').fadeIn("fast");
        }
    });
    $("#modal-video .close-video, #modal-video").click(function(e){
        $("#modal-video iframe").attr("src", "");
    });
    $(".vacancy-social a").click(function(e){
        e.preventDefault();
        var src = $(this).attr("href");

        $("#modal-video iframe").attr("src", src);

        var modal = UIkit.modal("#modal-video");
        modal.show();
    });
    $('.uk-form').on('keydown', 'input[name=years]', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
    if($(".panel-items-news").length){
        $('.panel-items-news').matchHeight();
    }
    var caseSensitive = false;
    var tableObj = $(".city-for-search");
    $("input.city-search").off('keyup').on('keyup', function(){
        searchFieldVal = $(this).val();
        if(searchFieldVal.length > 1){
            pattern = (caseSensitive)?RegExp(searchFieldVal):RegExp(searchFieldVal, 'i');
            tableObj.find('li').hide().each(function(){
                var currentRow = $(this);
                currentRow.find('a').each(function(){
                    if(pattern.test($(this).html())){
                        currentRow.show();
                        return false;
                    }
                });
            });
        }else{
            tableObj.find('li').show();
        }
    });
    $("#responses").on( "click", ".uk-pagination li a", function(e) {
        e.preventDefault();
        var p = $(this).attr("rel");
        if(p){
            $.post( '/ajax', { p: p, action: "responses" }, function(data){
                $("#responses").html(data);
            });
        }
    });
    $("button.get_offer").click(function(e){
        e.preventDefault();
    });
    $(".callback-modal__button2").click(function(e){
        e.preventDefault();

        var phone = $("#callback-modal input[name=phone]").val();

        $.post(
            '/ajax',
            {'action': 'fast_order', 'phone' : phone, 'qwert' : 'qwert'},
            function(data){
                $(".callback-modal__title--size_s").html("Мы отправили срочное сообщение руководителю, чтобы с вами связались.");
                $(".callback-modal__countdown").hide();
                $(".callback-modal__button2").hide();
            }
        );
    });
    $("button.callback-modal__button1").click(function(e){
        e.preventDefault();

        var error = false;
        var phone = $(this).closest("form").find("input[name=phone]").val();
        if(!phone){
            $(this).closest("form").find("input[name=phone]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=phone]").removeClass("error-border");
        }
        if(!error){
            $.post(
                '/ajax',
                {'action': 'call_me', 'phone' : phone, 'qwert' : 'qwert'},
                function(data){
                    if(data == "bad"){
                        $(".callback-modal__form").hide();
                        $(".callback-modal__title").html("К сожалению, по техническим причинам звонок совершить невозможно.");
                    }else{
                        $(".callback-modal__step--first").hide();
                        $(".callback-modal__step--second").show();

                        var timerId = setInterval(function () {
                            var sec = parseInt($(".callback-modal__countdown").html());
                            sec = sec - 1;

                            if (sec >= 0) {
                                $(".callback-modal__countdown").html(sec);
                            }else{
                                clearInterval(timerId);
                                $(".callback-modal__button2").show();
                            }
                        }, 1000);
                        /*
                        var xhr;
                        var answer = "";
                        (function poll() {
                            if(answer == "no"){
                                answer = "";
                                return;
                            }
                            setTimeout(function() {
                                xhr = $.ajax({
                                        url: "/ajax",
                                        type: "POST",
                                        data: { phone: phone, action: "call_check"},
                                        success: function(data) {
                                            answer = data;
                                            if(data == "ok"){
                                                var modal = UIkit.modal("#callback-modal");
                                                modal.hide();
                                            }
                                        },
                                        dataType: "text",
                                        complete: poll,
                                        timeout: 20000
                                    })
                                }, 1000);
                        })();
                        */
                    }
                }
            );
        }
    });
    $("button.resume-button").click(function(e){
        e.preventDefault();

        var error = false;
        var phone = $(this).closest("form").find("input[name=phone]").val();
        var name = $(this).closest("form").find("input[name=name-client]").val();
        var second = $(this).closest("form").find("input[name=second-name-client]").val();
        var last = $(this).closest("form").find("input[name=last-name-client]").val();
        var years = $(this).closest("form").find("input[name=years]").val();
        var sitizenship = $(this).closest("form").find("select[name=sitizenship]").val();
        var is_checked = $(this).closest("form").find("input#approve-checkbox").is(":checked");
        if(!phone){
            $(this).closest("form").find("input[name=phone]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=phone]").removeClass("error-border");
        }
        if(!name){
            $(this).closest("form").find("input[name=name-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=name-client]").removeClass("error-border");
        }
        if(!second){
            $(this).closest("form").find("input[name=second-name-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=second-name-client]").removeClass("error-border");
        }
        if(!last){
            $(this).closest("form").find("input[name=last-name-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=last-name-client]").removeClass("error-border");
        }
        if(!years){
            $(this).closest("form").find("input[name=years]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=years]").removeClass("error-border");
        }
        if(!sitizenship){
            $(this).closest("form").find("select[name=sitizenship]").closest("div").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("select[name=sitizenship]").closest("div").removeClass("error-border");
        }
        if(!is_checked){
            $(".uk-text-center label").css("color", "red");
            error = true;
        }else{
            $(".uk-text-center label").css("color", "#444");
        }
        if(!error){
            $.post(
                '/ajax',
                {'action': 'mail_resume', 'phone' : phone, 'name' : name, 'second' : second, 'last' : last, 'years' : years, 'sitizenship' : sitizenship, 'qwert' : 'qwert'},
                function(data){
                    var modal = UIkit.modal("#modal-anketa");
                    modal.hide();

                    var modal = UIkit.modal("#modal-director-finish");
                    modal.show();
                }
            );
        }
    });
    $("#modal-director .uk-button").click(function(e){
        e.preventDefault();

        var error = false;
        var phone = $(this).closest("form").find("input[name=phone]").val();
        var is_checked = $(this).closest("form").find("input#approve-checkbox2").is(":checked");
        if(!phone){
            $(this).closest("form").find("input[name=phone]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=phone]").removeClass("error-border");
        }
        var message = $(this).closest("form").find("textarea[name=message-client]").val();
        if(!message){
            $(this).closest("form").find("textarea[name=message-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("textarea[name=message-client]").removeClass("error-border");
        }
        var mail = $(this).closest("form").find("input[name=email-client]").val();
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if(!pattern.test(mail)){
            $(this).closest("form").find("input[name=email-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=email-client]").removeClass("error-border");
        }
        if(!is_checked){
            $(".uk-text-center label").css("color", "red");
            error = true;
        }else{
            $(".uk-text-center label").css("color", "#444");
        }
        if(!error){
            $.post(
                '/ajax',
                {'action': 'mail_director', 'phone' : phone, 'mail' : mail, 'message' : message, 'qwert' : 'qwert'},
                function(data){
                    var modal = UIkit.modal("#modal-director");
                    modal.hide();

                    var modal = UIkit.modal("#modal-director-finish");
                    modal.show();
                }
            );
        }
    });

    $("button.get_pp").click(function(e){
        e.preventDefault();

        var error = false;
        var phone = $(this).closest("form").find("input[name=phone]").val();
        var inn = $(this).closest("form").find("input[name=personal-code]").val();
        if(!phone){
            $(this).closest("form").find("input[name=phone]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=phone]").removeClass("error-border");
        }
        var mail = $(this).closest("form").find("input[name=mail-client]").val();
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if(!pattern.test(mail)){
            $(this).closest("form").find("input[name=mail-client]").addClass("error-border");
            error = true;
        }else{
            $(this).closest("form").find("input[name=mail-client]").removeClass("error-border");
        }
        if(!error){
            $.post(
                '/ajax',
                {'action': 'get_pp', 'phone' : phone, 'mail' : mail, 'inn' : inn, 'qwert' : 'qwert'},
                function(data){
                    $(".offer-slide-modal").toggleClass('uk-open');
                    var modal = UIkit.modal("#modal-get-pp");
                    modal.show();
                }
            );
        }
    });

    $("button.consult-button ").click(function(e){
        e.preventDefault();
        var phone = $(this).closest(".uk-form").find("input[name=phone]").val();
        if(!phone){
            $(this).closest(".uk-form").find("input[name=phone]").addClass("error-border");
        }else{
            $(this).closest(".uk-form").find("input[name=phone]").removeClass("error-border");
            var form = $(this).closest(".uk-form");
            $.post(
                '/ajax',
                {'action': 'fast_order', 'phone' : phone, 'qwert' : 'qwert'},
                function(data){
                    $(form).submit();
                }
            );
        }
    });

    $("button.fast_order").click(function(e){
        e.preventDefault();
        var phone = $(this).closest(".uk-form").find("input[name=phone]").val();
        if(!phone){
            $(this).closest(".uk-form").find("input[name=phone]").addClass("error-border");
        }else{
            $(this).closest(".uk-form").find("input[name=phone]").removeClass("error-border");
            $.post(
                '/ajax',
                {'action': 'fast_order', 'phone' : phone, 'qwert' : 'qwert'},
                function(data){
                    var modal = UIkit.modal("#modal-we-calling");
                    modal.show();
                }
            );
        }
    });


    // before footer form move button left
    var i = 0;
    //if ($('.consultating-block .uk-form .uk-button').attr('data-live') < 1) {
    $('.consultating-block .uk-form .uk-button.b-work:not(.uk-active)').on("click", function(event) {
        if($(this).hasClass('uk-active')){
            var phone = $(this).closest('.uk-form').find('input').val();

            if(!phone){
                $(this).closest('.uk-form').find('input').addClass("error-border");
            }else{
                $(this).closest('.uk-form').find('input').removeClass("error-border");
                var input = $(this);
                $.post(
                    '/ajax',
                    {'action': 'fast_order', 'phone' : phone, 'qwert' : 'qwert'},
                    function(data){
                        var modal = UIkit.modal("#modal-we-calling");
                        modal.show();
                        $(input).removeClass('uk-active');
                    }
                );
            }
        }else{
            $(this).addClass('uk-active');
            $(this).closest('.uk-form').find('input').focus();
            $(this).attr('data-live', i++);
        }
    });
    $('.yellow-question-block .uk-form .uk-button').on("click", function(event) {
        event.preventDefault();

        var phone = $(this).closest('.uk-form').find('input').val();

        if(!phone){
            $(this).closest('.uk-form').find('input').addClass("error-border");
        }else{
            $(this).closest('.uk-form').find('input').removeClass("error-border");
            var input = $(this);
            $.post(
                '/ajax',
                {'action': 'fast_order', 'phone' : phone, 'qwert' : 'qwert'},
                function(data){
                    var modal = UIkit.modal("#modal-we-calling");
                    modal.show();
                    $(input).removeClass('uk-active');
                }
            );
        }
    });
    //}
    /*
    if ($('.consultating-block .uk-form .uk-button').attr('data-live') > 1) {
        $('.consultating-block .uk-form ').delegate('.uk-active', 'click', function(event) {
            $(this).attr('type', 'submit');
        });

    }
    */

    // inputmask form phone

    // $('input[name=phone]').inputmask("+7 (999) 999-99-99",{ "clearIncomplete": true });

    // open offer modal
    $('.offer-button, .offer-main .uk-close, .offer-bg-block').click(function(event) {
        $(this).closest('.offer-slide-modal').toggleClass('uk-open');
        event.preventDefault();
    });

    // load blocks from folder /blocks
    // if ($('body').hasClass('outsorsing') || $('body').hasClass('about')) {
    //     $('.top-head').load('blocks/top-head.html');
    //     $('.main-menu').load('blocks/main-menu.html');
    //     $('.footer-block').load('blocks/footer-block.html');
    //  }

    // stylize select
    if ($('select').hasClass('select-stylize')) {
        $('.select-stylize').styler();
    }

    // add error class to input form

    $('.consultating-block .uk-form button.uk-button.b-work').click(function(event) {
        event.preventDefault();
        //$('.we-calling').trigger('click');
        //$(this).closest('.uk-form').find('input').addClass('error-border');
    });

    // after focus input remove border error
    $('input[type=text]').focus(function(event) {
        $(this).removeClass('error-border');
    });

    // toggle text on button readmore in page news
    var toggler = 0;
    $('.read-more').click(function(event) {
        if (toggler == 0) {
            console.log(toggler);
            $(this).text('Читать полностью');
            toggler = 1;
        } else {
            $(this).text('Скрыть новость');
            toggler = 0;
        }
    });

    // set actual width dropdown  news
    $('.panel-items-news').click(function(event) {
        $('.panel-items-news').each(function(index, el) {
            $(this).removeClass('uk-active');
            $(this).closest('li').find('.full-panel-news').addClass('uk-hidden');
            $(this).closest('li').find('.full-panel-news').removeAttr('style');
        });
        $(this).toggleClass('uk-active');
        var mainWindow = $(window).width();
        var itemContainerWidth = $(this).closest('.uk-position-relative').find('.full-panel-news').outerWidth();
        var itemContainePosLeft = $(this).closest('.uk-position-relative').offset().left;
        $(this).closest('.uk-position-relative').find('.full-panel-news').css('left', -itemContainePosLeft+'px');
        $(this).closest('.uk-position-relative').find('.full-panel-news').css('width', mainWindow-itemContainerWidth+'px');
        $(this).closest('.uk-position-relative').find('.full-panel-news').toggleClass('uk-hidden');
        console.log(mainWindow+' '+itemContainerWidth+' '+itemContainePosLeft);
    });

    $('.full-panel-news .uk-dropdown-close').click(function(event) {
        event.preventDefault();
        $(this).closest('.full-panel-news').toggleClass('uk-hidden');
        $(this).closest('.full-panel-news').removeAttr('style');
        $(this).closest('li').find('.panel-items-news').removeClass('uk-active');
    });

    $('.panel-square-form .uk-close, .button-close.uk-close').click(function(event) {
        event.preventDefault();
    });

    // offcanvas-menu
    //
    //
    var vk = '';
    var inst = '';
    var youtube = '';
    if($(".footer-social .vk-a").length){
        vk = $(".footer-social .vk-a").attr("href");
    }
    if($(".footer-social .inst-a").length){
        inst = $(".footer-social .inst-a").attr("href");
    }
    if($(".footer-social .you-a").length){
        youtube = $(".footer-social .you-a").attr("href");
    }
    // var $menu = $("#wrap-menu").mmenu({
    //     navbars: [
    //         {
    //             "position": "bottom",
    //             "content": [
    //                 "<a href='" + vk + "' title='Вконтакте' target='_blank'><i class='uk-icon-vk'></i></a>",
    //                 "<a href='" + inst + "' title='Instagram' target='_blank'><i class='uk-icon-instagram'></i></a>",
    //                 "<a href='" + youtube + "' title='Youtube' target='_blank'><i class='uk-icon-youtube-play'></i></a>"
    //             ]
    //         }],
    //     "extensions": [
    //         "position-front",
    //         "position-back",
    //         "position-right",
    //         "pagedim-black",
    //         "theme-dark",
    //         "multiline"
    //     ],
    //     navbar: {
    //         title: ""
    //     }
    // }, {
    //     // configuration
    //     offCanvas: {
    //         // pageNodetype: "section",
    //         pageSelector: "#wrap-container"
    //     }
    // });

    //

    var $icon = $("#hamburger-icon");
    // var API = $menu.data( "mmenu" );
    //
    // $icon.on( "click", function() {
    //     API.open();
    //     API.close();
    // });
    //
    // API.bind( "open:finish", function() {
    //     // setTimeout(function() {
    //     $icon.addClass( "is-active" );
    //     // }, 100);
    // });
    // API.bind( "close:finish", function() {
    //     // setTimeout(function() {
    //     $icon.removeClass( "is-active" );
    //     // }, 100);
    // });


    $('.hamburger').click(function(event) {
        $('.mm-navbars_bottom').addClass('footer-social');
    });

    setTimeout(function() {
        if ($('.main-menu').hasClass('uk-active')) {
            $('.mm-panels').addClass('scrolled');
        }
    }, 100);

    $(window).on('scroll', function(event) {
        if ($('.main-menu').hasClass('uk-active')) {
            $('.mm-panels').addClass('scrolled');
        } else {
            $('.mm-panels').removeClass('scrolled');
        }
    });

    // thanks after submit on small form on "how-it-works-....html" pages
    $('.form-mini').submit(function(event) {
        event.preventDefault();
        $(this).html("<p class='uk-margin-remove'>Спасибо за вашу заявку, <br/>мы сейчас позвоним</p>");
    });

    $('.panel-square-form .uk-form').submit(function(event) {
        event.preventDefault();
        $(this).closest('.panel-square-form').addClass('thanks')
        $(this).html("<p class='uk-margin-remove'>Спасибо за вашу заявку, <br/>мы сейчас позвоним</p>");
    });


});
