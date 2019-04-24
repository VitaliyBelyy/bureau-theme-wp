$(document).ready(function() {

    $('body.secondary header .services-link').parent().remove();

    $('.header-fixed-menu').hide();
    var currentPos = 0,
    prevPos = 0,
    position = 0;
    $(window).scroll(function(){
        var st = $(this).scrollTop();
        $('body.secondary header').css({
            "background-position":"center "+st/2+"px"
        });

        prevPos = currentPos;
        currentPos = $(this).scrollTop();
        if (prevPos<currentPos && currentPos>200) {
            $('#scroll').addClass('top');
            $('#scroll').removeClass('down');
        }
        else if(currentPos<200){
            $('#scroll').removeClass('top');
        }


        if ($(window).scrollTop() > 120 && prevPos>currentPos) {
            $('.header-fixed-menu').show();

        }
        // else if ($(window).scrollTop() == $('html').height() - $(window).innerHeight() && $(window).scrollTop() > 120) {
        //     $('.header-fixed-menu').show();
        // }
        else {
            $('.header-fixed-menu').hide();
        }


        if ($(window).scrollTop() >= $('.wrap-post').offset().top-370) {

            $('.wrap-post.mainpage:nth-child(1)')
                .css('display', 'inline-block')
                .animate({opacity: 1.0, left: '0px'}, 1000);

            $('.wrap-post.mainpage:nth-child(2)')
                .css('display', 'inline-block')
                .animate({opacity: 1.0}, 1500);

           $('.wrap-post.mainpage:nth-child(3)')
                .css('display', 'inline-block')
                .animate({opacity: 1.0, right: '0px'}, 1000);
        }
    });
    $('body').on('click', '#scroll.top', function(){
        $(this).addClass('down');
        position = currentPos;
        $("html, body").animate({ scrollTop: 0 }, 600);
    });
    $('body').on('click', '#scroll.down', function(){
        $(this).removeClass('down');
        $("html, body").animate({ scrollTop: position }, 600);

    });


    $(".btn-headerinf").on("click", function (event) {
        event.preventDefault();
        var top = $('.city-selection').offset().top - 50;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    $(".services-link").on("click", function (event) {
        event.preventDefault();
        var top = $('.services-heading').offset().top - 50;
        $('body,html').animate({scrollTop: top}, 1000);
    });
    $(".connection-link").on("click", function (event) {
        event.preventDefault();
        var top = $('.main-contact-form').offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
        $('#mob-user').focus();
    });
    

    $( document ).on( "mousemove", function( event ) {

            $('.parallax-outer img:nth-child(1)').css({
                'transform':'translate('+ -(event.pageX-700)/20+'px,'+ -(event.pageY-350)/20+'px)'
            });

            $('.parallax-outer img:nth-child(2)').css({
                'transform':'translate('+ -(event.pageX-700)/10+'px,'+ -(event.pageY-350)/10+'px)'
            });

        });

    $(".services-slider").children(".owl-carousel").owlCarousel(
        {
            
            nav:true,
            mouseDrag: false,
            margin: 10,
            items:3,
            loop: true,
            smartSpeed:1000
        }
    );
    $(".services-slider-mobile").children(".owl-carousel").owlCarousel(
        {
            
            nav:true,
            // mouseDrag: false,
            margin: 10,
            items:1,
            loop: true,
            smartSpeed:1000
        }
    );


    var prev = '',
    current = '',
    preventAction = true;
    $("form").children().focus(function() {

        prev = current;
        current = $( this ).attr('id');
        if(current != prev) {
            switch(prev){
                case 'mob-user':
                    var mob = $('#mob-user').val();
                    var mobReg = /^((\+?\d{2})?\(\d{3}\)|(\+?\d{2})?\d{3})?[ \-]?\d{3}[ \-]?\d{2}[ \-]?\d{2}$/;
                    if(mobReg.test(mob) == false) {
                        $("#mob-user").css({
                            'border': '1px solid rgba(255, 0, 0, 0.6)',
                            'box-shadow': 'rgb(255, 0, 0) 0px 0px 5px 0px'
                        });
                        preventAction = false;
                    }
                    else {
                        $("#mob-user").css({
                            'border': '1px solid rgba(30, 142, 0, 0.71)',
                            'box-shadow': 'rgb(30, 142, 0) 0px 0px 5px 0px'
                        });
                        preventAction = true;
                    }
                    break;
                case 'name-user':
                    var name = $('#name-user').val();
                    var nameReg = /^[A-Za-zА-Яа-яЁё\-]{1,20}$/;
                    if(nameReg.test(name) == false) {
                        $("#name-user").css({
                            'border': '1px solid rgba(255, 0, 0, 0.6)',
                            'box-shadow': 'rgb(255, 0, 0) 0px 0px 5px 0px'
                        });
                        preventAction = false;
                    }
                    else {
                        $("#name-user").css({
                            'border': '1px solid rgba(30, 142, 0, 0.71)',
                            'box-shadow': 'rgb(30, 142, 0) 0px 0px 5px 0px'
                        });
                        preventAction = true;
                    }
                    break;
                case 'lastname-user':
                    var lastname = $('#lastname-user').val();
                    var nameReg = /^[A-Za-zА-Яа-яЁё\-]{1,20}$/;
                    if(nameReg.test(lastname) == false) {
                        $("#lastname-user").css({
                            'border': '1px solid rgba(255, 0, 0, 0.6)',
                            'box-shadow': 'rgb(255, 0, 0) 0px 0px 5px 0px'
                        });
                        preventAction = false;
                    }
                    else {
                        $("#lastname-user").css({
                            'border': '1px solid rgba(30, 142, 0, 0.71)',
                            'box-shadow': 'rgb(30, 142, 0) 0px 0px 5px 0px'
                        });
                        preventAction = true;
                    }
                    break;
                case 'message-user':
                    var message = $('#message-user').val();
                    var messageReg = /^[a-zA-Z0-9\s\-\_\.]{1,320}$/;
                    if(messageReg.test(message) == false) {
                        $("#message-user").css({
                            'border': '1px solid rgba(255, 0, 0, 0.6)',
                            'box-shadow': 'rgb(255, 0, 0) 0px 0px 5px 0px'
                        });
                        preventAction = false;
                    }
                    else {
                        $("#message-user").css({
                            'border': '1px solid rgba(30, 142, 0, 0.71)',
                            'box-shadow': 'rgb(30, 142, 0) 0px 0px 5px 0px'
                        });
                        preventAction = true;
                    }
                    break;
            }
        }
              
    });

    $('.submit').click(function(event){
        if(preventAction == false) {
            event.preventDefault();
        }
    });
    


    $('.owl-stage .active:eq(2) .nextSlide').css({
        'display': 'block'
    });
    $('.owl-stage .active:eq(0) .prevSlide').css({
        'display': 'block'
    });
    $('.owl-stage .active:eq(1) .service-slide').css({
        'box-shadow': '5px 8.7px 12px 3px rgba(0, 0, 0, 0.15)'
    });

    $('.nextSlide').click(function () {
        $('.owl-next').trigger('click');
    });
    $('.prevSlide').click(function () {
        $('.owl-prev').trigger('click');
    });
    $('.owl-next, .owl-prev').click(function() {
        $('.owl-stage .active:eq(2) .service-slide').css({
            'box-shadow': 'none'
        });
        $('.owl-stage .active:eq(0) .service-slide').css({
            'box-shadow': 'none'
        });
        $('.owl-stage .active:eq(2) .nextSlide').css({
            'display': 'block'
        });
        $('.owl-stage .active:eq(2) .prevSlide').css({
            'display': 'none'
        });
        $('.owl-stage .active:eq(0) .prevSlide').css({
            'display': 'block'
        });
        $('.owl-stage .active:eq(0) .nextSlide').css({
            'display': 'none'
        });
        $('.owl-stage .active:eq(1) .service-slide').css({
            'box-shadow': '5px 8.7px 12px 3px rgba(0, 0, 0, 0.15)',
            'transition':'.5s ease-out'
        });
        $('.owl-stage .active:eq(1) .prevSlide').css({
            'display': 'none'
        });
        $('.owl-stage .active:eq(1) .nextSlide').css({
            'display': 'none'
        });
    });


    $('#selected-city').select2();
    $('.wrapper-toggle-city').hide();
    var nicopol = "Никополь";
    var herson = "Херсон";
    var kabelyki = "Кобеляки";
    var charkiv = "Харьков";
    var shostka = "Шостка";
    var ughgorod = "Ужгород";
    var ivfran = "Ивано-Франковск";
    var kaminec = "Каменец-Подольский";
    var nicopolEn = "Nikopol";
    var hersonEn = "Kherson";
    var kabelykiEn = "Kobelyaki";
    var charkivEn = "Kharkiv";
    var shostkaEn = "Shostka";
    var ughgorodEn = "Uzhhorod";
    var ivfranEn = "Ivano-Frankivsk";
    var kaminecEn = "Kamianets-Podilskyi";
    $('.cont-btn').click(function () {
        var textm = $('#select2-selected-city-container').text();
        if ( textm != "") {
            $('.cbutton').toggleClass("activeClass");
            $('.cbutton').addClass('cbutton--click');
            setTimeout("$('.cbutton').removeClass('cbutton--click');", 400);
            $('.select2-selection--single').css({
                'border':'1px solid #aaa',
                '-webkit-box-shadow': 'none',
                '-moz-box-shadow': 'none',
                'box-shadow': 'none'
            });
        }
        else {
            $('.select2-selection--single').css({
                'border':'1px solid rgba(255,0,0,.6)',
                '-webkit-box-shadow': '0px 0px 5px 0px rgba(255,0,0,1)',
                '-moz-box-shadow': '0px 0px 5px 0px rgba(255,0,0,1)',
                'box-shadow': '0px 0px 5px 0px rgba(255,0,0,1)'
            });
            $('.btn-dawn').removeClass("activeClass");
        }
        switch (true) {
            case ( textm == nicopol ):
                $('.info').text("г. Никополь");
                $('.info2').text("0504199728");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == herson ):
                $('.info').text("г. Херсон");
                $('.info2').text("0951784762");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == kabelyki ):
                $('.info').text("г. Кобеляки");
                $('.info2').text("0662055710");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == charkiv ):
                $('.info').text("г. Харьков");
                $('.info2').text("0505535885");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == shostka ):
                $('.info').text("г. Шостка");
                $('.info2').text("0661404790");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == ughgorod ):
                $('.info').text("г. Ужгород");
                $('.info2').text("0991195030 0661719919");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == ivfran ):
                $('.info').text("г. Ивано-Франковск");
                $('.info2').text("0503556161");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == kaminec ):
                $('.info').text("г. Каменец-Подольский");
                $('.info2').text("0673809219");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == nicopolEn ):
                $('.info').text("c. Nikopol");
                $('.info2').text("0504199728");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == hersonEn ):
                $('.info').text("c. Kherson");
                $('.info2').text("0951784762");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == kabelykiEn ):
                $('.info').text("c. Kobelyaki");
                $('.info2').text("0662055710");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == charkivEn ):
                $('.info').text("c. Kharkiv");
                $('.info2').text("0505535885");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == shostkaEn ):
                $('.info').text("c. Shostka");
                $('.info2').text("0661404790");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == ughgorodEn ):
                $('.info').text("c. Uzhhorod");
                $('.info2').text("0991195030 0661719919");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == ivfranEn ):
                $('.info').text("c. Ivano-Frankivsk");
                $('.info2').text("0503556161");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            case ( textm == kaminecEn ):
                $('.info').text("c. Kamianets-Podilskyi");
                $('.info2').text("0673809219");
                $('#city-drop').slideToggle(400);
                $('#after').fadeToggle(600);
                break;
            default:
                $('.wrapper-toggle-city').hide();
        }
    });

   
    !(function ($doc, $win) {
        var screenWidth = $win.screen.width / 2,
        screenHeight = $win.screen.height / 2,
        $elem = $doc.querySelectorAll('#elem')[0],
        validPropertyPrefix = '',
        otherProperty = 'perspective(600px)';
        if(typeof $elem.style.webkitTransform == 'string') {
          validPropertyPrefix = 'webkitTransform';
        } else {
          if (typeof $elem.style.MozTransform == 'string') {
            validPropertyPrefix = 'MozTransform';
          }
        }
      $doc.addEventListener('mousemove', function (e) {
        // vars
        var centroX   = e.clientX - screenWidth,
        centroY   = screenHeight - (e.clientY + 13),
        degX   = centroX * 0.1,
        degY   = centroY * 0.1
        // Seta o rotate do elemento
        $elem.style[validPropertyPrefix] = otherProperty + 'rotateY('+ degX/5 +'deg)  rotateX('+ degY/5 +'deg)';
      });
    })(document, window);
  
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-49459747-5', 'auto');
    ga('send', 'pageview');

});