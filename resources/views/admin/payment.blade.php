@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">To be Paid</th>
                <th scope="col">Amount Paid</th>
                <th scope="col">Balance</th>
                <th scope="col">Remarks</th>
                <th scope="col">Action</th> <!-- Added Action column header -->
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->tenant->user->name }}</td>
                    <td>{{ $payment->amount_to_be_paid }}</td>
                    <td>{{ $payment->amount_paid }}</td>
                    <td>{{ $payment->balance }}</td>
                    <td>{{ $payment->remarks }}</td>
                    <td>
                        <a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
@endsection
