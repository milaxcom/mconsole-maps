@extends('mconsole::app')

@section('content')

@include('mconsole::partials.table', [
    'back' => '/mconsole/maps',
    'add' => sprintf('/mconsole/maps/%s/places/create', $map->id),
    'title' => sprintf('%s "%s"', trans('mconsole::place.table.placesfor'), $map->name),
])

@endsection