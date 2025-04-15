@extends('layouts.app')

@section('title-block')
 Домашняя страница
@endsection

@section('aside')
@parent
<p>Parent hello</p>
@endsection

@section('content')
<h1>Домашняя страница</h1>
@endsection