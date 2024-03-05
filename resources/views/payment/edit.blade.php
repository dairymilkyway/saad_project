@extends('layouts.admin')
@section('body')
<x-app-layout>
    <x-slot name="header">
        @include('header.headers')
    </x-slot>
    <form method="POST" action="{{ route('payment.update', $payment->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="{{ $payment->tenant->user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="amount_to_be_paid">To be Paid</label>
            <input type="number" class="form-control" id="amount_to_be_paid" value="{{ $payment->amount_to_be_paid }}" readonly>
        </div>
        <div class="form-group">
            <label for="amount_paid">Amount Paid</label>
            <input type="number" class="form-control" id="amount_paid" name="amount_paid" value="{{ $payment->amount_paid }}">
        </div>
        <div class="form-group">
            <label for="balance">Balance</label>
            <input type="number" class="form-control" id="balance" value="{{ $payment->balance }}" readonly>
        </div>
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea class="form-control" id="remarks" name="remarks">{{ $payment->remarks }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Payment</button>
    </form>
</x-app-layout>
@endsection
