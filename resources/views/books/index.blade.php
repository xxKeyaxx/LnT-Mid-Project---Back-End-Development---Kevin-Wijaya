@extends('layouts/app')

@section('title', 'Manage Books')

@section('content')
    <div class="container mt-4">
        <h2 class="header"><i class="uil uil-edit me-2"></i>Manage Books</h2>
        <hr>
        <div class="col-md-8 bg-light manage-wrapper">
            <a href="{{ url('books/add') }}" class="btn btn-dark btn-sm mb-2"><i class="uil uil-plus me-1"></i>Add Books</a>
            @if (session('success'))
                <div class="alert alert-success">
                <i class="uil uil-check me-1"></i>{{ session('success') }}
                </div>
            @endif
            <table class="table table-light table-borderless table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Writer</th>
                        <th>Number of Pages</th>
                        <th>Year Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $loop -> iteration }}</th>
                        <td>{{ $book -> title }}</td>
                        <td>{{ $book -> writer }}</td>
                        <td>{{ $book -> number_of_pages }}</td>
                        <td>{{ $book -> year_published }}</td>
                        <td>
                            <a href="{{ url('books/' . $book->id) }}" class="text-primary"> <i class="uil uil-edit-alt"></i> </a>
                            <a href="#" class="text-danger" onclick="event.preventDefault();document.getElementById('delete-form-{{ $book->id }}').submit();"> <i class="uil uil-trash-alt"></i>
                                <form id="delete-form-{{ $book->id }}" action="{{ url('books/' . $book->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection