<?php
use App\Models\Flight;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Constraints\SeeInOrder;

//لازم اعرف هاد الاوبجكت

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('ahmed', function () {
    $name = 'Ahmed Farhat';
    return view('ahmed', compact('name'));
});

Route::post('send', function (Request $request) {
    $name = $request->name;
    return view('ahmed', compact('name'));
});



Route::get('tasck', function () {
    $tascks = [
        '1'  => 'tasck 1',
        '2'  => 'tasck 2',
        '3'  => 'tasck 3'
    ];
    return view('tasck', compact('tascks'));
});



Route::get('tasck/show/{id}', function ($id) {
    $tascks = [
        '1'  => 'tasck 1',
        '2'  => 'tasck 2',
        '3'  => 'tasck 3'
    ];

    $tasck = $tascks[$id];
    return view('show', compact('tasck'));
});





Route::get('Query Builder/tasks', function () {
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    return view('Query Builder/tasks', compact('tasks'));
});

Route::get('Query Builder/task/Show/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);
    // dd($task);
    return view('Query Builder/Show', compact('task'));
});


Route::get('todo', function () {
  //  $tasks = DB::table('tasks')->orderBy('title',"asc")->get();
 // $tasks = Task::all();
  $tasks = Task::all()->sortBy("title");


    return view('todo', compact('tasks'));
});


Route::post('store', function (Request $request)  {
   // DB::table('tasks')->insert([
     //       'title' => $request->title
    // ]);

     $task = new Task();
     $task ->title = $request->title;
     $task->save();
        return redirect()->back();
});



Route::post('Delete/{title}', function ($title)  {


 Task::where('title', $title) -> delete();


 return redirect()->back();

 });





