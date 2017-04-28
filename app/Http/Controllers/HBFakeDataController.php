<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017.04.27
 * Time: 12:03
 */

namespace App\Http\Controllers;

use App\models\HBCities;
use App\models\HBHobies;
use App\models\HBPeople;
use App\models\HBPeopleHobbiesConnections;
use Faker\Factory;

class HBFakeDataController
{
    public function generateCities(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            HBCities::create($data[] =
                [
                    'name' => $faker->city,
                ]);
        }

    }
    public function generatePeople(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            HBPeople::create($data[] =
                [
                    'name' => $faker->name,
                    'age' => $faker->randomElement(['25', '35', '40']),
                    'city_id' =>HBCities::get()->random()->id,
                ]);
        }

    }
    public function generateHobbies(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            HBHobies::create($data[] =
                [
                    'hobbies' => $faker->randomElement(['sportas', 'tenisas', 'futbolas']),
                ]);
        }

    }
    public function generateClientsPersonsTypesConnections(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            HBPeopleHobbiesConnections::create($data[] =
                [
                    'people_id' => HBPeople::get()->random()->id,
                    'hobbies_id' => HBHobies::get()->random()->id,
                ]);
        }

    }
}