<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">


<div class="container1">
    <div class="row">
        <div class="col-md-8">
          <div class="swiper">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff margin-top:288px; width: 704px;margin:0px;" class="swiper-container mySwiper2">
      <div class="swiper-wrapper" style="margin-top:288px; width:704px;">
        <div class="swiper-slide">

          <img src="/storage/{{$post->image}}" style="width: 704px;height: 589px;border-radius: 0px 57px 0px 0px;"/>

        
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1459767129954-1b1c1f9b9ace?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1599809275671-b5942cabc7a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=859&q=80"/>
        </div>

      </div>
      <div class="swiper-button-next" style="margin-top: 109px;margin-right:1px;"></div>
      <div class="swiper-button-prev" style="margin-top: 109px;";></div>
    </div>

    <div thumbsSlider="" class="swiper-container mySwiper">
      <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="/storage/{{$post->image}}"  />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80"  />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"  />
        </div>
       
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1459767129954-1b1c1f9b9ace?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"  />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"/> 
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1599809275671-b5942cabc7a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=859&q=80" />
        </div>

        </div>
      </div>
    </div>
        </div>
        <div class="col-md-4">
          <div class="content">
        <div class="contact-form">
	<div class="contact-content">
		<div class="contact-header">
			<div class="border">
        <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" class="borderimg">
        <h1 class="emriuser">{{$post->user->name}}</h1>
        <a href="/profile/{{$post->user->id}}">View Profile</a>

      </div>
		</div>
		<form action="#" method="post">
			<input name="name" type="text" class="form-control" id="name" placeholder="Name" required />
			<input name="conatctno" type="text" class="form-control" id="email" placeholder="Phone" required />
			<input name="email" type="email" class="form-control" id="email" placeholder="Email" required />
			<textarea name="message" rows="3" class="form-control" id="message" placeholder="Hello, I am interested in…" required style="width: 296px;height: 100px;"></textarea>
			<a href="" class="myBtn"><p class="btn_p">Learn more<img src="/images/arrow.png" style="margin-left: 21px; cursor: pointer; padding-top: -77px;" alt=""></p></a>
		</form>
	</div>
</div>
</div>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-md-8">
<div class="cards2">
<div class="v_780">
<div class="v_781">
                    <span class="v_782">2007</span>
                    </div><span class="v_782">{{$post->year}}</span>
                </div>
<div class="v_790">
                    <div class="v_791">
                    </div><span class="v_792">1</span>
                </div>
<div class="v_701">
                    <div class="v_702">
                    </div><span class="v_714">2</span>
                </div>
                <div class="v_715">
                    <div class="v_716">
                        
                    </div><span class="v_719">4</span>
                </div>
                <div class="v_720"><span class="v0_721">2</span>
                    <div class="v_722">
                    
                    </div>

                  

                </div><span class="v_729">Details</span>
                <div class="v_731"></div>
                <div class="v_732"></div>
                <div class="v_733"></div>
                <div class="v_750"></div>
                <div class="v_751"></div>
                
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 25,
        slidesPerView: 7,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 32,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  
