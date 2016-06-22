$(document).ready(function () {


   function startVideoScreen() {
        alert('Video');

       // var videoScreen = '<video autoplay id="video-screen">
       //     <source src="/wp-content/uploads/logo-anim.mp4" type="video/mp4">
       //     </video>';

                // $('#on-firs-load').innerHTML('cdsdcs');

       var videoScreenContainer = document.getElementById('on-firs-load'),
           video = document.createElement("video"),
           source = document.createElement("source");

       videoScreenContainer.appendChild(video);

       //
       // video.setAttribute("src", "http://shokijoetaki.com/wordpress/wp-content/themes/shokijoetaki/assets/video/logo-anim.mp4"),
       //     v.setAttribute("type", "video/mp4"),

   }

    if(getCookie('screen') != 'yes'){
        alert('Первое посещение');
        startVideoScreen();
        document.cookie = "screen=yes; path=/;"
    }else {

    }



    //--     Show Modal menu

    $("#js-menu-btn-in").on("click", function () {
        var e = $("#js-menu-btn"),
            i = $("#js-modal");
        i.find("ul");

        e.toggleClass("is-prepend"), i.toggleClass("is-fadeIn")
    });


    var windowHeight = $(window).height();
    //console.log(t);
    $("#js-above").css({height: windowHeight + "px"});
    $("#main").css('margin-top', windowHeight + "px");

    $("#gradient-effect").css({
        height: windowHeight + "px",
    });


    function titleAnimate () {

        // var text = new SplitText("#js-text", {type: 'chars'});

        var text = document.getElementById('js-text');
           text.innerHTML = '<span>' +
                   text.innerHTML.split('').join('</span><span>') + '</span>';

        tweeText.staggerFrom(text.chars, 1, {
//                ease: Power2.easeOut,
//                ease: Power2.easeInOut,
            cycle: {
                delay: function () {
                    return Math.random() * 0.8
                }
            },
//                cycle: {
//                    y: function() {
//                        return Math.random() * 1000
//                    }
//                },
            opacity: 0,
            // scale: 2,
//                fontSize: '60px',
        });
    }

    titleAnimate();


    // $('.cover__bg').stop().delay(1200).animate({
    //     opacity: 1,
    //     // height: "106%",
    //     // width: "106%",
    //     // top: '-3%',
    //     // left: '-3%',
    //     //
    //
    // }, 1800);


    var tl = new TimelineLite();
    tl
        .to(".cover__bg", 2, {

            opacity: 1,
            // height: "106%",
            // width: "106%",
            // top: '-3%',
            // left: '-3%',

        });

    $(window).scroll(function () {

        /* Check the location of each desired element */
        $('.hideme').each(function (i) {

            // var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            // var bottom_of_window = $(window).scrollTop() + $(window).height();
            //
            // /* If the object is completely visible in the window, fade it it */
            // if( bottom_of_window > bottom_of_object ){
            //
            //     $(this).animate({'opacity':'1'},500);
            //
            // }

            if ($(window).scrollTop() > 300) {
                // tl.to(this, 2, {
                //         opacity: 1,
                //     });
                $(this).animate({'opacity': '1'}, 300);
            }

        });

    });

    // $('.cover__bg').css({
    //
    //     height: "106%",
    //     width: "106%",
    //     top: '-2%',
    //     left: '-2%',
    //     opacity: 1,
    // });


    // $(".menu-top-menu-container").on({
    //     click: function () {
    //         $('.cover__bg').animate({
    //             opacity: 0,
    //         }, 200);
    //     },
    //     mouseenter: function () {
    //         $('.cover__bg').animate({
    //             opacity: 0.5,
    //         }, 500);
    //     },
    //     mouseleave: function () {
    //         $('.cover__bg').animate({
    //             opacity: 1,
    //         }, 500);
    //     }
    // });

    // $("body").scroll(function(){
    //     $(".cover__bg").css({opacity: windowHeight + "px"});
    // });
    //
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 1000) {
    //         $('.primary').fadeIn();
    //     } else {
    //         $('.primary').fadeOut();
    //     }
    // });


    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 500) {
    //         $( '.cover__bg' ).animate({
    //
    //             opacity: 0,
    //
    //         }, 300 );
    //     } else {
    //         $( '.cover__bg' ).animate({
    //
    //             opacity: 1,
    //
    //         }, 300 );
    //     }
    // });




});

