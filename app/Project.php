<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = ['name', 'description'];

    /**
     * Read the project XML file path and create/update the database
     * @param string $path
     */
    public function createProjectsFromFile(string $path): void {        
        $xml = simplexml_load_file($path);
        foreach ($xml->project as $item) {
            Project::updateOrCreate(['name' => $item->name], ['description' => addslashes($item->description)]);
        }
    }

}
