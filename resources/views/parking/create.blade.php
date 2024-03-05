@extends('layouts.admin')
@section('body')
<div class="container">
    <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                        <div class="card-header"> Parking </div>
                </div>
            </div>
    </div>
</div>
<div class="container">
    <form action="{{ route('parking.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="plate_number">Plate Number: </label>
            <input type="text" class="form-control" name="plate_number" required>
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
@endsection
