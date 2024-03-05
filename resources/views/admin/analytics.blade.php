@extends('layouts.admin')

@section('body')
    <x-app-layout>
        <x-slot name="header">
            @include('header.headers')
        </x-slot>

        <div class="container">
            <div class="row">
                <!-- Tenant Demographics by Address Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Tenant Demographics by Address</div>
                        <div class="card-body">
                            {!! $tenantByAddressChart->container() !!}
                        </div>
                    </div>
                </div>

                <!-- Stall Statuses Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Stall Statuses</div>
                        <div class="card-body">
                            {!! $stallStatusesChart->container() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- User vs Tenant Count Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">User vs Tenant Count</div>
                        <div class="card-body">
                            {!! $countChart->container() !!}
                        </div>
                    </div>
                </div>

                <!-- Parking Charges by Day Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Parking Charges by Day</div>
                        <div class="card-body">
                            {!! $parkingChargesChart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart scripts -->
        {!! $tenantByAddressChart->script() !!}
        {!! $stallStatusesChart->script() !!}
        {!! $countChart->script() !!}
        {!! $parkingChargesChart->script() !!}
    </x-app-layout>
@endsection
