<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LightIntencity extends Model
{
    use SoftDeletes;
	protected $table = 'light_intensity';
 	protected $primaryKey = 'light_intensity_id';
    protected $fillable = [
    	'light_intensity',
    	'date',
    	'note',
    ];
    protected $dates = ['deleted_at'];
    // public function device()
    // {
    //     return $this->belongsTo(Device::class);
    // }
}
