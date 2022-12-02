<?php

use App\Http\Controllers\About as AboutController;
use App\Http\Controllers\Dashboard as DashboardController;
use App\Http\Controllers\Home as HomeController;
use App\Http\Controllers\Login as LoginController;
use App\Http\Controllers\Logout as LogoutController;
use App\Http\Controllers\Member as MemberController;
use App\Http\Controllers\Profile as ProfileController;
use App\Http\Controllers\Register as RegisterController;
use App\Http\Controllers\Staff as StaffController;
use App\Http\Controllers\Tool as ToolController;
use App\Http\Controllers\Transaction as TransactionController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');

    Route::group(['middleware' => ['guest']], function()
    {
        Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
        Route::post('/register', [RegisterController::class, 'perform'])->name('register.perform');

        Route::get('/login', [LoginController::class, 'show'])->name('login.show');
        Route::post('/login', [LoginController::class, 'perform'])->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function()
    {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // route member
        Route::get('/dashboard/member', [MemberController::class, 'index'])->name('member.index');
        Route::post('/dashboard/member', [MemberController::class, 'store'])->name('member.store');
        Route::get('/dashboard/member/create', [MemberController::class, 'create'])->name('member.create');
        Route::get('/dashboard/member/edit/{member}', [MemberController::class, 'edit'])->name('member.edit');
        Route::get('/dashboard/member/{member}', [MemberController::class, 'show'])->name('member.show');
        Route::put('/dashboard/member/{member}', [MemberController::class, 'update'])->name('member.update');
        Route::delete('/dashboard/member/{member}', [MemberController::class, 'destroy'])->name('member.destroy');

        // route staff
        Route::get('/dashboard/staff', [StaffController::class, 'index'])->name('staff.index');
        Route::post('/dashboard/staff', [StaffController::class, 'store'])->name('staff.store');
        Route::get('/dashboard/staff/create', [StaffController::class, 'create'])->name('staff.create');
        Route::get('/dashboard/staff/edit/{staff}', [StaffController::class, 'edit'])->name('staff.edit');
        Route::get('/dashboard/staff/{staff}', [StaffController::class, 'show'])->name('staff.show');
        Route::put('/dashboard/staff/{staff}', [StaffController::class, 'update'])->name('staff.update');
        Route::delete('/dashboard/staff/{staff}', [StaffController::class, 'destroy'])->name('staff.destroy');

        // route tool
        Route::get('/dashboard/tool', [ToolController::class, 'index'])->name('tool.index');
        Route::post('/dashboard/tool', [ToolController::class, 'store'])->name('tool.store');
        Route::get('/dashboard/tool/create', [ToolController::class, 'create'])->name('tool.create');
        Route::get('/dashboard/tool/edit/{tool}', [ToolController::class, 'edit'])->name('tool.edit');
        Route::get('/dashboard/tool/{tool}', [ToolController::class, 'show'])->name('tool.show');
        Route::put('/dashboard/tool/{tool}', [ToolController::class, 'update'])->name('tool.update');
        Route::delete('/dashboard/tool/{tool}', [ToolController::class, 'destroy'])->name('tool.destroy');

        // route transaction
        Route::get('/dashboard/transaction', [TransactionController::class, 'index'])->name('transaction.index');
        Route::post('/dashboard/transaction', [TransactionController::class, 'store'])->name('transaction.store');
        Route::get('/dashboard/transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
        Route::get('/dashboard/transaction/edit/{transaction}', [TransactionController::class, 'edit'])->name('transaction.edit');
        Route::get('/dashboard/transaction/{transaction}', [TransactionController::class, 'show'])->name('transaction.show');
        Route::put('/dashboard/transaction/{transaction}', [TransactionController::class, 'update'])->name('transaction.update');
        Route::delete('/dashboard/transaction/{transaction}', [TransactionController::class, 'destroy'])->name('transaction.destroy');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    });
});
