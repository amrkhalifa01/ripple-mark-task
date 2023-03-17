@extends('layout')

@section('title')
    ripple mark task
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="h4 mb-3">Only three levels 🙁</h1>
        <div class="w-50">
            <select id="categoryLvl1" class="form-select my-2 shadow-none">
                <option value>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                @endforeach
            </select>
            <select id="categoryLvl2" class="form-select my-2 shadow-none d-none">

            </select>
            <select id="categoryLvl3" class="form-select my-2 shadow-none d-none">
            </select>
        </div>
    </div>
@endsection

@section('js')
    <script src={{ asset('main.js') }}></script>
@endsection
