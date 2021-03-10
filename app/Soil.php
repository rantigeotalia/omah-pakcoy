<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Soil extends Model
{
    use SoftDeletes;
	protected $table = 'soil_moisture';
 	protected $primaryKey = 'id';
    protected $fillable = [
    	'soil_moisture',
    	'date',
    	'note',
    ];
    protected $dates = ['deleted_at'];
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
