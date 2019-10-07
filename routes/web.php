<?php

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

Route::get('/', 'CoursecatrgoriesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contents', 'ContentsController');
Route::get('/edit_content/{id}', 'ContentsController@edit_content')->name('edit_content');
Route::get('/delete_content/{id}', 'ContentsController@delete_content')->name('delete_content');

Route::resource('coursecategories', 'CoursecatrgoriesController');

Route::get('/admin_area', 'ContentsController@publish_contents')->name('admin_area');

Route::get('/edit_ccategories', 'CoursecatrgoriesController@edit_ccategories')->name('edit_ccategories');

Route::resource('syllabus', 'SyllabusController');

Route::get('/new_coursecontent/{id}', 'SyllabusController@new_coursecontent')->name('new_coursecontent');

Route::get('/edit_courses', 'CoursecatrgoriesController@edit_courses')->name('edit_courses');

Route::put('/updatecourse/{id}', 'CoursecatrgoriesController@updatecourse')->name('updatecourse');

Route::get('/publish_contents', 'ContentsController@publish_contents')->name('publish_contents');

Route::get('/edit_coursecategory/{id}', 'CoursecatrgoriesController@edit_coursecategory')->name('edit_coursecategory');

Route::get('/edit_course/{id}', 'CoursecatrgoriesController@edit_course')->name('edit_course');

Route::get('/coursegroup/{courseid}/{type}/{coursename}','CoursecatrgoriesController@coursegroup');

Route::get('/sc/{subjectid}','CoursecatrgoriesController@course');

Route::post('registercourse','CoursecatrgoriesController@registercourse')->name('registercourse');

Route::get('/sendnotice/{email}','CoursecatrgoriesController@sendnotice')->name('sendnotice');

Route::post('savenotice','CoursecatrgoriesController@savenotice')->name('savenotice');

Route::get('/notifications','CoursecatrgoriesController@notifications')->name('notifications');

Route::get('/sendclist/{id}/{coursename}','CoursecatrgoriesController@sendlurl');
Route::post('/sendlist','CoursecatrgoriesController@sendlist')->name('sendlist');

Route::post('subscribe','CoursecatrgoriesController@subscribe')->name('subscribe');

Route::post('newsletter','CoursecatrgoriesController@newsletter')->name('newsletter');
Route::post('contactmail','CoursecatrgoriesController@contactmail')->name('contactmail');

Route::get('/sendcc/{id}/{subjectname}','CoursecatrgoriesController@sendcurl');
// Route::post('/sendcc','CoursecatrgoriesController@sendcc')->name('sendcc');
Route::post('/sendcco','CoursecatrgoriesController@sendcco')->name('sendcco');

Route::post('/paycourse/{id}', 'CoursecatrgoriesController@paycourse')->name('paycourse');
Route::get('/deletecourse/{id}', 'CoursecatrgoriesController@deletecourse');
Route::get('/makepayment/{id}/{amount}', 'CoursecatrgoriesController@makepayment');
Route::get('/mycourses', 'CoursecatrgoriesController@mycourses');
Route::get('/mypayments', 'CoursecatrgoriesController@mypayments');

Route::get('/approvereg/{id}', 'CoursecatrgoriesController@approvereg');

Route::get('/lesson/{id}','CoursecatrgoriesController@lesson');
Route::get('/management','CoursecatrgoriesController@management')->name('management');
Route::get('/about','CoursecatrgoriesController@about')->name('about');
Route::get('/gallery','CoursecatrgoriesController@gallery')->name('gallery');
Route::get('/events','CoursecatrgoriesController@events')->name('events');
Route::get('/news','CoursecatrgoriesController@news')->name('news');
Route::get('/resources','CoursecatrgoriesController@resources')->name('resources');
Route::get('/consultancy','CoursecatrgoriesController@consultancy')->name('consultancy');
Route::get('/brochure_nat','CoursecatrgoriesController@brochure_nat')->name('brochure_nat');
Route::get('/brochure_inter','CoursecatrgoriesController@brochure_inter')->name('brochure_inter');
Route::get('/brochure_diploma','CoursecatrgoriesController@brochure_diploma')->name('brochure_diploma');
Route::get('/brochure_cert','CoursecatrgoriesController@brochure_cert')->name('brochure_cert');
Route::get('/post/{id}','ContentsController@post')->name('post');
Route::get('/gpost/{id}','ContentsController@post')->name('gpost');
Route::get('/contact_us','ContentsController@contact_us')->name('contact_us');
Route::get('/social_media','CoursecatrgoriesController@social_media')->name('social_media');
Route::get('/diplomaregs','CoursecatrgoriesController@diplomaregs')->name('diplomaregs');

Route::post('searchcourses','CoursecatrgoriesController@searchcourses')->name('searchcourses');

Route::get('/register', function(){
    return redirect('https://register.coinmac.org');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');    
});

Route::get('/clear-route', function() {
    $exitCode = Artisan::call('route:clear');    
});

Route::get('/migration', function() {
    $exitCode = Artisan::call('migrate');    
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes(['verify' => true]);