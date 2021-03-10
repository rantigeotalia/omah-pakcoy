<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use SoftDeletes;
	protected $table = 'device';
 	protected $primaryKey = 'id';
    protected $fillable = [
    	'device',
    	'location',
    	'status',
    ];
    protected $dates = ['deleted_at'];
}
