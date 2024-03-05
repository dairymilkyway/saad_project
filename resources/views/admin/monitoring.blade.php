@extends('layouts.adminstall')
@section('body')
   <x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <a class="btn btn-success custom-create-button" href="{{ route('stall.create') }}"> <i class="fas fa-plus"></i>Create Stall</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-7 mb-7">
            <form method="GET" class="form-inline search-form">
                <div class="input-group">
                    {{-- <input type="text" class="form-control search-input" placeholder="Search products" name="search" value="{{ htmlspecialchars($searchQuery) }}"> --}}
                    <div class="input-group-append">
                        {{-- <button class="btn btn-outline-secondary search-button" type="submit">Search</button> --}}
                    </div>
                </div>
            </form>
        </div>
        <div class="row text-center py-5">
            @foreach ($stalls as $stall)
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <div class="card shadow custom-card">
                    <div class="card-body">
                        <td><img src="{{ url($stall->img_path) }}" alt="stall image" width="50" height="50"></td>
                        <h5 class="card-title">{{ $stall->codename }}</h5>
                        <h6 class="card-title">{{ $stall->description }}</h6>
                        <h7 class="card-title">{{ $stall->status }}</h7>
                        <h7 class="card-title">{{ $stall->rent_cost }}</h7>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="{{ route('stall.edit', $stall->id) }}" class="edit-btn mr-4"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('stall.delete', $stall->id) }}" method="POST" class="delete-btn">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger delete-btn" onclick="return confirm('Are you sure you want to delete this stall?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
@endsection
