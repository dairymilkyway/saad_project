@extends('layouts.adminstall')
@section('body')
   <x-app-layout>
    <x-slot name="header">
        @include('header.header')
    </x-slot>
    <style>

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 50px;
            margin-top: 100px;
            margin-bottom: 1000px; /* Add margin to the bottom of the first row */
        }
        .big-container {
            flex: 1 0 30%;
            padding: 70px;
            background-color: #b5c99a;
            border: 7px solid #ccc;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Add transition for background color and box shadow */
            border-color: #718355;
        }
        .big-container:hover {
            background-color: #e0e0e0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add box shadow when hovering */
        }
    </style>
    <div class="container">
        <div class="big-container">
            <h2>Container 1</h2>
            <p>This is the content of container 1.</p>
        </div>
        <div class="big-container">
            <h2>Container 2</h2>
            <p>This is the content of container 2.</p>
        </div>
        <div class="big-container">
            <h2>Container 3</h2>
            <p>This is the content of container 3.</p>
        </div>
        <div class="big-container">
            <h2>Container 4</h2>
            <p>This is the content of container 4.</p>
        </div>
        <div class="big-container">
            <h2>Container 5</h2>
            <p>This is the content of container 5.</p>
        </div>
        <div class="big-container">
            <h2>Container 6</h2>
            <p>This is the content of container 6.</p>
        </div>
    </div>
</x-app-layout>
@endsection
        