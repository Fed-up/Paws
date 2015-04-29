@extends('tmpl.public')

@section('content')

<main class="main page">
    <div class="bg"></div>
<<<<<<< HEAD
        <div class="video__home">
            <video autoplay loop preload="none" poster="/images/paws/mobliedog.png" id="bgvid" class="">
                <source src="videos/dogshow.webm" type="video/webm">
                <source src="videos/dogshow.mp4" type="video/mp4">
            </video>
        </div>
=======
         <video autoplay loop poster="polina.jpg" id="bgvid" class="video__home">
            <source src="videos/dogshow.webm" type="video/webm">
            <source src="videos/dogshow.mp4" type="video/mp4">
        </video>
>>>>>>> parent of e202e44... Desktop is done!!
        <button id="vidpause">Pause</button>
        <section class="columns small-12 medium-10 medium-push-1 large-8 large-push-2 xlarge-6 xlarge-push-3 section__white--form">
            @if(isset($data->id))
                    {{ Form::open(array('action' => 'UserProfileController@postUpdateMembers', 'class' => 'form-horizontal')) }}
                @else
                    {{ Form::open(array('action' => 'UserProfileController@postAddUser', 'class' => 'form-horizontal')) }} 
                @endif
                <h2 class="form__title--signup">Join Time 4 Paws Today!</h2>
                <div class="form-group {{ ($errors->has('fname')) ? 'has-error' : '' ; }} row">
                    {{ Form::label('fname', 'First Name: ', array('class' => ' form_field_title ')) }}
                    <div class="">
                        {{ ($errors->has('fname'))? '<p>'. $errors->first('fname') .'</p>' : '' }}
                        {{ Form::text('fname', (isset($input['fname'])? Input::old('fname') : (isset($data->fname)? $data->fname : '' )), array('class' => 'columns small-8 input__text')) }} 
                    </div>
                </div>
                <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' ; }} row">
                    {{ Form::label('email', 'Email: ', array('class' => ' form_field_title ')) }}
                    <div class="">
                        {{ ($errors->has('email'))? '<p>'. $errors->first('email') .'</p>' : '' }}
                        {{ Form::text('email', (isset($input['email'])? Input::old('email') : (isset($data->email)? $data->email : '' )), array('class' => 'columns small-8 input__text')) }} 
                    </div>
                </div>           
            
                <div class="">
                    <div class="form__buttons">

                        {{ Form::submit('', array('class' => 'form__image__submit')) }}
                    
                    </div>
                </div>
            {{ Form::close() }}         
        </section>
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
@stop
