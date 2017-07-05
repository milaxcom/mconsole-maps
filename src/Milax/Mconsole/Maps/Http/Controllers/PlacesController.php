<?php

namespace Milax\Mconsole\Maps\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Milax\Mconsole\Maps\Http\Requests\PlaceRequest;
use Milax\Mconsole\Maps\Models\Place;
use Milax\Mconsole\Maps\Models\Map;
use Milax\Mconsole\Contracts\ListRenderer;
use Milax\Mconsole\Contracts\FormRenderer;
use View;

/**
 * Maps module controller file
 */
class PlacesController extends Controller
{
    use \HasRedirects, \DoesNotHaveShow;
    
    protected $model = 'Milax\Mconsole\Maps\Models\Place';
    
    /**
     * Create new class instance
     */
    public function __construct(Request $request, ListRenderer $list, FormRenderer $form)
    {
        $this->list = $list;
        $this->form = $form;
        
        $this->form->addStyles([
            '/mconsole-modules/mconsole-maps/css/maps.css',
        ])->addScripts([
            sprintf('https://maps.googleapis.com/maps/api/js?key=%s&libraries=places&language=%s', env('GOOGLE_MAPS_KEY'), app('API')->options->getByKey('map_picker_language')),
            '/massets/js/map-picker.js',
            '/mconsole-modules/mconsole-maps/js/place.js',
        ]);
        
        $this->redirectTo = mconsole_url('maps');
        
        if ($request->segment(3)) {
            $this->map = (int) $request->segment(3);
            $this->map = Map::find($this->map);
            $this->redirectTo = mconsole_url(sprintf('maps/%s/places', $this->map->id));
            View::share('map', $this->map);
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->list->setQuery(Place::with('map')->where('map_id', $this->map->id))->setAddAction(sprintf('maps/%s/places/create', $this->map->id))->render(function ($item) {
            return [
                trans('mconsole::tables.id') => $item->id,
                trans('mconsole::place.table.name') => $item->name,
                trans('mconsole::place.table.address') => $item->address,
            ];
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->form->render('mconsole::places.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequest $request)
    {
        Place::create($request->all());
        
        $this->redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($mapId, $id)
    {
        return $this->form->render('mconsole::places.form', [
            'item' => Place::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceRequest $request, $mapId, $id)
    {
        Place::findOrFail($id)->update($request->all());
        
        $this->redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($mapId, $id)
    {
        Place::destroy($id);
        
        $this->redirect();
    }
}
