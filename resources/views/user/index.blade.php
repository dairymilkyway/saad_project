@extends('layouts.adminstall')
@section('body')
   <x-app-layout>
    <x-slot name="header">
        @include('header.header')
    </x-slot>
    <div class="container"> 
        <div class="row justify-content-center mt-7 mb-7">
        </div>
        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-6">
                <form action="{{ route('user.filter') }}" method="GET">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="rented" value="Rented">
                        <label class="form-check-label" for="rented">Rented</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="for-rent" value="For Rent">
                        <label class="form-check-label" for="for-rent">For Rent</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="maintenance" value="Maintenance">
                        <label class="form-check-label" for="maintenance">Maintenance</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                </form>
            </div>
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
                        @if ($stall->status !== 'Maintenance')
                            @if ($stall->status !== 'Rented')
                                <a href="{{ route('tenant.create', ['stallId' => $stall->id]) }}" class="edit-btn mr-4"><i class="fas fa-plus"></i>Apply</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
@endsection
