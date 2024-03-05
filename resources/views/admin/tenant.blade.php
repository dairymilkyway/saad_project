@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <table class="table table-striped text-center"> <!-- Center align content -->
        <thead>
            <tr>
                <th scope="col">Stall Codename</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Address</th>
                <th scope="col">Agreement</th>
                <th scope="col">Rental Start</th> <!-- New column -->
                <th scope="col">Rental End</th> <!-- New column -->
                <th scope="col">Actions</th> <!-- New column -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tenants as $tenant)
                <tr>
                    <td>
                        @if ($tenant->stalls->isEmpty())
                            No stalls found that are rented by this tenant
                        @else
                            @foreach ($tenant->stalls as $stall)
                                {{ $stall->codename }}<br>
                            @endforeach
                        @endif
                    </td>
                    <td><img src="{{ Storage::url($tenant->img_path) }}" alt="Tenant Image" width="50" height="50"></td>
                    <td>{{ $tenant->user->name }}</td>
                    <td>{{ $tenant->age }}</td>
                    <td>{{ $tenant->contact_no }}</td>
                    <td>{{ $tenant->address }}</td>
                    <td><a href="{{ Storage::url($tenant->leaseagreement) }}" target="_blank">View Agreement</a></td>
                    <td>{{ $tenant->rental_start }}</td> <!-- Display rental_start -->
                    <td>{{ $tenant->rental_end }}</td> <!-- Display rental_end -->
                    <td>
                        <a href="{{ route('tenant.edit', $tenant->id) }}" class="btn btn-primary">Edit</a> <!-- Edit button -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
@endsection
