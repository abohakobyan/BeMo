<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Pages;
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
Route::group(array('before' => 'auth.basic'), function()
{
Route::get('/', 'IndexController@show');

Route::get('contact-us', 'ContactController@show');

Route::get('home-edit', 'HomeEditorController@show');
# vagrant up, vagrant ssh
Route::get('index', function(){
    $page = Pages::find('2');
    return view('home2', [
        'logosrc' => 'bemo-logo2.png',
        'backgroundsrc' => 'cda-interview-guide.jpg'
    ])->withPage($page);
})
->middleware('auth');

Route::get('contact-us', function(){
    $page = Pages::find('3');
    return view('contact-us2', [
        'logosrc' => 'bemo-logo2.png',
        'backgroundsrc' => 'contact-us.png'
    ])->withPage($page);
})->middleware('auth');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::get('/admin', function(){
    $pages = Pages::all();
    return view('admin')->withPages($pages);
})
    ->middleware('is_admin')
    ->middleware('auth');
Route::get('/changePageIndex/{pageid}', 'PageController@changePageIndex');

Route::resource('pages', 'PageController');
});















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
