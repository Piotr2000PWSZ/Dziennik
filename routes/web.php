<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::redirect('/', '/login');
Route::get('/home', function () {
    $routeName = auth()->user() && (auth()->user()->is_student || auth()->user()->is_teacher) ? 'admin.calendar.index' : 'admin.home'; 
    if (session('status')) {
        return redirect()->route($routeName)->with('status', session('status'));
    }

    return redirect()->route($routeName);
});


Auth::routes(['register' => false]);
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Uprawnienia
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Role
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Użytkownicy
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Lekcje
    Route::delete('lessons/destroy', 'LessonsController@massDestroy')->name('lessons.massDestroy');
    Route::resource('lessons', 'LessonsController');

    // Klasy szkolne
    Route::delete('school-classes/destroy', 'SchoolClassesController@massDestroy')->name('school-classes.massDestroy');
    Route::resource('school-classes', 'SchoolClassesController');

    Route::get('calendar', 'CalendarController@index')->name('calendar.index');

    // Obecność
    //Route::get('attendance', 'AttendanceController');

    Route::resource('attendance', 'AttendanceController' );

    // Route::get('/insert', 'AttendanceController@insert');
    // Route::get('/edit', 'AttendanceController@edit');
    // Route::get('/read', 'AttendanceController@read');
    // Route::get('/delete', 'AttendanceController@delete');

    //Ogłoszenia

    Route::resource('ogloszenia', 'OgloszeniaController');

    Route::get('/insert', 'InsertController@index')->name('sform');
    Route::post('/create', 'InsertController@store')->name('form create');

    //Oceny

    Route::resource('oceny', 'OcenyController');
    
});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
























/*
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


/*Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Lessons
    Route::delete('lessons/destroy', 'LessonsController@massDestroy')->name('lessons.massDestroy');
    Route::resource('lessons', 'LessonsController');

    // School Classes
    Route::delete('school-classes/destroy', 'SchoolClassesController@massDestroy')->name('school-classes.massDestroy');
    Route::resource('school-classes', 'SchoolClassesController');

    Route::get('calendar', 'CalendarController@index')->name('calendar.index');
}); */
