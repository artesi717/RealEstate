<!DOCTYPE html>
<html>

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/allposts.css') }}">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <script src="bower_components/aos/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>


    <title>Listings Preview</title>
</head>




<body>

<h1 class="headerquote">Whether you’re buying, <br> selling or renting, <br> we can help you <br> move forward.</h1>

<div class="v0_155" data-aos="/">
        <div class="v0_170">
            <div class="v0_171">
                <div class="v0_172"></div>
                <div class="v0_173"><span class="v0_174">Looking for</span>
                    <div class="v0_175">
                      
                    </div>
                </div>
                <div class="v0_177"><span class="v0_178">Location</span>
                    <div class="v0_179">
                       
                    </div>
                </div>
                <div class="v0_181"><span class="v0_182">Property Type</span>
                    <div class="v0_183">
                       
                    </div>
                </div>
                <div class="v0_185"><span class="v0_186">Price</span>
                    <div class="v0_187">
                       
                    </div>
                </div>
                <div class="v0_189"></div>
                <div class="v0_190"></div>
                <div class="v0_191"></div>
               
            </div>
        </div> </div> </div>
    <div class="container" data-aos="fade-left">

        <div class="row pt-10"> <strong>
            </strong> </div>
        <div class="row pt-10">
            @foreach($posts as $post)
            <div class="row pl-5 pt-4">
                <a href="/propertypage/{{$post->id}}">
                    <div class="card">
                        <div> <img class="v0_226" src="/storage/{{$post->image}}" alt=""></div>
                        <p class="v0_225">{{$post->name}}</p>
                        <div class="v0_227">
                            <div class="v0_246">
                                <div class="v0_247"> </div>
                                <span class="v0_250">{{$post->bed}}</span>
                            </div>
                        </div>
                        <div class="v0_228">
                            <div class="v0_251"><span class="v0_252">{{$post->showers}}</span>
                                <div class="v0_253"></div>
                            </div>
                        </div>
                        <div class="v0_229">
                            <div class="v0_232">
                                <div class="v0_233"></div>
                                <span class="v0_245">{{$post->size}}m2</span>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            @endforeach
        </div>

    </div>

    <video autoplay muted loop id="myVideo" >
              <source src="../images/allpostvideoo.mp4" type="video/mp4">
           </video>





</body>

<script>
      AOS.init({
  duration: 1500
});
AOS.init();

   // AOS.init({
   //    offset: 200,
   //    duration: 600,
   //    easing: 'ease-in-sine',
   //    delay: 100,
   //  });


</script>

</html>