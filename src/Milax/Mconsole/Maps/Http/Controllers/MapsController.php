<?php

namespace Milax\Mconsole\Maps\Http\Controllers;

use App\Http\Controllers\Controller;
use Milax\Mconsole\Maps\Models\Map;
use Milax\Mconsole\Maps\Http\Requests\MapRequest;
use ListRenderer;

/**
 * Maps module controller file
 */
class MapsController extends Controller
{
    use \HasRedirects;
    
    protected $model = 'Milax\Mconsole\Maps\Models\Map';
    protected $redirectTo = '/mconsole/maps';
    
    /**
     * Create new class instance
     */
    public function __construct(ListRenderer $renderer)
    {
        $this->renderer = $renderer;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->renderer->setQuery(Map::with('places'))->setPerPage(20)->render('maps/create', function ($item) {
            return [
                '#' => $item->id,
                trans('mconsole::maps.table.name') => $item->name,
                trans('mconsole::maps.table.provider') => $item->provider,
                trans('mconsole::maps.table.places') => sprintf('<a href="/mconsole/maps/%s/places/create" class="btn btn-xs green-jungle">%s</a> <a href="/mconsole/maps/%s/places" class="btn btn-xs blue">%s</a>', $item->id, trans('mconsole::maps.table.addplace'), $item->id, trans('mconsole::maps.table.viewplaces')),
                trans('mconsole::maps.table.count') => $item->places->count(),
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
        return view('mconsole::maps.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MapRequest $request)
    {
        Map::create($request->all());
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
        return view('mconsole::maps.form', [
            'item' => Map::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MapRequest $request, $id)
    {
        Map::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Map::destroy($id);
    }
}
