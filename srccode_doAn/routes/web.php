<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
<<<<<<< HEAD
=======
use App\Http\Controllers\UserCrudController;

>>>>>>> template

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

<<<<<<< HEAD
Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');
=======
//Route::get('dashboard', [CrudUserController::class, 'dashboard']);

//Route::get('login', [CrudUserController::class, 'login'])->name('login');
//Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

//Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
//Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

//Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

//Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

//Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
//Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

//Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

//Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');



//route do an
Route::get('users', [UserCrudController::class, 'index'])->name('users.index');
Route::get('UserCreate', [UserCrudController::class, 'create'])->name('users.UserCreate');
Route::post('users', [UserCrudController::class, 'postUser'])->name('users.store');
Route::get('/users/{id}/edit', [UserCrudController::class, 'editUser'])->name('users.editUser');
Route::delete('/users/{id}/delete', [UserCrudController::class, 'deleteUser'])->name('users.deleteUser');
Route::put('/users/{id}', [UserCrudController::class, 'updateUser'])->name('users.updateUser');

>>>>>>> template

Route::get('/', function () {
    return view('welcome');
});