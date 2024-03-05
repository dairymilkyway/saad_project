@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <form action="{{ route('tenant.update', $tenant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="rental_start">Rental Start:</label>
            <input type="date" class="form-control" id="rental_start" name="rental_start" value="{{ $tenant->rental_start }}">
        </div>
        <div class="form-group">
            <label for="rental_end">Rental End:</label>
            <input type="date" class="form-control" id="rental_end" name="rental_end" value="{{ $tenant->rental_end }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app-layout>
@endsection
