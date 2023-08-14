@extends('layout')

@section('content')
    <div class="heading" style="background:url(images/heading_book.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!-- bookin section starts -->

    <section class="booking">
        <h1 class="heading-title">Book your trip !</h1>
        <form action={{route('book.submit')}} method="post" class="book-form">
            @csrf
            <div class="flex">
                @foreach($testbooks as $testbook)
                <div class="inputBox">
                    <span>{{ $testbook['title']}}</span>
                    <input type="{{ $testbook['type'] }}" placeholder="{{ $testbook['input'] }}" name="{{ $testbook['name'] }}" value="{{ $testbook['value'] }}">
                </div>
                @endforeach
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

    <!-- bookin section ends -->
 @endsection














