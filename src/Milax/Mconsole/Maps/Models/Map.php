<?php

namespace Milax\Mconsole\Maps\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = ['provider', 'name', 'description', 'center', 'zoom'];
    
    /**
     * Relationship to Milax\Mconsole\Maps\Models\Place
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function places()
    {
        return $this->hasMany('Milax\Mconsole\Maps\Models\Place');
    }
}
