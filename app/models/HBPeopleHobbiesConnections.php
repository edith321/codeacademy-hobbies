<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HBPeopleHobbiesConnections extends Model
{
    public $updated_at = false;
    /**
     * Table name
     * @var string
     */
    protected $table = 'hb_people_hobbies_connection';
    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['people_id', 'hobbies_id'];

    public function hobbiesData()
    {
        return $this->hasOne(HBHobies::class, 'id', 'hobbies_id');
    }
}
