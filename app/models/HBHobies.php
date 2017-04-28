<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HBHobies extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hb_hobies';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'hobbies'];
}
