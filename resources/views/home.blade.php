@extends('layout')
    
@section('content')
<!-- home section starts --> 

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide " style="background:url(images/home_slide1.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>travel arround the world</h3>
                    <a href="{{url('/package')}}" class="btn">discover more</a>

                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home_slide2.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>discover the new places</h3>
                    <a href="{{url('/package')}}" class="btn">discover more</a>

                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home_slide3.jpg)no-repeat">
                <div class="content">
                    <span>explore,discover,travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="{{url('/package')}}" class="btn">discover more</a>

                </div>
            </div>


        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
    </div>
</section>

 <!-- home section ends -->


<!-- services section starts -->

<section class="services">

    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
        
        <div class="box">
            <img src="images/adventure_1.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="images/tour_guide_2.png" alt="">
            <h3>Tour Guide</h3>
        </div>

        <div class="box">
            <img src="images/trekking_3.png" alt="">
            <h3>Trekking</h3>
        </div>

        <div class="box">
            <img src="images/camp_fire_4.png" alt="">
            <h3>Camp Fire</h3>
        </div>

        <div class="box">
            <img src="images/off_road_5.png" alt="">
            <h3>Off road</h3>
        </div>

        <div class="box">
            <img src="images/comping_6.png" alt="">
            <h3>comping</h3>
        </div>
    </div>
</section>



<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="images/home-about.jpg" alt="">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>ggubcjbcjkcjdbjdbvjdbvb cncbcjhbccxvxnx jjdidod iidndh jddi  </p>
        <a href="{{url('/about')}}" class="btn"> Read more</a>
    </div>
    
</section>

 <!-- home about section ends  -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
           <div class="image">
            <img src="images/home-packages.jpg" alt="">
           </div> 
           <div class="content">
            <h3>Adventure & Tour</h3>
            <p>knhcjhcjbvhdc uhcjbchvhh hbhjhhvhvc hchc slskjd jjch</p>
            <a href="{{url('/book')}}" class="btn">Book Now</a>
           </div>
        </div>

        <div class="box">
           <div class="image">
            <img src="images/home-packages.jpg" alt="">
           </div> 
           <div class="content">
            <h3>Adventure & Tour</h3>
            <p>knhcjhcjbvhdc uhcjbchvhh hbhjhhvhvc hchc slskjd jjch</p>
            <a href="{{url('/book')}}" class="btn">Book Now</a>
           </div>
        </div>

        <div class="box">
           <div class="image">
            <img src="images/home-packages.jpg" alt="">
           </div> 
           <div class="content">
            <h3>Adventure & Tour</h3>
            <p>knhcjhcjbvhdc uhcjbchvhh hbhjhhvhvc hchc slskjd jjch</p>
            <a href="{{url('/book')}}" class="btn">Book Now</a>
           </div>
        </div>


    </div>

    <div class="load-more"> <a href="{{url('/package')}}" class="btn">load more</a> </div>
</section>

 <!--home packages section ends -->

<!-- home offer section starts  -->
<section class=" home-offer"> 
    <div class="content">
        <h3>Up to 50% offs</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing 
         elit. Sapiente, totam laboriosam fugiat ad adipisci saepe qui sint consectetur delectus assumenda quisquam rem consequatur esse hic,
         unde libero dolorem pariatur earum?</p>
         <a href="{{url('/book')}}" class="btn">Book Now</a>
    </div>
</section>


<!-- home offer section ends -->
@endsection
