<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hamlet extends Model
{
    use Uuids;
    use SoftDeletes;

    protected $table = 'hamlets';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','slug'];
    public $incrementing = false;
}
