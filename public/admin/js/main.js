$(function() {

$('.showInHiddenSidebar').on('click', function () {
$('.layout-fixed .main-sidebar').toggleClass('show')
})

    // $(".owlThree").owlCarousel({
    //     items: 4,
    //     loop:true,
    //     navigation : false,
    //     slideSpeed : 300,
    //     paginationSpeed : 400,
    //     singleItem:true,
    //
    //     smartSpeed: 1000,
    //     responsive : {
    //
    //         0 : {
    //             items:1
    //         },
    //
    //         768 : {
    //             items:2
    //         },
    //         1050: {
    //             items:3
    //         },
    //         1370: {
    //             items:4
    //         }
    //
    //     }
    //
    // });


    // var bigimage = $("#big");
    // var thumbs = $("#thumbs");
    // //var totalslides = 10;
    // var syncedSecondary = true;
    //
    // bigimage
    //     .owlCarousel({
    //         items: 1,
    //         slideSpeed: 2000,
    //         nav: true,
    //
    //         // autoplay: true,
    //         dots: false,
    //         // loop: true,
    //         responsiveRefreshRate: 200,
    //         navText: [
    //             '<i class="fas fa-chevron-left"></i>',
    //             '<i class="fas fa-chevron-right"></i>'
    //         ]
    //     })
    //     .on("changed.owl.carousel", syncPosition);
    //
    // thumbs
    //     .on("initialized.owl.carousel", function() {
    //         thumbs
    //             .find(".owl-item")
    //             .eq(0)
    //             .addClass("current");
    //     })
    //     .owlCarousel({
    //         items: 3,
    //         dots: true,
    //         // loop:true,
    //         nav: true,
    //         navText: [
    //             '<i class="fas fa-chevron-left"></i>',
    //             '<i class="fas fa-chevron-right"></i>'
    //         ],
    //         smartSpeed: 200,
    //         slideSpeed: 500,
    //         slideBy: 1,
    //         responsiveRefreshRate: 100,
    //
    //         responsive : {
    //
    //             0 : {
    //                 items:2
    //             },
    //
    //             600 : {
    //                 items:3
    //             },
    //
    //         }
    //     })
    //
    //
    // function syncPosition(el) {
    //     //if loop is set to false, then you have to uncomment the next line
    //     //var current = el.item.index;
    //
    //     //to disable loop, comment this block
    //     console.log(el);
    //     var count = el.item.count - 1;
    //     var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
    //
    //
    // }



    // thumbs.on("click", ".owl-item", function(e) {
    //     e.preventDefault();
    //     var number = $(this).index();
    //     bigimage.data("owl.carousel").to(number, 300, true);
    // });

    $('.feedback .addFeedback button').on('click' , function(){
        $('.addfeedbackModal').show()
    })
    $('.bookNow').on('click' , function(){
        $('.addfeedbackModal.single').show()
    })
    // $('.closeModal').on('click' , function(){
    //     $('.addfeedbackModal').hide()
    //     localStorage.removeItem("booking");
    // })
    $('.closeModal').on('click' , function(){
        $('.modals').hide()
        $('.addfeedbackModal').hide()
        $('.modal-backdrop').hide()
        $('body').removeClass('modal-open')
        $('.addfeedbackModal ').removeClass('show')
    })
    $('.reservedNumber button.close').on('click' , function(){

        $('.modals.reservedNumber').hide()
    })
    $('.logo button.hideInWeb').on('click', function () {

        $('header .mobileMenu').slideToggle()
        $('header').toggleClass('active')
    })
    // $('.owl-next span').html('<img class="arrowsOwlCarousel" src="img/Captureright.png" alt="">')
    // $('.owl-prev span').html('<img  class="arrowsOwlCarousel" src="img/CaptureLeft.png" alt="">')

    $('.dropdown2').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdown2').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdown2 .dropdown-menu li').click(function () {
        $(this).parents('.dropdown').find('span.text').text($(this).text());
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('class'));

        $(this).closest('.dropdown2').find('input[type="hidden"]').val($(this).attr('data-filter'))
        // alert($(this).attr('class'))
        var admin_code = $('#admin_code').val();
        var user_report = $('#user_report').val();

        console.log($(this).closest('.dropdown2').find('input[type="hidden"]').val())
        localStorage.setItem("user_report", user_report);
        var user = [];
        $('.dropdownForCheckWorkers .checked').each(function (k) {
            user[k] = $(this).val();
        });

        var arr=[];
        $('.dropdown-menu.drop1 input').each(function (m) {
            if($(this).attr('class') == 'checked'){
                arr.push($(this).val())
            }
        });
        $('#user_name').attr('value',arr);

        // $('#form_user').submit();

    });
    $('.dropdown-menu.select_type li').click(function () {
        $('#form_user').submit();
    })

    $('.typeOfAdd').on('click', function() {
        $('.uploadFile').addClass('show')
    })

    $('.menuIcon').on('click', function() {
        $('.leftSidebar').toggleClass('partial')
        $('.rightSideContent').toggleClass('full')
    })

    /*Dropdown Menu*/
    $('.dropdownForCheckWorkers .select').click(function () {
        $(this).closest('.dropdownForCheckWorkers').attr('tabindex', 1).focus();
        $(this).closest('.dropdownForCheckWorkers').toggleClass('active');
        $(this).closest('.dropdownForCheckWorkers').find('.dropdown-menu').slideToggle(300);
    });

    const $menu = $('.dropdownForCheckWorkers');
    $(document).mouseup(e => {
        if (!$menu.is(e.target) // if the target of the click isn't the container...
            && $menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $menu.removeClass('active');
            $('.drop1').slideUp(300);
        }
    });

    $('.dropdownForCheckWorkers .dropdown-menu li.all').click(function () {
        $(this).parents('.dropdownForCheckWorkers').find('span.text').text($(this).text());
        $(this).parents('.dropdownForCheckWorkers').find('input').attr('value', $(this).attr('id'));
        $menu.removeClass('active');
        $('.drop1').slideUp(300);
    });


    $('.apply button').on('click', function(){
        $('.applyedContent').slideUp()
        $('.apply button').show()
        $(this).closest('.item').find('.applyedContent').slideDown();
        $(this).hide()
    })
    $('.closeOPened').on('click', function(){
        $('.applyedContent').slideUp()
        $(this).closest('.item').find('.apply').find('button').show();

    })


    $('#donate').on('input', function(){
        if($(this).prop('checked')){
            $('.donation .formAndContInfo form .check .customCheck').addClass(
                'active')
        } else {
            $('.donation .formAndContInfo form .check .customCheck').removeClass(
                'active')
        }
    })

    // $('.save_feedback').click(function () {
    //              var input1 = $('#input_name').val();
    //              var input2 = $('#input_surname').val();
    //             var input3 = $('#textarea').val();
    //              if (input1 == '' || input2 == '' ||input3 =='') {
    //                      $('.valid_error').html('Այս դաշտը պարտադիր է');
    //                  } else {
    //
    //                      $('#feedback_form').submit();
    //                  }
    //          })





// var valueHover = 0;
//     function calcSliderPos(e,maxV) {
//           return (e.offsetX / e.target.clientWidth) *  parseInt(maxV,10);
//       }

//     $(".starrate").on("click",function(){
//       $(this).data('val',valueHover);
//       $(this).addClass('saved')
//       });

//     $(".starrate").on("mouseout",function(){
//       upStars($(this).data('val'));
//       });


//     $(".starrate span.ctrl").on("mousemover",function(e) {
//       var maxV = parseInt($(this).parent("div").data('max'))
//       valueHover = Math.ceil(calcSliderPos(e,maxV)*2)/2;
//       upStars(valueHover);
//       });


// function upStars(val) {

//   var val = parseFloat(val);
//   $("#test").html( val.toFixed(1) );

//   var full = Number.isInteger(val);
//   val = parseInt(val);
//   var stars = $("#starrate i");

//   stars.slice(0,val).attr("class" , "fas fa-fw fa-star" );
//   if(!full)  { stars.slice(val,val+1).attr("class" , "fas fa-fw fa-star-half-alt" ); val++ }
//   stars.slice(val,5).attr("class" , "far fa-fw fa-star" );




//   }


//       $(".starrate span.ctrl").width($(".starrate span.cont").width());
//       $(".starrate span.ctrl").height($(".starrate span.cont").height()+30);


// menak amboghj tverov gnahatum
    var valueHover = 0;
    function calcSliderPos(e,maxV) {
        return (e.offsetX / e.target.clientWidth) *  parseInt(maxV,10);
    }

    $(".starrate").on("click",function(){
        $(this).data('val',valueHover);
        $(this).addClass('saved')
        $('#rating').val(valueHover)

    });

    $(".starrate").on("mouseout",function(){
        upStars($(this) , $(this).data('val'));
    });


    $(".starrate span.ctrl").on("mousemove",function(e) {
        var maxV = parseInt($(this).parent("div").data('max'))
        valueHover = Math.ceil(calcSliderPos(e,maxV)  ) ;
        upStars($(this) , valueHover);
    });


    function upStars(thiss , val) {

        var val = parseFloat(val);
        $("#test").html( val.toFixed(1) );

        var full = Number.isInteger(val);
        val = parseInt(val);
        var stars = $(thiss).closest('.rateNow').find("#starrate i");

        stars.slice(0,val).attr("class" , "fas fa-fw fa-star" );
        stars.slice(val,5).attr("class" , "far fa-fw fa-star" );




    }



    $(".starrate span.ctrl").width($(".starrate span.cont").width());
    $(".starrate span.ctrl").height($(".starrate span.cont").height()+25);



    $('.infoAboutTour .seeSchedule .clickableSchedul').on('click' , function(){
        $('.infoAboutTour .seeSchedule .hiddenSchedule').slideToggle()
    })


    timeoutSuccess()
    function timeoutSuccess() {
        if ($(' .modals.successMessage').css('display')=='block'){
            setTimeout(function () {
                $(' .modals.successMessage').hide()
            },2500)
        }

    }

    // $('#check').click(function (){
    //     // console.log($(this).val())
    //     console.log($('#check').is(':checked'))
    // })
    //
    // function itemsSlider(that,ids,types){
    //     console.log(that,ids,types)
    // }

})

