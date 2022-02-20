@extends('layouts/app')

@section('title', 'Add Books')

@section('content')
    <div class="container mt-4">
        <h2 class="header"><i class="uil uil-plus me-2"></i>Add Books</h2>
        <hr>
        <div class="col-md-7 bg-light manage-wrapper">
            <form action="{{ url('books/add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Book Title" name="title" value="{{ old('title') }}">
                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Writer</label>
                    <input type="text" class="form-control @error('writer') is-invalid @enderror" placeholder="Enter Book Writer" name="writer" value="{{ old('writer') }}">
                    @error('writer') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Number of Pages</label>
                    <input type="text" class="form-control @error('number_of_pages') is-invalid @enderror" placeholder="Enter The Number of Pages" name="number_of_pages" value="{{ old('number_of_pages') }}">
                    @error('number_of_pages') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Year Published</label>
                    <input type="text" class="form-control @error('release_date') is-invalid @enderror" placeholder="Enter The Year Published" name="year_published" value="{{ old('year_published') }}">
                    @error('release_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection