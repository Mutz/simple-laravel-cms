<?php


Route::get('test', function() {
	// dd(Category::find(1)->articles);
	dd(Category::getTitleByCategoryId(1));
});



Route::get('/', 'WebsiteController@home');
Route::get('/contato', 'WebsiteController@contact');
		// ->before('cache.fetch')
		// ->after('cache.put');
    // Route::resource('category.article', 'WebsiteController');

Route::group(array('prefix' => 'dashboard'), function()
{
    Route::resource('category.article', 'ArticlesController');
});

// Route::group(array('before' => 'auth'), function()
//     {
        \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
        \Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');
    // });


Route::get('/{category}/{article}', 'WebsiteController@article');
Route::get('/{category}', 'WebsiteController@index');

Route::resource('users', 'UsersController');


/*==============================================
=            Bindings and Listeners            =
==============================================*/

App::bind('Casadepedra\Interfaces\ArticleInterface','Casadepedra\Repositories\EloquentArticle');
App::bind('Casadepedra\Interfaces\CategoryInterface','Casadepedra\Repositories\EloquentCategory');

// Event::listen('illuminate.query', function ($sql, $bindings, $times) {
// 	var_dump($sql);
// 	var_dump($bindings);
// });

/*-----  End of Bindings and Listeners  ------*/



/*===========================
=            API            =
===========================*/

// Route::post('api/fileupload', function()
// {
//     // Grab our files input
//     $files = Input::file('files');
//     // We will store our uploads in public/uploads/basic
//     $assetPath = '/uploads';
//     $uploadPath = public_path($assetPath);
//     // We need an empty array for us to put the files back into
//     $results = array();

//     foreach ($files as $file) {
//         // store our uploaded file in our uploads folder
//         $file->move($uploadPath, $file->getClientOriginalName());
//         // set our results to have our asset path
//         $name = $assetPath . '/' . $file->getClientOriginalName();
//         $results[] = compact('name');
//     }

//     // return our results in a files object
//     return array(
//         'files' => $results
//     );
// });

/*-----  End of API  ------*/


