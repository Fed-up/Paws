@extends('tmpl.public')

@section('content')
<main class="main page">
    <video autoplay loop poster="polina.jpg" id="bgvid">
        <source src="videos/dogshow.webm" type="video/webm">
        <source src="videos/dogshow.mp4" type="video/mp4">
    </video>
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
    </script>
@stop
