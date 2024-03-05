@extends('layouts.createstall')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
<div class="container mt-4">
    <h1>Create Stalls</h1>
    <div class="container">
        <form action="{{ route('stall.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="codename">Codename: </label>
                <input type="text" class="form-control" name="codename" required>
            </div>
            <div class="form-group">
                <label for="description">Description: </label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <label for="status">Status: </label>
                <input type="text" class="form-control" name="status" required>
            </div>
            <div class="form-group">
                <label for="rental_rate">Rental Rate: </label>
                <input type="text" class="form-control" name="rental_rate" required>
            </div>
            <div class="form-group">
                <label for="img_path">Images: </label>
                <input type="file" class="form-control-file" name="img_path[]" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</x-app-layout>
@endsection
