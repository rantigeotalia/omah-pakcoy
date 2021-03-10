<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Temperature extends Model
{
    use SoftDeletes;
	protected $table = 'temperature';
 	protected $primaryKey = 'id';
    protected $fillable = [
    	'temperature',
    	'date',
    	'note',
    ];
    protected $dates = ['deleted_at'];
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
