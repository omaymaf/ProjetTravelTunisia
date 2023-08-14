<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- swiper css link --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <!-- header section starts -->
    
    <section class="header">
        <a href="{{url('/home')}}" class="logo">travel.</a>
        <nav class="navbar">
            <a href="{{url('/home')}}">Home</a>
            <a href="{{url('/about')}}">About</a>
            <a href="{{url('/package')}}">Package </a>
            <a href="{{url('/book')}}">Book</a>
        </nav>
        
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends --> 

    
    <!-- content section starts --> 
    <div class="content">
        @yield('content')
    </div>
    <!-- content section ends --> 

        <!-- footer section starts -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="{{url('/home')}}"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="{{url('/about')}}"><i class="fas fa-angle-right"></i>About</a>
            <a href="{{url('/package')}}"><i class="fas fa-angle-right"></i>Package </a>
            <a href="{{url('/book')}}"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy </a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +216-99-962-750</a>
            <a href="#"> <i class="fas fa-phone"></i> +216-96-362-750</a>
            <a href="#"> <i class="fas fa-envelope"></i> omayma.fersi@esprit.tn</a>
            <a href="#"> <i class="fas fa-map"></i> Tunisie,Sfax,routr sidi mansour Km6 - 3061</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>

    </div>

    <div class="credit"> created by <span>mr.web designer</span> | all rights reserved!</div>

</section>
<!-- footer section ends -->

<!-- swiper js link  
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>--> 

<!-- custom js file link --> 
<script src="{{ asset('js/script.js') }}"></script>

<!-- Inclure le CDN pour Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>