<?php
/**
 * Created by PhpStorm.
 * User: fimion
 * Date: 10/5/2017
 * Time: 5:48 AM
 */

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'Task 1', 'completed' => false, 'description' => 'do the dishes', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Task 2', 'completed' => false, 'description' => 'do the laundry', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Task 3', 'completed' => false, 'description' => 'mow the lawn', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Task 4', 'completed' => true, 'description' => 'finish laravel + vue talk', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Task 5', 'completed' => true, 'description' => 'eat dinner', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Task 6', 'completed' => true, 'description' => 'make a thing', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Task 7', 'completed' => false, 'description' => 'something else', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }

}