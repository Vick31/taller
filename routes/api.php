<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use App\Http\Controllers\api\NewPasswordController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/user', [AuthController::class, 'user']);
});

Route::post('forgot-password', [NewPasswordController::class, 'ForgotPassword']);

Route::post('reset-password', [NewPasswordController::class, 'reset']);

Route::resource('/articles', ArticleController::class);

Route::resource('/companies', CompanyController::class);
Route::post('/company-articles/{id}', [CompanyController::class, 'companyArticles']);
