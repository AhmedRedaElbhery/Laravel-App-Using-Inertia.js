<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return inertia('welcome');
});

Route::get('/users', function (Request $request) {
    return inertia('users/index',[
       'users' => User::query()
       ->when($request->input('search'), function ($query,$search){
        $query->where('name','like','%'.$search.'%');
       })
       ->paginate(10)
       ->withQueryString(),

       'filter' => $request->search
    ]);
});


Route::get('/users/create', function () {
    return inertia('users/create');
});

Route::post('/users', function (Request $request) {

    $data = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    User::create($data);

    return redirect('/users');
});


Route::get('/settings', function () {
    return inertia('settings');
});


Route::post('/logout', function () {
    dd('log out');
});