<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HBPeople extends BaseModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'hb_people';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['id', 'name', 'age', 'gender', 'city_id'];

    public function citiesData()
    {
        return $this->hasOne(HBCities::class, 'id', 'city_id');
    }
    public function peopleHobbiesConnectionsData()
    {
        return $this->hasMany(HBPeopleHobbiesConnections::class, 'people_id', 'id')->with(['hobbiesData']);
    }
}
