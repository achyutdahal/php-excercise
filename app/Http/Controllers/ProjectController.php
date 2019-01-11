<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Project;

class ProjectController extends Controller {

    /**
     * Get all the projects with 100 projects paginated 
     * @return JSON
     */
    public function index() {
        return DB::table('projects')->orderBy('id', 'desc')->paginate(100);
    }

    /**
     * Get all the details of a single project
     * @return JSON
     */
    public function project($id) {
        $project = Project::findOrFail($id);
        return $project;
    }

}
