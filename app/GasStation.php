<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasStation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gas_station';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
