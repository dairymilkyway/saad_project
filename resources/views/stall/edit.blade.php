@extends('layouts.editstall')
@section('body')
{{-- {{dd($listener)}} --}}
    <div class="container">
        {!! Form::model($stall, ['route' => ['stall.update', $stall->id], 'class' => 'form-control',  'files' => true, 'method' => 'put']) !!}
        {{ Form::label('codename', 'codename', ['class' => 'form-control']) }}
        {!! Form::text('codename') !!}
        {{ Form::label('description', 'description', ['class' => 'form-control']) }}
        {!! Form::text('description') !!}
        {{ Form::label('status', 'status', ['class' => 'form-control']) }}
        {!! Form::text('status') !!}
        {{ Form::label('rental_rate', 'rental_rate', ['class' => 'form-control']) }}
        {!! Form::text('rental_rate') !!}
        {{ Form::label('img_path', 'upload image', ['class' => 'form-control']) }}
        {!! Form::file('img_path', ['class' => 'form-control']) !!}
        @error('img_path')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <img src="{{ url($stall->img_path) }}" alt="listener image" width="50" height="50">
        {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection
