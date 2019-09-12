<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class pagescontroller extends Controller
{
    
public function home(){


	$projects = [    
              'hai',
              'how',
              'you',
	];
    return view('welcome',['tasks' => $tasks,
                           'rubens' =>request('title')

]);
}


public function index(){


	$projects = project::all();
    return view('welcome',compact('projects'));
}

public function create(){


    return view('create');
}

public function store(){

request()->validate([
	'title' =>['required','min:3'],
	'description'=>['required','min:3'],

]);

project::create(['title'=>request('title'),'description'=>request('description')]);

   
    return redirect('/project/create');

}
public function show($id)
    {

        $projects=project::findorfail($id);
    	return view('show',compact('projects'));
       
    }

 public function edit($id)
    {


    	$projects=project::find($id);

 

    	return view('edit',compact('projects'));
       
    }

 public function update($id)
    {

$project=project::find($id);

       $project->title = request('title');
    $project->description = request('description');

    $project->save();

    return redirect('/project/create');
    }


    public function destroy($id){


project::find($id)->delete();

return redirect('/project/create');


    }



}
