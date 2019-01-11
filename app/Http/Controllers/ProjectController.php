<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Get all the projects with 100 projects paginated 
     * @return JSON
     */
    public function index(){
        return DB::table('projects')->orderBy('id', 'desc')->paginate(100);
    }
}
