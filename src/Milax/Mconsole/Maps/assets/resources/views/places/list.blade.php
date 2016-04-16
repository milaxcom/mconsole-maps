@extends('mconsole::app')

@section('content')

@include('mconsole::partials.table', [
    'title' => sprintf('%s "%s"', trans('mconsole::place.table.placesfor'), $map->name),
    'actions' => sprintf('<a href="/mconsole/maps" class="btn btn-circle blue"><i class="fa fa-rotate-left"></i> Вернуться назад</a> <a href="/mconsole/maps/%s/places/create" class="btn btn-circle green-jungle"><i class="fa fa-plus"></i> %s </a>', $map->id, trans('mconsole::tables.create')),
])

@endsection