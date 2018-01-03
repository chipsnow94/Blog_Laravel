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
use App\Task;
use App\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about', [
//         'name'=>'Vinh-So-badddd',
//         'age' => '2'
//     ]);
//---------//

//---------//
// Route::get('/about', function () {
//     //$name ='Vinh- SO Nice';
//     // return view('about', ['name'=>$name]);
//     // return view('about')->with('name', 'Vinh');
//     //return view('about', compact('name'));
//     //------------------//
//     // $tasks=[
//     //     'Wake up',
//     //     'Go to work',
//     //     'Eat Lunch',
//     //     'Come home',
//     //     'Fuks yourself'
//     // ];

//     // $tasks=DB::table('tasks')->get();
//     // //$tasks=DB::table('tasks')->latest()->get();
//     // return view('about', compact('tasks'));
//     //-------------------------//
//     // Route::get('/about/{task}', function ($id) {
// //     $tasks=DB::table('tasks')->find($id);
// //     dd($tasks);
// //     return view('about', compact('tasks'));
// // });
// });


// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');
// Route::get('/tasks', function () {
//     $tasks=DB::table('tasks')->get();
//     $tasks =Task::all();
//     return view('tasks.index', compact('tasks'));
// });
// Route::get('/tasks/{task}', function ($id) {
//     //  $task=DB::table('tasks')->find($id);
//     $task= Task::find($id);
//     return view('tasks.show', compact('task'));
// });
