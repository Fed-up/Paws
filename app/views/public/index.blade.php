@extends('tmpl.public')

@section('content')

<main class="main page">
    <div class="bg"></div>
         <video autoplay loop poster="polina.jpg" id="bgvid" class="video__home">
            <source src="videos/dogshow.webm" type="video/webm">
            <source src="videos/dogshow.mp4" type="video/mp4">
        </video>
        <button id="vidpause">Pause</button>
        <section class="section__white--homepage">
            <p class="slogan">Where Real food comes to life</p>
        </section>
    




</main>
@stop

@section('_footer')
    <script type="text/javascript" src="/js/flexslider.js"></script>
    <script type="text/javascript" src="/js/tabs.js"></script>
    <script type="text/javascript" src="/js/gallery.js"></script>
    <script>
        // $(window).load(function() {
        //   $('.flexslider--thumbs').flexslider({
        //     controlNav: "thumbnails",
        //     controlsContainer: "#thumbs",
        //     animationSpeed: 300,
        //     slideshow: false,
        //     directionNav: false,

        //     animation: "slide",
        //     direction: "vertical"
        //   });
        // });

        var vid = document.getElementById("bgvid");
        var pauseButton = document.getElementById("vidpause");
        function vidFade() {
        vid.classList.add("stopfade");
        }
        vid.addEventListener('ended', function() {
        // only functional if "loop" is removed
        vid.pause();
        // to capture IE10
        vidFade();
        });
        pauseButton.addEventListener("click", function() {
        vid.classList.toggle("stopfade");
        if (vid.paused) {
        vid.play();
        pauseButton.innerHTML = "Pause";
        } else {
        vid.pause();
        pauseButton.innerHTML = "Paused";
        }
        })
        $('video').prop('volume', 0)
        $('video').prop('muted', true)
        
    </script>
    <script>
        video#bgvid { transition: 5s opacity; }
        .stopfade { opacity: .5; }
        

    </script>
    <script type="text/javascript">
        .(window).height

    </script>
@stop
