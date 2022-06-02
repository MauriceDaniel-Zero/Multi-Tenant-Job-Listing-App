<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



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

    

Route::domain('localhost')->group(function() {
   Route::get('/', function () {
    return view('welcome');
   });
});

Route::domain('{tenant}.localhost')->middleware('tenant')->group(function() {
   Route::get('/', function ($tenant) {
    return view('welcome');
   });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

   $users_vue = DB::connection('vue')->table("users")->get();   
   $users_javascript = DB::connection('javascript')->table("users")->get();  
   $users_php = DB::connection('php')->table("users")->get();


        return view('dashboard', [
            "user1" => $users_vue,
            "user2" => $users_javascript,
            "user3" => $users_php,
        ]);
    })->name('dashboard');
});
