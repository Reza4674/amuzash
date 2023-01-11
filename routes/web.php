<?php

use App\Http\Controllers\admin\AboutConntroller;
use App\Http\Controllers\admin\AdminCommentController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\OffersController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\site\CommentController;
use App\Http\Controllers\site\siteController;
use App\Models\LastProject;
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

Route::prefix('admin/')->name('admin.')->group(function (){
       Route::resource('categories',CategoryController::class);
       Route::resource('about',AboutConntroller::class);
       Route::resource('post',PostController::class);
       Route::resource('comment',AdminCommentController::class);
       Route::resource('project',ProjectController::class);
       Route::resource('offer',OffersController::class);
});

Route::get('about', [siteController::class, 'about'])->name('about');
Route::get('blog', [siteController::class, 'blog'])->name('blog');
Route::get('singleBlog', [siteController::class, 'singleBlog'])->name('singleBlog');
Route::post('comment', [CommentController::class , 'store'])->name('comment');
Route::get('/', [siteController::class , 'index'])->name('home');
Route::get('project', [siteController::class , 'project'])->name('project');
Route::get('offer', [siteController::class , 'offer'])->name('offer');
Route::get('contact', [siteController::class , 'contact'])->name('contact');















