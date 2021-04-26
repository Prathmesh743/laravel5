<?php

use Illuminate\Database\Seeder;
use App\Task;
class TaskSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

         $task= ['designation' => 'Junior','time_period' => 'fullTime'];
        for($i=0; $i < 500; $i++)
        {
            Task::create([
               'title' => $faker->name,
               'task' => $task,
            ]);
        }
    }
}
