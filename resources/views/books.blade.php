@extends('layouts/app')

@section('title', 'All Books')

@section('content')
    <div class="container mt-4">
        <h2 class="header"><i class="uil uil-books me-2"></i>All Books</h2>
        <hr>
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