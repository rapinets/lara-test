<?php

Auth::routes();

Route::get('/', function (){
    return redirect()->route('post.index');
})->name('main');

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/blog')->namespace('Blog')->group(function (){
    Route::get('/', "PostController@index")->name('post.index');
    Route::get('/{post}', "PostController@show")->name('post.show');
});

Route::prefix('/admin')->name('admin')->namespace('Admin')->middleware(['admin'])->group(function (){
    Route::namespace('Blog')->group(function (){
        Route::get('/', "PostController@index")->name('.post.index');
        Route::post('/', "PostController@store")->name('.post.store');
        Route::get('/create', "PostController@create")->name('.post.create');
        Route::get('/{post}/edit', "PostController@edit")->name('.post.edit');
        Route::patch('/{post}/update', "PostController@update")->name('.post.update');
        Route::delete('/{post}/delete', "PostController@destroy")->name('.post.delete');
    });
});

Route::get('/template', function (){

    return view('test-view.template');
});


