@extends('layouts.createstall')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.header')
    </x-slot>
    <div class="container mt-4">
        <h1>Application for Rental</h1>
        <div class="container">
            <p>Hi {{ Auth::user()->name }}, please fill out the necessary information:</p>
            <div class="form-group">
                <a href="{{ Storage::url('public/images/lease-agreement.docx') }}" target="_blank">
                    <i class="fas fa-file-download"></i> Download Lease Agreement
                </a>
            </div>
            <form method="POST" action="{{ route('tenant.store', ['stallId' => request()->query('stallId')]) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="stallId" value="{{ request()->query('stall_id') }}">
                <div class="form-group">
                    <label for="age">Age: </label>
                    <input type="text" class="form-control" name="age" required>
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact No: </label>
                    <input type="text" class="form-control" name="contact_no" required>
                </div>
                <div class="form-group">
                    <label for="address">Address: </label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="form-group">
                    <label for="leaseagreement">Upload Signed Lease Agreement (PDF): </label>
                    <input type="file" class="form-control-file" name="leaseagreement" required>
                </div>
                <div class="form-group">
                    <label for="img_path">Upload Image: </label>
                    <input type="file" class="form-control-file" name="img_path" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
@endsection
