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

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;






Route::get('/', [LoginController::class, 'login']);
Route::post('/dang-nhap', [LoginController::class, 'loginUser'])->name('dang-nhap');
Route::get('/dang-ki', [LoginController::class, 'register'])->middleware('alreadyLoggedIn');
// Route::get('/dang-ki', [LoginController::class, 'register']);
Route::post('/register-user', [LoginController::class, 'registerUser'])->name('register-user');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['isLoggedIn'])->group(function () {

    Route::get('/homepage', function () { // Trang chu
        return view('index');
    });
});
