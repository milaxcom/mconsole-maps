<?php

namespace Milax\Mconsole\Maps\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Milax\Mconsole\Maps\Http\Requests\PlaceRequest;
use Milax\Mconsole\Maps\Models\Place;
use Milax\Mconsole\Maps\Models\Map;
use View;

/**
 * Maps module controller file
 */
class PlacesController extends Controller
{
    use \HasQueryTraits, \HasRedirects;
    
    protected $model = 'Milax\Mconsole\Maps\Models\Place';
    
    public function __construct(Request $request)
    {
        $this->map = (int) $request->segment(3);
        $this->map = Map::find($this->map);
        $this->redirectTo = sprintf('/mconsole/maps/%s/places', $this->map);
        View::share('map', $this->map);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->setQuery(Place::with('map')->where('map_id', $this->map->id))->run('mconsole::places.list', function ($item) {
            return [
                '#' => $item->id,
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
        return view('mconsole::places.form');
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
    public function edit($id)
    {
        return view('mconsole::places.form', [
            'item' => Place::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlaceRequest $request, $id)
    {
        Place::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::destroy($id);
    }
}
