<?php

namespace App\Mconsole\Maps\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = ['provider', 'name', 'description', 'center', 'zoom'];
    
    /**
     * Relationship to Place
     * 
     * @return HasMany
     */
    public function places()
    {
        return $this->hasMany('App\Mconsole\Maps\Place');
    }
}
