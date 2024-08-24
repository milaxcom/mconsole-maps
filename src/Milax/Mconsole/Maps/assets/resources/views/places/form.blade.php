<form method="POST" action="{{ mconsole_url(isset($item) ? sprintf('maps/%s/places/%s', $map->id, $item->id) : sprintf('maps/%s/places', $map->id)) }}">
    @if (isset($item))@method('PUT')@endif
    @csrf

<input type="hidden" name="map_id" value="{{ $map->id }}" />

<div class="row">
    
    <div class="col-lg-5 col-md-6">
        <div class="portlet light">
            @include('mconsole::partials.portlet-title', [
                'back' => mconsole_url(sprintf('maps/%s/places', $map->id)),
                'title' => trans('mconsole::place.form.information'),
            ])
			<div class="portlet-body form">
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.name'),
                    'name' => 'name',
                    'value' => $item->name ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.country'),
                    'name' => 'country',
                    'value' => $item->country ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.city'),
                    'name' => 'city',
                    'value' => $item->city ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.address'),
                    'name' => 'address',
                    'value' => $item->address ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.zip'),
                    'name' => 'zip',
                    'value' => $item->zip ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.phone'),
                    'name' => 'phone',
                    'value' => $item->phone ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.image'),
                    'name' => 'image',
                    'value' => $item->image ?? null,
                ])
                @include('mconsole::forms.text', [
                    'label' => trans('mconsole::place.form.web'),
                    'name' => 'web',
                    'value' => $item->web ?? null,
                ])
                @include('mconsole::forms.textarea', [
                    'label' => trans('mconsole::place.form.comment'),
                    'name' => 'comment',
                    'size' => '12x3',
                    'value' => $item->comment ?? null,
                ])
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        @include('mconsole::forms.text', [
                            'label' => trans('mconsole::place.form.latitude'),
                            'name' => 'latitude',
                            'value' => $item->latitude ?? null,
                        ])
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        @include('mconsole::forms.text', [
                            'label' => trans('mconsole::place.form.longitude'),
                            'name' => 'longitude',
                            'value' => $item->longitude ?? null,
                        ])
                    </div>
                </div>
                <input id="geo-parse" type="text" class="form-control" placeholder="{{ trans('mconsole::place.form.parse') }}"/>
                @include('mconsole::forms.state', isset($item) ? $item : [])
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
            @if (is_null(env('GOOGLE_MAPS_KEY')))
                <div class="portlet-body">
                    {!! trans('mconsole::place.key') !!}
                </div>
            @else
                <div class="portlet-body map-picker-placeholder">
                    <div class="form-body map-picker-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <input id="pac-input" class="controls" type="text" placeholder="{{ trans('mconsole::place.form.search') }}">
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
            @endif
		</div>
	</div>
    
</div>

</form>