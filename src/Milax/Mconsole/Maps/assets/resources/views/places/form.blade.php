@extends('mconsole::app')

@section('page.styles')
    <link href="/massets/modules/mconsole-maps/css/maps.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	
	@if (isset($item))
		{!! Form::model($item, ['method' => 'PUT', 'route' => ['mconsole.maps.{id}.places.update', $map->id, $item->id]]) !!}
	@else
		{!! Form::open(['method' => 'POST', 'route' => ['mconsole.maps.{id}.places.store', $map->id]]) !!}
	@endif
    
    <input type="hidden" name="map_id" value="{{ $map->id }}" />
    
	<div class="row">
        
        <div class="col-lg-5 col-md-6">
            <div class="portlet light">
                @include('mconsole::partials.portlet-title', [
                    'back' => sprintf('/mconsole/maps/%s/places', $map->id),
                    'title' => trans('mconsole::place.form.information'),
                ])
				<div class="portlet-body form">
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.name'),
                        'name' => 'name',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.country'),
                        'name' => 'country',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.city'),
                        'name' => 'city',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.address'),
                        'name' => 'address',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.zip'),
                        'name' => 'zip',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.phone'),
                        'name' => 'phone',
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::place.form.web'),
                        'name' => 'web',
                    ])
                    @include('mconsole::forms.textarea', [
                        'label' => trans('mconsole::place.form.comments'),
                        'name' => 'comments',
                        'size' => '12x3'
                    ])
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            @include('mconsole::forms.text', [
                                'label' => trans('mconsole::place.form.longitude'),
                                'name' => 'longitude',
                            ])
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            @include('mconsole::forms.text', [
                                'label' => trans('mconsole::place.form.latitude'),
                                'name' => 'latitude',
                            ])
                        </div>
                    </div>
                    @include('mconsole::forms.state')
				</div>
                <div class="form-actions">
                    @include('mconsole::forms.submit')
                </div>
			</div>
		</div>
        
		<div class="col-lg-7 col-md-6">
			<div class="portlet light">
                @include('mconsole::partials.portlet-title', [
                    'title' => trans('mconsole::place.form.picker'),
                    'fullscreen' => true,
                ])
				<div class="portlet-body">
                    <div class="form-body map-picker-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                <div class="map"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 map-use-controls hide">
                                <div class="map-use btn btn-sm blue">{{ trans('mconsole::place.form.use') }}</div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        
	</div>
	
	{!! Form::close() !!}
	
@endsection

@section('page.scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfnqLsu6-zbY03Z-5hUtAr8ajewIIt2ms&libraries=places&language={{ app('API')->options->get('map_picker_language') }}"></script>
    <script src="/massets/modules/mconsole-maps/js/map-picker.js" type="text/javascript"></script>
    <script>
        var picker = $('.map-picker-container').mapPicker({
            center: {
                lat: ($('input[name="latitude"]').val().length > 0) ? parseFloat($('input[name="latitude"]').val()) : 55.7494733,
                lng: ($('input[name="longitude"]').val().length > 0) ? parseFloat($('input[name="longitude"]').val()) : 37.3523241,
            },
            zoom: 8,
        });
        picker.use(function (address, latlng) {
            $('input[name="latitude"]').val(latlng.lat);
            $('input[name="longitude"]').val(latlng.lng);
            for (var i in address) {
                switch (address[i].type) {
                    case 'country':
                        $('input[name="country"]').val(address[i].long_name).trigger('change');
                        break;
                    case 'locality':
                        $('input[name="city"]').val(address[i].long_name);
                        break;
                    case 'postal_code':
                        $('input[name="zip"]').val(address[i].long_name);
                        break;
                    case 'formatted_address':
                        $('input[name="address"]').val(address[i].long_name);
                        break;
                }
            }
        });
    </script>
@endsection