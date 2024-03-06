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
            flex: 1 0 25%;
            padding: 80px;
            background-color: #b5c99a;
            border: 7px solid #ccc;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Add transition for background color and box shadow */
            border-color: #718355;
            text-align: center; /* Center text */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative; /* Add position relative */
            overflow: hidden; /* Hide overflowing content */
        }
        .big-container:hover {
            background-color: #e0e0e0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add box shadow when hovering */
        }
        .big-container a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none; /* Remove underline from anchor tag */
            color: inherit; /* Inherit color from parent */
        }
    </style>
    <div class="container">

    <div class="big-container">
        <a href="{{ route('tenant.index') }}">
            <h4><i class="fas fa-users"></i> Tenants</h4>
        </a>
    </div>

    <div class="big-container">
        <a href="{{ route('admin.analytics') }}">
            <h4><i class="fas fa-chart-area"></i> Analytics</h4>
        </a>
    </div>

    <div class="big-container">
        <a href="{{ route('stall.index') }}">
            <h4><i class="fas fa-warehouse"></i> Monitoring</h4>
        </a>
    </div>

    <div class="big-container">
        <a href="{{ route('payment.index') }}">
            <h4><i class="fas fa-money-bill"></i> Payments</h4>
        </a>
    </div>

    <div class="big-container">
        <a href="{{ route('parking.index') }}">
            <h4><i class="fas fa-car"></i> Parking</h4>
        </a>
    </div>
</div>
</x-app-layout>
@endsection
            