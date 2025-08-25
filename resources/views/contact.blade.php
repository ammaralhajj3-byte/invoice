@php
use App\Models\Client;
$data=new Client();
$data=$data->get();
@endphp
@extends('layout')
@section('content')
<form action="http://127.0.0.1:8000/send_name" method="post">
    @csrf
    <input type="text" name="name">
    <button>Submit</button>
</form>
@foreach($data as $item)
<h4>{{$item->name}}</h4>
@endforeach
@endsection