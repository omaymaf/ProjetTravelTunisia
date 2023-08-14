@extends('layout')

@section('content')
    <div class="heading" style="background:url(images/heading_about_us.jpg) no-repeat">
        <h1>About Us</h1>
    </div>

    <!-- about section starts -->
    <section class="about">
    <div class="image">
        <img src="images/home-about.jpg" alt="">
    </div>

    <div class="content">
        <h3> Why Choose Us?</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
         Eaque doloremque veniam quisquam porro molestiae voluptates recusandae voluptate molestias,
         cum repellat numquam deserunt at dolore ea aperiam modi repellendus aut. Harum.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
         Ipsa quisquam dolorum vel excepturi corporis, 
        quibusdam incidunt iure quia rerum qui!</p>
        <div class="incons-container">
            <div class="incons">
                <i class="fas fa-map"></i>
                <span>Top Destination</span>
            </div>
            <div class="incons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="incons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
       
    </div>
    </section>


    <!-- about section ends -->

    <!-- reviews section starts -->

    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                @foreach($testreviews as $testreview)
                <div class="swiper-slide slide">
                    <div class="stars">
                        @for ($i=0; $i < $testreview['stars']; $i++)
                        <i class="fas fa-star"></i>
                 @endfor
                    </div>
                    <p>{{ $testreview['content'] }}</p>
                    <h3>{{ $testreview['name'] }}</h3>
                    <span>{{$testreview['role']}}</span>
                    <img src="{{$testreview['review-image']}}" alt="">

                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- reviews section ends -->
@endsection





















