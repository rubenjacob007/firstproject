<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\project;
class projecttaskscontroller extends Controller
{
	public function update(Task $task){

//	$task->update([
 //  'completed'=>request()->has('completed')

//	]);

	$method = request()->has('completed') ? 'complete' : 'incomplete';

      $task->$method();
	return back();
    	
    }


  public function store(project $project){

request()->validate([
	'description'=>['required','min:3'],

]);

Task::create(['project_id'=>$project->id,'description'=>request('description')]);

   
    return back();

}

}
