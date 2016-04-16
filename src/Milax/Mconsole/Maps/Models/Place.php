<?php

namespace Milax\Mconsole\Maps\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['map_id', 'address', 'latitude', 'longitude', 'name', 'country', 'city', 'zip', 'phone', 'web', 'comment', 'enabled'];
    
    /**
     * Relationship to Milax\Mconsole\Maps\Models\Map
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo('Milax\Mconsole\Maps\Models\Map');
    }
}
