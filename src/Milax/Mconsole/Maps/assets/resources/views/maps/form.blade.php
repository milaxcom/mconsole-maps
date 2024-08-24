<form method="POST" action="{{ mconsole_url(isset($item) ? sprintf('maps/%s', $item->id) : 'maps') }}">
    @if (isset($item))@method('PUT')@endif
    @csrf

    <div class="row">
        <div class="col-lg-7 col-md-6">
            <div class="portlet light">
                @include('mconsole::partials.portlet-title', [
                    'back' => mconsole_url('maps'),
                    'title' => trans('mconsole::maps.form.main'),
                    'fullscreen' => true,
                ])
                <div class="portlet-body form">
                    <div class="form-body">
                        @include('mconsole::forms.text', [
                            'label' => trans('mconsole::maps.form.name'),
                            'name' => 'name',
                            'value' => $item->name ?? null
                        ])
                        @include('mconsole::forms.textarea', [
                            'label' => trans('mconsole::maps.form.description'),
                            'name' => 'description',
                            'size' => '10x3',
                            'value' => $item->description ?? null
                        ])
                    </div>
                    <div class="form-actions">
                        @include('mconsole::forms.submit')
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-5 col-md-6">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-blue sbold uppercase">{{ trans('mconsole::maps.form.additional') }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    @include('mconsole::forms.select', [
                        'label' => trans('mconsole::maps.form.provider'),
                        'name' => 'provider',
                        'options' => [
                            '2gis' => '2gis',
                            'google' => 'google',
                            'yandex' => 'yandex',
                        ],
                        'value' => $item->provider ?? null
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::maps.form.center'),
                        'name' => 'center',
                        'value' => $item->center ?? null
                    ])
                    @include('mconsole::forms.text', [
                        'label' => trans('mconsole::maps.form.zoom'),
                        'name' => 'zoom',
                        'value' => $item->zoom ?? null
                    ])
                </div>
            </div>
        </div>
    </div>

</form>