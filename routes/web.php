<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
   return view ('welcome');
});

Route::get('hello', function () {
    return ('Hello World');
 });

Route::get('/world', function () {
    return ('World');
});

Route::get('/', function () {
    return ('Welcome');
});

Route::get('/about/name', function () {
    return ('Hello my Name is Azkiya, and my nim is 2341760175');
});

Route::get('/user/{name}/{nim}', function ($name,$nim) {
    return ('My name is '.$name.' and my student number is '.$nim);
});

Route::get('/user/{Azkiya}', function ($name) { 
    return 'My name is '.$name; 
}); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/articles/{id}', function 
($id) { 
    return 'Halaman Artikel dengan ID '.$id; 
});