@extends('app')
@section('title', 'Home')

@section('sidebar')
    @parent
    <p>Este es un codigo en el master sidebar.</p>
@endsection

@section('content')
    <p>Esta es parte del cuerpo del contenido</p>
@endsection