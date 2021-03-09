<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Humidity extends Model
{
	use SoftDeletes;
	protected $table = 'humidity';
 	protected $primaryKey = 'id_humidity';
    protected $fillable = [
    	'humidity',
    	'date',
    	'note',
    ];
    protected $dates = ['deleted_at'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

}
