<?php
 
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
*/
  
Route::get('/employees', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('settings')->middleware('roles:1');
Route::get('/management', [App\Http\Controllers\AdminController::class, 'management'])->name('management')->middleware('roles:1');





Route::get('/employee/{id}', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile')->middleware('roles:1,2');
Route::post('/update_user', [App\Http\Controllers\AdminController::class, 'update_user'])->name('update_user')->middleware('roles:1,2');
Route::post('/delete_user', [App\Http\Controllers\AdminController::class, 'delete_user'])->name('delete_user')->middleware('roles:1');






Route::get('/msg/{user_id}', function($user_id){
    $user = \App\Models\User::where('id', $user_id)->first();
  
    $data = [
        'title' => 'New Request',
        'message' => 'New Request from salas Agent',
        'type' => 2,
        'user_id' => $user->id
    ];
    Notification::send($user, new \App\Notifications\RequestNotification($data));
    event(new \App\Events\NewRequest('hello world',$data));

    return 'New Request sent';
 });
 
 
Auth::routes(); 
Auth::routes(['register' => false]);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dash', [App\Http\Controllers\AdminController::class, 'dash'])->name('dash');

Route::get('/deleteuserlog{id}', [App\Http\Controllers\AdminController::class, 'deleteuserlog'])->name('deleteuserlog');



























Route::get('crop-image-upload',[App\Http\Controllers\AdminController::class, 'imgcrop'] );
Route::post('crop-image-upload',[App\Http\Controllers\AdminController::class, 'uploadCropImage'] );
Route::post('crop-image-upload_port',[App\Http\Controllers\AdminController::class, 'uploadCropImage_port'] );
Route::post('crop-image-upload_team',[App\Http\Controllers\AdminController::class, 'uploadCropImage_team'] );


























////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/hme', [App\Http\Controllers\AdminController::class, 'hme'])->name('hme')->middleware('roles:1');
Route::get('/addhme', [App\Http\Controllers\AdminController::class, 'addhme'])->name('addhme')->middleware('roles:1');
Route::post('/deletehme', [App\Http\Controllers\AdminController::class, 'deletehme'])->name('deletehme')->middleware('roles:1');
Route::post('/inserthme', [App\Http\Controllers\AdminController::class, 'inserthme'])->name('inserthme')->middleware('roles:1');
Route::post('/edithme', [App\Http\Controllers\AdminController::class, 'edithme'])->name('edithme')->middleware('roles:1');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/service', [App\Http\Controllers\AdminController::class, 'service'])->name('service')->middleware('roles:1');
Route::post('/addservice', [App\Http\Controllers\AdminController::class, 'addservice'])->name('addservice')->middleware('roles:1');
Route::post('/deleteservice', [App\Http\Controllers\AdminController::class, 'deleteservice'])->name('deleteservice')->middleware('roles:1');
Route::post('/insertservice', [App\Http\Controllers\AdminController::class, 'insertservice'])->name('insertservice')->middleware('roles:1');
Route::post('/editservices', [App\Http\Controllers\AdminController::class, 'editservices'])->name('editservices')->middleware('roles:1');
Route::post('/editservice', [App\Http\Controllers\AdminController::class, 'editservice'])->name('editservice')->middleware('roles:1');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/portfolio', [App\Http\Controllers\AdminController::class, 'portfolio'])->name('portfolio')->middleware('roles:1');
Route::post('/addportfolio', [App\Http\Controllers\AdminController::class, 'addportfolio'])->name('addportfolio')->middleware('roles:1');
Route::post('/editportfolio', [App\Http\Controllers\AdminController::class, 'editportfolio'])->name('editportfolio')->middleware('roles:1');
Route::post('/deleteportfolio', [App\Http\Controllers\AdminController::class, 'deleteportfolio'])->name('deleteportfolio')->middleware('roles:1');


Route::post('/deleteview', [App\Http\Controllers\AdminController::class, 'deleteview'])->name('deleteview')->middleware('roles:1');
Route::post('/insertview', [App\Http\Controllers\AdminController::class, 'insertview'])->name('insertview')->middleware('roles:1');
Route::post('/editview', [App\Http\Controllers\AdminController::class, 'editview'])->name('editview')->middleware('roles:1');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/team', [App\Http\Controllers\AdminController::class, 'team'])->name('team')->middleware('roles:1');
Route::get('/addteam', [App\Http\Controllers\AdminController::class, 'addteam'])->name('addteam')->middleware('roles:1');
Route::post('/deleteteam', [App\Http\Controllers\AdminController::class, 'deleteteam'])->name('deleteteam')->middleware('roles:1');
Route::post('/insertteam', [App\Http\Controllers\AdminController::class, 'insertteam'])->name('insertteam')->middleware('roles:1');
Route::post('/editteam', [App\Http\Controllers\AdminController::class, 'editteam'])->name('editteam')->middleware('roles:1');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/contactus', [App\Http\Controllers\AdminController::class, 'contactus'])->name('contactus')->middleware('roles:1');
Route::get('/addgateway', [App\Http\Controllers\AdminController::class, 'addgateway'])->name('addgateway')->middleware('roles:1');
Route::post('/deletegateway', [App\Http\Controllers\AdminController::class, 'deletegateway'])->name('deletegateway')->middleware('roles:1');
Route::post('/insertgateway', [App\Http\Controllers\AdminController::class, 'insertgateway'])->name('insertgateway')->middleware('roles:1');
Route::post('/editcontactus', [App\Http\Controllers\AdminController::class, 'editcontactus'])->name('editcontactus')->middleware('roles:1');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('about')->middleware('roles:1');
Route::get('/addabout', [App\Http\Controllers\AdminController::class, 'addabout'])->name('addabout')->middleware('roles:1');
Route::post('/deleteabout', [App\Http\Controllers\AdminController::class, 'deleteabout'])->name('deleteabout')->middleware('roles:1');
Route::post('/insertabout', [App\Http\Controllers\AdminController::class, 'insertabout'])->name('insertabout')->middleware('roles:1');

Route::post('/editabout_l', [App\Http\Controllers\AdminController::class, 'editabout_l'])->name('editabout_l')->middleware('roles:1');
Route::post('/editabout_r', [App\Http\Controllers\AdminController::class, 'editabout_r'])->name('editabout_r')->middleware('roles:1');

Route::post('/editabout_bottom', [App\Http\Controllers\AdminController::class, 'editabout_bottom'])->name('editabout_bottom')->middleware('roles:1');
Route::post('/editabout_bottom_questions', [App\Http\Controllers\AdminController::class, 'editabout_bottom_questions'])->name('editabout_bottom_questions')->middleware('roles:1');



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
Route::get('/excursions', [App\Http\Controllers\AdminController::class, 'excursions'])->name('excursions')->middleware('roles:1');
Route::get('/addexcursion', [App\Http\Controllers\AdminController::class, 'addexcursion'])->name('addexcursion')->middleware('roles:1');
Route::post('/deleteexcursion', [App\Http\Controllers\AdminController::class, 'deleteexcursion'])->name('deleteexcursion')->middleware('roles:1');
Route::post('/insertexcursion', [App\Http\Controllers\AdminController::class, 'insertexcursion'])->name('insertexcursion')->middleware('roles:1');
Route::post('/editexcursion', [App\Http\Controllers\AdminController::class, 'editexcursion'])->name('editexcursion')->middleware('roles:1');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 