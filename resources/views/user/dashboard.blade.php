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
            padding: 50px;
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

        <a class="nav-link" href="{{ route('tenant.index') }}" style="color: #343a40;">
        
        <Center><h4><i class="fas fa-users"></i> Tenants</h2></center>
    </a>
       </div>

        <div class="big-container">

            <a class="nav-link" href="{{ route('admin.analytics') }}" style="color: #343a40;">
                
               <center> <h4><i class="fas fa-chart-area"></i> Analytics</h2></center>
               </a>
        </div>

        <div class="big-container">

            <a class="nav-link" href="{{ route('stall.index') }}" style="color: #343a40;"> 
        
            <Center><h4><i class="fas fa-warehouse"></i> Monitoring</h2></center>
            </a>
        </div>

        <div class="big-container">
           
            <a class="nav-link" href="{{ route('payment.index') }}" style="color: #343a40;">
             
                <Center> <h4> <i class="fas fa-money-bill"></i> Payments</h4></Center>
                </a>
        </div>

        <div class="big-container">
            <a class="nav-link" href="{{ route('parking.index') }}" style="color: #343a40;">
               
                <Center> <h4><i class="fas fa-car"></i> Parking</h4></Center>
                </a>
        </div>
    </div>
</x-app-layout>
@endsection
        