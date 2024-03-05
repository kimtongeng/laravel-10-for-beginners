<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $users = DB::select('select * from users');
    // return view('welcome');
    // $users = DB::insert("insert into users (name,email,password) values(?,?,?)",["tongtong","tongtong@gamil.com","1234"]);
    // $users = DB::select("select * from users");
    // $users = DB::update("update users set email = ? where id =?",["tongtong7@gamil.com","2"]);
    // $users = DB::select("select * from users");
    // $users = DB::delete("delete from users where id = 1");
    // $users = DB::select("select * from users");

    // $users = DB::table('users')->get();
    // $users = DB::table('users')->where("id",2)->get();
    // $users = DB::table('users')->insert([
    //     'name'=>"tonglove",
    //     'email'=>"tonglove1@gamil.com",
    //     'password'=>"loveyou"
    // ]);
    // $users = DB::table("users")->where("id",3)->update(["name"=>"love meng"]);
    // $users = DB::table('users')->where("id",2)->delete();

    // $users = DB::table("users")->first();
    // $users = DB::table("users")->where("id",3)->first();
    // $users = DB::table("users")->find(3);


    dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
