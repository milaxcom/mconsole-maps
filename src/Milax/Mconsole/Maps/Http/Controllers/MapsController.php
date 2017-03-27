<?php

namespace Milax\Mconsole\Maps\Http\Controllers;

use App\Http\Controllers\Controller;
use Milax\Mconsole\Maps\Models\Map;
use Milax\Mconsole\Maps\Http\Requests\MapRequest;
use Milax\Mconsole\Contracts\ListRenderer;
use Milax\Mconsole\Contracts\FormRenderer;

/**
 * Maps module controller file
 */
class MapsController extends Controller
{
    use \HasRedirects, \DoesNotHaveShow;
    
    protected $model = 'Milax\Mconsole\Maps\Models\Map';
    
    /**
     * Create new class instance
     */
    public function __construct(ListRenderer $list, FormRenderer $form)
    {
        $this->list = $list;
        $this->form = $form;
        $this->redirectTo = mconsole_url('maps');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->list->setQuery(Map::with('places'))->setAddAction('maps/create')->render(function ($item) {
            return [
                trans('mconsole::tables.id') => $item->id,
                trans('mconsole::maps.table.name') => $item->name,
                trans('mconsole::maps.table.provider') => $item->provider,
                trans('mconsole::maps.table.places') => sprintf('<a href="%s" class="btn btn-xs green-jungle">%s</a> <a href="%s" class="btn btn-xs blue">%s</a>', mconsole_url(sprintf('maps/%s/places/create', $item->id)), trans('mconsole::maps.table.addplace'), mconsole_url(sprintf('maps/%s/places', $item->id)), trans('mconsole::maps.table.viewplaces')),
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
        return $this->form->render('mconsole::maps.form');
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
    public function edit($id)
    {
        return $this->form->render('mconsole::maps.form', [
            'item' => Map::findOrFail($id),
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
        Map::findOrFail($id)->update($request->all());
        
        $this->redirect();
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
        
        $this->redirect();
    }
}
