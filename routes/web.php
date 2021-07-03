<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile_update',function ()
{
   return view('user.profile_update'); 
});

Route::post('/profile_update',function ()
{
    request()->validate([
        'first_name' => ['required', 'string', 'max:10'],
        'last_name' => ['required', 'string', 'max:10'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::id()],
        'mobile' => ['required', 'digits:10'],
        'avatar' => ['image'],
    ]);
    $user = User::findOrFail(Auth::id());
    if(request('avatar')):
        Storage::delete('public/user/avatar/'.$user->avatar);
        $avatar = request('avatar')->hashName();
        request('avatar')->store('public/user/avatar/');
    else:
        $avatar = $user->avatar;
    endif;
    $user->first_name = request('first_name');
    $user->last_name = request('last_name');
    $user->mobile = request('mobile');
    $user->email = request('email');
    $user->avatar = $avatar;
    $user->save();
    return redirect('home')->with('success','Profile Updated Successfully');

});

Route::post('update_password',function ()
{
    request()->validate([
        'old_password' => ['required'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $user = User::findOrfail(Auth::id());
    if (Hash::check(request('old_password'), $user->password)) {
        $user->password = Hash::make(request('password'));
        $user->save();
        return redirect('home')->with('success','Password Changed Successfully');
    }else{
        return redirect('profile_update')->with('error','Current Password Does not match');
    };
});

Route::resource('subject', SubjectController::class);
