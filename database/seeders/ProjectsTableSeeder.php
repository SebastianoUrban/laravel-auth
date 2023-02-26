<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
                'title' => 'Boolean',
                'start_date' => '2022-10-05',
                'end_date' => '2023-04-15',
                'place' => 'Remote',
                'description' => 'Corso per full-stack web developer di 6 mesi'
            ],
            [
                'title' => 'Laurea in Statistica per le Tecnologie e le Scienze',
                'start_date' => '2017-10-02',
                'end_date' => '2022-09-26',
                'place' => 'Università degli Studi di Padova',
                'description' => 'Laurea in Statistica per le Tecnologie e le Scienze con specializzazione in Big Data'
            ],
            [
                'title' => 'Diploma di Maturitò in Robotica e Automazione Industriale',
                'start_date' => '2015-09-12',
                'end_date' => '2017-06-22',
                'place' => 'San Donà di Piave - ITTS Vito Volterra',
                'description' => 'Diploma di Maturita in Robotica e Automazione Industriale'
            ]
        ];

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->start_date = $project['start_date'];
            $newProject->end_date = $project['end_date'];
            $newProject->place = $project['place'];
            $newProject->description = $project['description'];
            $newProject->image = 'placeholder.jpg';
            $newProject->save();
        }
    }
}
