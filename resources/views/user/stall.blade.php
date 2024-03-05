@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.header')
    </x-slot>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Codename</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @if ($stalls->isEmpty())
                <tr>
                    <td colspan="3">No stalls found for this tenant.</td>
                </tr>
            @else
                @foreach ($stalls as $stall)
                    <tr>
                        <td>{{ $stall->codename }}</td>
                        <td>{{ $stall->description }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</x-app-layout>
@endsection
