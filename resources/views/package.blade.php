@extends('layout')

@section('content')
    <div class="heading" style="background:url(images/heading_package.jpg) no-repeat">
        <h1>Packages</h1>
    </div>

    <!-- packages section starts --> 
    <section class="packages">
        <h1 class="heading-title">top destination</h1>
        <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/package1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sidi bou said</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Jerba</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package3.webp" alt="">
            </div>
            <div class="content">
                <h3>Gabes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package4.jpg" alt="">
            </div>
            <div class="content">
                <h3>El jem</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package5.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Hammamet</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bizerte</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Carthage</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package9.jpg" alt="">
            </div>
            <div class="content">
                <h3>Monastir</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package10.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sfax</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package11.webp" alt="">
            </div>
            <div class="content">
                <h3>Kef</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/package12.jpg" alt="">
            </div>
            <div class="content">
                <h3>Nabeul</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, voluptates!</p>
                <a href="{{url('/book')}}" class="btn">Book Now</a>
            </div>
        </div>

        </div>

        <div class="load-more"><span class="btn">load more</span></div>
        
    </section>
    
    <!-- packages section ends -->
    @endsection

