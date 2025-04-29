@extends('layouts.app')
@section('title-block') {{$data->subject}} @endsection

@section('content')
<h1>{{ $data-> subject }}</h1>

<div class='alert alert-info'>
    <p><strong>{{ $data->name }}</strong></p>
    <p>{{ $data->message }}</p>
    <p>{{ $data->email }}</p>
    <p><small>{{ $data->created_at }}</small></p>
</div>

@endsection