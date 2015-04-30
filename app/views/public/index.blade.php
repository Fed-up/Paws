@extends('tmpl.public')

@section('content')

<main class="main page">
    <div class="bg"></div>
        <div class="video__home">
            <video autoplay loop poster="/images/paws/videopic.jpg" id="bgvid" class="show-for-large-up">
                <source src="videos/dogshow.webm" type="video/webm">
                <source src="videos/dogshow.mp4" type="video/mp4">
            </video>
        </div>
        <div id="vidpause"></div>
        <section class="columns small-12 medium-10 medium-push-1 large-8 large-push-2 xlarge-6 xlarge-push-3 section__white--form">
            {{ Form::open(array('action' => 'HomeController@postAddUser', 'class' => 'form-horizontal')) }} 
                <h2 class="form__title--signup">Dog Cafe soon to Melbourne..</h2> 

                <div class="form-group {{ ($errors->has('fname')) ? 'has-error' : '' ; }} row">
                    {{ Form::label('fname', 'Full Name: ', array('class' => ' form_field_title ')) }}
                    <div class=""> 
                        {{ Form::text('fname', (isset($input['fname'])? Input::old('fname') : (isset($data->fname)? $data->fname : '' )), array('class' => ($errors->has('fname'))? 'columns small-12 medium-8 input__text input__text--error' : 'columns small-12 medium-8 input__text', 'placeholder' => ($errors->has('fname'))? $errors->first('fname') : '' )) }} 
                    </div>
                </div>
                <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' ; }} row">
                    {{ Form::label('email', 'Email: ', array('class' => ' form_field_title ')) }}
                    <div class="">
                        {{ Form::text('email', (isset($input['email'])? Input::old('email') : (isset($data->email)? $data->email : '' )), array('class' => ($errors->has('email'))? 'columns small-12 medium-8 input__text input__text--error' : 'columns small-12 medium-8 input__text', 'placeholder' => ($errors->has('email'))? $errors->first('email') : '' )) }}  
                    </div>
                </div>  
 
       
            
                <div class="form__buttons">
                    {{ Form::submit('', array('class' => 'form__image__submit')) }}
                </div>

                <!-- <div class="form-group">
                    {{ Form::submit('', array('class' => 'form__image__submit form__image__submit--small')) }}
                </div> -->
            {{ Form::close() }}         
        </section>
        <section class="section__white--homepage row">
            <!-- <img src="/images/paws/quote.png" alt="Where Real food comes to life" name="Where Real food comes to life"> -->
            <p>Where real food comes to life</p>
        </section>
        <section id="mission"class="section__mission">
            <article class="small-12 medium-10 medium-push-1 large-8 large-push-2 xlarge-6 xlarge-push-3">
                <p class="">
                We are creating a dog friendly ‘real food’
                cafe, that is passionate about providing
                nutritious, organic, locally sourced cuisine
                </p>
                <br/>
                <p class="">
                    We believe in the healing poswer of food
                    and desire to educate and inspire people 
                    to expect the best not only for themselves
                    but for our canine friends as well
                </p>
                <br/>
                <p class="">
                    We strive to create a place where service
                    is not only a smaile, its a place ti call a
                    second home, a place where there
                    will always be..
                </p>
            </article>         
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
