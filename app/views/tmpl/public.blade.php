<?php
  // header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  // header("Cache-Control: post-check=0, pre-check=0", false);
  // header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
	<head>
    	<title>{{ $title or "Time 4 Paws" }}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" > 
      @yield('_header')
      <!-- Dev site css --> 
      <link rel="stylesheet" type="text/css" href="../sass/compiled_css/dev_paws.css"> 
      
<<<<<<< HEAD
      <!-- Live site css  --> 
=======
      <!-- Live site css  -->
>>>>>>> parent of e202e44... Desktop is done!!
      <!-- <link rel="stylesheet" type="text/css" href="../deploy_css/paws.min.css">  -->

      <link rel="stylesheet" type="text/css" href="/packages/jquery-1.11.1.min/vendor/jquery-ui-1.10.4.custom/css/no-theme/jquery-ui-1.10.4.custom.min.css"/>
  </head>


  <body>
    
    <!-- <header class="header"> -->
      @include('public.header')
    <!-- </header> -->

    <div class="content-slot">
      @yield('content')
      <!-- <div class="footer__push"></div> -->
      @include('public.footer') 
    </div>


      
    

    <aside 
      id="panel--right" 
      class="panel--right"> <!-- //panel -->
        <div id="navigation" class="">
            <nav class="">
                
                <!-- <a class="side--nav" href="/">{{ ((Auth::guest())? '' : ((Auth::user()->admin == 1)? HTML::link('admin', 'Profile') : HTML::link('profile', 'Profile'))) }}</a> -->
                {{ ((Auth::guest())? '' : ((Auth::user()->admin == 1)? HTML::link('admin', 'Profile', array('class' => 'side--nav')) : HTML::link('profile', 'Profile', array('class' => 'side--nav')))) }}
                <a class="{{((Request::segment(1) === 'collections')? 'side--nav navTab_active' : 'side--nav')}}" href="/#">Home</a>
                <a class="{{((Request::segment(1) === 'recipes')? 'side--nav navTab_active' : 'side--nav')}}" href="/#">Our Vision</a>
                <a class="{{((Request::segment(1) === 'ingredients')? 'side--nav navTab_active' : 'side--nav')}}" href="/#">About Us</a>
                <a class="{{((Request::segment(1) === 'events')? 'side--nav navTab_active' : 'side--nav')}}" href="/#">Sign Up</a>
            </nav>
        </div>

    </aside><!-- /panel -->
    
    

    
    <!-- JS 
    ====================================  -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
    <script src="/bower_components/foundation/js/foundation/foundation.js"></script>
    <script src="/bower_components/foundation/js/foundation/foundation.tab.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5439fba30c5e8a76" async></script>

    @yield('_footer')
    <script>


      $(function() {   
        $(document).foundation();
        //Enable swiping...
        $("body").swipe( {
          //Generic swipe handler for all directions
          swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

            if(direction == "left"){
              $("body").addClass("showPanel")
            }
            else if(direction == "right"){
              $("body").removeClass("showPanel")
            }
          },
          allowPageScroll: "vertical",
          excludedElements: "button, input, select, textarea, .noSwipe"
        });


        //Trigger menu
        $(".trigger-menu").click(function($event){

          console.log('hi');

          if($( "body" ).hasClass( "showPanel" )){
            $("body").removeClass("showPanel")
          }
          else if(!$( "body" ).hasClass( "showPanel" )){
            $("body").addClass("showPanel");
            $event.stopPropagation();
          }
        });

        //Click to close menu
        $(".page").click(function($event) {
          console.log(".page click");
          if($( "body" ).hasClass( "showPanel" )){
            $("body").removeClass("showPanel");
            $event.preventDefault();
          }
        });
      });

    </script> 
    
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N294FC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N294FC');</script>
    <!-- End Google Tag Manager -->


    </body>
</html>
