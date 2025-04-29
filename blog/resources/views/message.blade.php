@extends('layouts.app')

@section('title-block') Все сообщения @endsection

@section('content')
<h1>Все сообщения</h1>


@foreach($data as $element)
<div class='alert alert-info'>
    <h3>{{ $element->name }}</h3>
    <p>{{ $element->subject }}</p>
    <a href="{{ route('contact-detail-one', $element->id) }}">
        <button class='btn btn-warning'>Подробнее</button>
    </a>
</div>
@endforeach


@endsection



