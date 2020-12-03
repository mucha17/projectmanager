<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $project = new Project([
            'name' => 'Blogplace',
            'author' => 'mucha17',
            'start_date' => '2019-01-01 01:02:31.000000',
            'finish_date' => '2020-06-21 14:15:31.000000',
            'short_description' => 'Mój pierwszy projekt w PHP z użyciem frameworka Laravel.',
            'long_description' => 'Projekt będący rozwiązaniem zadania dla początkujących pracę z frameworkiem Laravel. Projekt polegał na przeportowaniu funkcjonalności blogowej portalu blogspot na aplikację webową z użyciem frameworka Laravel oraz biblioteki ReactJS.',
        ]);
        $project->save();

        $project = new Project([
            'name' => 'ProjectManager',
            'author' => 'mucha17',
            'start_date' => '2020-11-25 14:23:00.000000',
            'short_description' => 'Projekt wykonywany w ramach tworzenia kursu podstaw frameworka Laravel.',
            'long_description' => 'Aplikacja webowa wyświetlająca informacje na temat stworzonych projektów. Stworzona w pełni w PHP z wykorzystaniem frameworka Laravel.'
        ]);
        $project->save();
    }
}
