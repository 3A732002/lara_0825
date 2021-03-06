<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
//    Post::create([
//        'title'=>'test title',
//        'content'=>'test content',
//        'age'=>'test age'
//    ]);

//    $post = new Post();
//    $post->title='test title';
//    $post->content='test content';
//    $post->age='test age';
//    $post->save();

//    $posts=Post::all();
//    dd($posts);

//    $post=Post::find(1);
//    dd($post);

//    $posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
//    dd($posts);

//    $post=Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content',
//        'age'=>'updated age'
//    ]);

//    $post=Post::find(2);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->age='saved age';
//    $post->save();

//    $post=Post::find(1);
//    $post->delete();

//    Post::destroy(2);

//    Post::destroy(3,5,7);

//    $allPosts=Post::all();
//    dd($allPosts);

//    $featuredPosts=Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//    $fourthPost=Post::find(4);
//    dd($fourthPost);

//    $lastPost=Post::orderBy('id','DESC')->first();
//    dd($lastPost);

    $post=\App\Models\Post::find(6);
    foreach($post->comments as $comment){
        echo$comment->content.'<br>';
    }



});

Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
Route::get('/post',[PostsController::class,'show'])->name('posts.show');
Route::get('/about',[PostsController::class,'about'])->name('posts.about');
Route::get('/contact',[PostsController::class,'contact'])->name('posts.contact');

