@extends('layouts.app')

@section('title-block')
Обновление записей
@endsection


@section('content')
<h1>Обновление записей</h1>


@if($errors->any())
<div class="alert alert-danger">
   <ul>
       @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
</div>
@endif


<form action="{{route('contact-update-submit', $data->id)}}" method='POST'>
@csrf
    <div class='form-group'>
        <label for="name"></label>
        <input type="text" name='name' value="{{$data->name}}" placeholder='как вас зовут?' id='name' class='form-control'>
    </div>

    <div class='form-group'>
        <label for="email"></label>
        <input type="text" name='email' value="{{$data->email}}" placeholder='ваша почта?' id='email' class='form-control'>
    </div>


    <div class='form-group'>
        <label for="subject"></label>
        <input type="text" name='subject' value="{{$data->subject}}" placeholder='ваш вопрос?' id='subject' class='form-control'>
    </div>


    <div class='form-group'>
        <label for="message"></label>
        <textarea name="message" id="message" placeholder='Напишите сообщение' cols='30' rows='10'>{{$data->message}}</textarea>
    </div>
    <button type='submit' class='btn btn-success'>Обновить</button>
    



</form>
@endsection