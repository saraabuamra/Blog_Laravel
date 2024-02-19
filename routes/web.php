<?php

use App\Http\Controllers\Admin\ArticalController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChannelController;
use App\Http\Controllers\Admin\PoemController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard',[RegisteredUserController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function () {
    // profiles
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // poems
    Route::get('/poems', [PoemController::class, 'poems'])->name('poem.poems');

    //delete poems
    Route::get('delete-poem/{id}',[PoemController::class, 'deletePoem'])->name('poem.deletepoem');

    //add-edit-poem
    Route::match(['get', 'post'],'add-edit-poem/{id?}',[PoemController::class, 'addEditPoem']);


    // articals
    Route::get('/articals', [ArticalController::class, 'articals'])->name('artical.articals');

    //delete artical
    Route::get('delete-artical/{id}',[ArticalController::class, 'deleteArtical'])->name('artical.deleteartical');
  
    //add-edit-artical
    Route::match(['get', 'post'],'add-edit-artical/{id?}',[ArticalController::class, 'addEditArtical']);

     // channels
     Route::get('/channels', [ChannelController::class, 'channels'])->name('channel.channels');

     //delete channel
     Route::get('delete-channel/{id}',[ChannelController::class, 'deleteChannel'])->name('channel.deletechannel');
   
     //add-edit-channel
     Route::match(['get', 'post'],'add-edit-channel/{id?}',[ChannelController::class, 'addEditChannel']);

    // categories
    Route::get('/categories', [CategoryController::class, 'categories'])->name('category.categories');

    //delete category
    Route::get('delete-category/{id}',[CategoryController::class, 'deleteCategory'])->name('category.deletecategory');
       
    //add-edit-category
    Route::match(['get', 'post'],'add-edit-category/{id?}',[CategoryController::class, 'addEditCategory']);

     // programs
     Route::get('/programs', [ProgramController::class, 'programs'])->name('program.programs');

     //delete program
     Route::get('delete-program/{id}',[ProgramController::class, 'deleteProgram'])->name('category.deleteprogram');
        
     //add-edit-program
     Route::match(['get', 'post'],'add-edit-program/{id?}',[ProgramController::class, 'addEditProgram']);
});

require __DIR__.'/auth.php';
