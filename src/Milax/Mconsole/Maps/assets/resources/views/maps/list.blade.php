@extends('mconsole::app')

@section('content')

@include('mconsole::partials.table', [
    'add' => '/mconsole/maps/create',
])

@endsection