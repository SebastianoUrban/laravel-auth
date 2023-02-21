<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $projects = [
            [
                'title' => 'titolo',
                'start_date' => '2023-02-21',
                'end_date' => '2023-02-20',
                'place' => 'Eraclea',
                'description' => 'description1'
            ],
            [
                'title' => 'titolo2',
                'start_date' => '2023-01-21',
                'end_date' => '2023-01-20',
                'place' => 'Crepaldo',
                'description' => 'description2'
            ]
        ];

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->start_date = $project['start_date'];
            $newProject->end_date = $project['end_date'];
            $newProject->place = $project['place'];
            $newProject->description = $project['description'];
            $newProject->save();
        }
    }
}
