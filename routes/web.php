<?php

use Illuminate\Support\Facades\Route;

// Model imports
use App\Models\Post;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Tag;

// Controller imports
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function() {
//     return 'Hi There this is the about route';
// });

// Route::get('/contact', function() {
//     return 'Hi Im contact';
// });


// Route::get('/post/{id}/{name}', function($id, $name) {
//     return "This is post number " . $id . " " . $name;
// });

// Give a "nickname" to the route name 
// Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
//     $url = route('admin.home');

//     return "this url is " . $url; 
// }));


// Route::get('/post/{id}', '\App\Http\Controllers\PostController@index');

// Route::resource('posts', '\App\Http\Controllers\PostController');


// Route::get('/contact', '\App\Http\Controllers\PostController@contact');
Route::get('/contact', [PostController::class, 'contact']);


Route::get('post/{id}/{name}/{pass}', [PostController::class, 'show_post']);


/*
|--------------------------------------------------------------------------
| Database raw SQL Queries
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){

//   // DB::insert('INSERT INTO posts(title, body) VALUES(:title, :body)', [
//   //   'title' => 'PHP with Laravel 2',
//   //   'body' => 'Laravel is the best thing that has happened to PHP 2']);

//   DB::insert('INSERT INTO posts(title, body) VALUES(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);

// });

// Route::get('/read', function(){

//   $results = DB::select('SELECT * FROM posts WHERE id = ?', [1]);

//   foreach($results as $post){
//     return $post->title;
//   }

// });

// Route::get('/update', function(){

//   $updated = DB::update('UPDATE POSTS SET title="Update title" WHERE id = ?', [1]);

//   return $updated;

// });

// Route::get('/delete', function(){

//   $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

//   return $deleted;

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){

//   $posts = Post::all();

//   foreach($posts as $post){
//     return $post->title;
//   }

// });

// Route::get('/find', function(){

//     $post = Post::find(3);

//     return $post->title;
// });


// Route::get('/findwhere', function(){

//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

//   return $posts;

// });

// Route::get('/findmore', function(){

//   $posts = Post::findOrFail(3);
//   return $posts;

//   $posts = Post::where('users_count', '<', 50)->firstOrFail();

// });


// Route::get('/basicinsert', function(){

//   $post = new Post;

//   $post->title = 'New Eloquent title 3';
//   $post->body = 'Wow Eliquent is really cool, look at this content 3';
//   // $post->is_admin = '1';

//   $post->save();

// });



// Route::get('/basicinsert2', function(){

//   // Update record with save() method
//   $post = Post::find(7);

//   $post->title = 'Updated - New Eloquent title 3';
//   $post->body = 'Updated - Wow Eliquent is really cool, look at this content 3';
//   // $post->is_admin = '1';

//   $post->save();

// });

// Route::get('/create', function() {

//   Post::create(['title'=>'The create method', 'body'=>'WOW I\'am learning alot with PHP with Edwin Diaz']);

// });

// Route::get('/update', function() {

//   Post::where('id', 4)->where('is_admin', 0)->update(['title'=>'New PHP title', 'body'=>'I love my PHP course! :)']);


// });

// Route::get('/delete', function() {

//   $post = Post::find(10);

//   $post->delete();

// });

// Route::get('/delete2', function() {

//   Post::destroy([5,9]);

//   // Post::where('id', 5)->delte();

// });

// Route::get('/softdelete', function() {

//   Post::find(8)->delete();

// });

// Route::get('/readsoftdelete', function() {

//   // $post = Post::find(8);

//   // return $post;

//   // To read soft deleted data
//   $post = Post::withTrashed()->where('is_admin', 0)->get();

//   return $post;

//   // $post = Post::onlyTrashed()->where('is_admin', 0)->get();

//   // return $post;

// });

// Route::get('/restore', function() {

//   Post::withTrashed()->where('is_admin', 0)->restore();

// });

// Route::get('/forcedelete', function() {

//   Post::withTrashed()->whereNotNull('deleted_at')->forceDelete();
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

// // One to One relationship
// Route::get('/user/{id}/post', function($id) {

//   return User::find($id)->post->title;

// });

// Route::get('/post/{id}/user', function($id) {

//   return Post::find($id)->user->name;

// });

// -----------------------------------
// One To Many relationship

// Route::get('/posts', function() {

//   $user = User::find(1);

//   foreach($user->posts as $post) {

//     echo $post->title . "<br>";
//   }

// });


//--------------------------
// Many To Many relationship
//--------------------------
// Route::get('/user/{id}/role', function($id) {

//   $user = User::find($id)->roles()->orderBy('name', 'desc')->get();

//   return $user;
  
//   // foreach($user->roles as $role) {

//   //   return $role->name;

//   // }  

// });

//-----------------------------------------
// Accessing the intermediate table / pivot
//-----------------------------------------

// Route::get('/user/pivot', function() {

//   $user = User::find(1);

//   foreach($user->roles as $role) {

//     echo $role->pivot->created_at;
    
//   }

// });

// Route::get('/user/country', function() {

//   $counrty = Country::find(1);

//   foreach($counrty->posts as $post) {

//     return $post->title;

//   }

// });

/*
-----------------------------------------
 Polymorphic relations
-----------------------------------------
*/

// Route::get('/user/photos', function() {

//   $user = User::find(1);

//   foreach($user->photos as $photo) {
//     return $photo->path;
//   }

// });

// Route::get('/post/{id}/photos', function($id) {

//   $post = Post::find($id);

//   foreach($post->photos as $photo) {

//       echo $photo->path . "<br>";

//     }
// });

// Route::get('/photo/{id}/post', function($id) {

//   $photo = Photo::findOrFail($id);

//   return $photo->imageable;

// });


/*
-----------------------------------------
 Polymorphic Many to Many relations
-----------------------------------------
*/
// Route::get('/post/tag', function() {

//   $post = Post::find(1);

//   foreach($post->tags as $tag) {
//     echo $tag->name;
//   }

// });

// Route::get('/tag/post', function() {

//   $tag = Tag::find(2);

//   foreach($tag->posts as $post) {

//     return $post->title;
  
//   }

// });

/*
|-----------------------------------------
|CRUD Application
|-----------------------------------------
*/

Route::group(['middleware'=>'web'], function() {
  
  Route::resource('/posts', '\App\Http\Controllers\PostController');


});