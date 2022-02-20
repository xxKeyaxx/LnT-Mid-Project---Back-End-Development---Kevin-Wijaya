@extends('layouts/app')

@section('title', 'Home')

@section('content')
    <!-- Banner -->
    <br>
    <div class='container banner'>
        <h1><center>WELCOME TO OUR COMMUNITY OF READERS</h1>
        <p><center>
            Find and read books, encyclopedias, novels, and many others from our handpicked collection of various literatures around the world.
            Discover new books, and get inspired by our community of like-minded readers. Please contact us for further information.
        </p>
        <a href="{{ url('books/manage') }}" class="btn btn-warning">Manage Books</a>
        <a href="{{ url('/contact') }}" class="btn btn-light">Contact Us</a>
    </div>

    <!-- Books Content -->
    
    <div class="container mt-4">
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 bg-light book-content">
                    <h1 class="title">{{ $book -> title }}</h1>
                    <span class="writer badge bg-warning">by {{ $book -> writer }}</span>
                    <hr>
                    <span class="number-of-pages">{{ $book -> number_of_pages }} pages</span>
                    <br>
                    <span class="year-published">Year Published: {{ $book -> year_published }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection