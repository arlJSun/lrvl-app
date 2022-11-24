@extends('layouts.main')

@section('container')
    <h1>halaman about</h1>
     <h3>{{ $name }}</h3>
     <h1>{{ $email }}</h1>
     <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img=thumbnail rounded-circle">
@endsection 