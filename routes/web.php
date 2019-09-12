<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/','pagescontroller@index');
Route::get('/project','pagescontroller@index');
Route::get('/project/create','pagescontroller@create');
Route::post('/project','pagescontroller@store');//Inserting Records
Route::get('/{id}/edit', 'pagescontroller@edit'); // edit pages


/*Route::get('/', 'ProjectController@index')->name('ProjectsOverview');
	Route::get('/create', 'ProjectController@create')->name('createProject');
	Route::get('/{Project}', 'ProjectController@show')->name('showProject');
	Route::post('/', 'ProjectController@store')->name('storeProject');
	Route::get('/{Project}/edit', 'ProjectController@edit')->name('editProject');
	Route::patch('/{Project}', 'ProjectController@update')->name('updateProject');
	Route::delete('/{Project}/delete', 'ProjectController@destroy')->name('deleteProject');*/


Route::get('/about', function (Request $request) {







    return view('about');
});

Route::resource('project','pagescontroller');

Route::patch('/tasks/{tasks}', 'projecttaskscontroller@update');


Route::post('/project/{project}/tasks/', 'projecttaskscontroller@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
