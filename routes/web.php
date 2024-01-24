<?php


use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::get('/templates', function () {
    return view('tailwindtemplates');
});

Route::post('/newsletter', [NewsletterController::class, '__invoke']);

// Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show', ])->name('post');
Route::post('post/{post:slug}/comments', [PostCommentController::class, 'store']);

    // Register, Login, Logout routes
Route::get('/register', [RegisterController::class , 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class , 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
    // Route::get('admin/posts', [AdminPostController::class, 'index']);
    // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    // Route::post('admin/posts', [AdminPostController::class, 'store']);
    // Route::get('admin/posts/{post:id}/edit', [AdminPostController::class, 'edit']);
    // Route::patch('admin/posts/{post:id}', [AdminPostController::class, 'update']);
    // Route::delete('admin/posts/{post:id}', [AdminPostController::class, 'destroy']);

});



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