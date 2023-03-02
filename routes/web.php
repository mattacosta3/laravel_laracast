<?php


use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\NewsletterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\Newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
Route::get('/laravel', function () {

    return view('laravel');
});

Route::post('/newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show', ])->name('post');
Route::post('post/{post:slug}/comments', [PostCommentController::class, 'store']);

    // Register, Login, Logout routes
Route::get('/register', [RegisterController::class , 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class , 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/post/admin/create', [PostController::class, 'create'])->middleware('admin');

// Route::get('/register', RegisterController::class);

// Route::get('category/{category:slug}', function (Category $category) {
//     return view('homepage', [
//         'posts'=> $category->post,
//         'category' => Category::all(),
//         'currentCategory' => $category
//     ]);
// })->name('category');

// Route::get('author/{user:username}', function (User $user) {
//     return view('homepage', [
//         'posts'=> $user->post,
//         'category' => Category::all(),
//     ]);
// });