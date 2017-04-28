<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HBCities extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hb_cities';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name'];
}
