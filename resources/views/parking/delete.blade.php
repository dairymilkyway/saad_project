@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('parking.deleteSelected') }}" method="POST" class="text-center">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <div class="row mb-2 mt-5">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-danger custom-delete-button">Delete Selected</button>
                        </div>
                    </div>
                    <table class="table table-striped mt-5">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input type="checkbox" id="selectAll">
                                </th>
                                <th scope="col">Plate Number</th>
                                <th scope="col">Parking Start</th>
                                <th scope="col">Parking End</th>
                                <th scope="col">Charge</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parkings as $parking)
                            <tr>
                                <td>
                                    <input type="checkbox" name="selectedParkings[]" value="{{ $parking->plate_number }}">
                                </td>
                                <td>{{ $parking->plate_number }}</td>
                                <td>{{ $parking->parking_start }}</td>
                                <td>{{ $parking->parking_end }}</td>
                                <td>{{ $parking->charge }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                <script>
                    document.getElementById('selectAll').addEventListener('change', function () {
                        var checkboxes = document.querySelectorAll('input[name="selectedParkings[]"]');
                        checkboxes.forEach(function (checkbox) {
                            checkbox.checked = document.getElementById('selectAll').checked;
                        });
                    });
                </script>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
