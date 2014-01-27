<?php
Route::get('test', function(){

});


/*==============================================
=                    Login                     =
==============================================*/
Route::get('/login', array('before'=>'guest','uses'=>'WebsiteController@login'));
Route::post('/login', array('before'=>'guest','uses'=>'UsersController@login'));

/*-----           End of Login          ------*/




/*==============================================
=                   Dashboard                  =
==============================================*/
Route::group(array('before'=>'auth','prefix' => 'dashboard'), function()
{
    Route::get('/', 'WebsiteController@dashboard');
    Route::resource('category.article', 'ArticlesController');
});

Route::resource('users', 'UsersController');

Route::group(array('before' => 'auth'), function()
{
    \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
    \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
    \Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');
});

/*-----         End of Dashboard        ------*/



/*==============================================
=                    Website                   =
==============================================*/
// Route::group(array('before' => 'cache.fetch','after'=>'cache.put'), function()
// {
    Route::get('/', 'WebsiteController@home');
    Route::get('/{category}/{article}', 'WebsiteController@article');
    Route::get('/{category}', 'WebsiteController@index');
// });
Route::post('/contato', 'WebsiteController@contact');

/*-----         End of Website          ------*/



/*==============================================
=            Bindings and Listeners            =
==============================================*/

App::bind('Casadepedra\Interfaces\ArticleInterface','Casadepedra\Repositories\EloquentArticle');
App::bind('Casadepedra\Interfaces\CategoryInterface','Casadepedra\Repositories\EloquentCategory');


//uncomment when needed
// Event::listen('illuminate.query', function ($sql, $bindings, $times) {
// 	var_dump($sql);
// 	var_dump($bindings);
// });

/*-----  End of Bindings and Listeners  ------*/