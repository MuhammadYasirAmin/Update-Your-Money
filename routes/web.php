<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutPage;
use App\Http\Livewire\Frontend\ContactPage;
use App\Http\Livewire\Frontend\InvestmentPage;
use App\Http\Livewire\Frontend\AffilatePage;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Livewire\Auth\LoginForm;
use App\Http\Livewire\Auth\RegisterForm;

use App\Http\Livewire\Authorize\Dashboard;
use App\Http\Livewire\Authorize\UserSettings;
use App\Http\Livewire\Authorize\UserHistory;
use App\Http\Livewire\Authorize\UserWallets;
use App\Http\Livewire\Authorize\UserDeposit;
use App\Http\Livewire\Authorize\UserWithdrawal;
use App\Http\Livewire\Authorize\UserInvestment;
use App\Http\Livewire\Authorize\UserAffilates;

use App\Http\Livewire\Backend\AdminDashboard;
use App\Http\Livewire\Backend\InvestmentPlan;

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

Route::get('/', HomePage::class);
Route::get('/About-Us', AboutPage::class);
Route::get('/Support/Contact-Us', ContactPage::class);
Route::get('/Investment-Plan', InvestmentPage::class);
Route::get('/Referal-Program', AffilatePage::class);

Route::get('/Authentication/LoginForm', LoginForm::class)->name('login');

Route::post('/Authentication/LoginForm/Login-Submit', [
    AuthController::class,
    'loginSubmit',
])->name('login.post');

Route::get('/Authentication/Registeration', RegisterForm::class)->name(
    'register'
);

Route::post('/Authentication/Registeration/Register-Submit', [
    AuthController::class,
    'registerSubmit',
])->name('register.post');

Route::get('/{UserId}/{UserName}/Authentication/Registeration', RegisterForm::class)->name(
    'user.Referal'
);

Route::post('/{UserId}/{UserName}/Authentication/Registeration/Register-Submit', [
    AuthController::class,
    'referalRegisterSubmit',
])->name('referal.register.post');


// Route::get('/Authentication/LogOut', [AuthController::class, 'logout'])->name(
//     'logout'
// );

Route::get('account/verify/{token}', [
    AuthController::class,
    'verifyAccount',
])->name('user.verify');

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/Authorized/User-Dashboard', Dashboard::class)->name(
//         'User.Dashboard'
//     );
//     Route::get('/Authorized/User-Settings', UserSettings::class);
//     Route::get('/Authorized/User-History', UserHistory::class);
//     Route::get('/Authorized/User-Wallet', UserWallets::class);
//     Route::get('/Authorized/User-Deposit', UserDeposit::class);
//     Route::get('/Authorized/User-Withdrawal', UserWithdrawal::class);
//     Route::get('/Authorized/User-Investment', UserInvestment::class);
//     Route::get('/Authorized/User-Affilates', UserAffilates::class);
// });

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/Authorized/Admin-Dashboard', AdminDashboard::class)->name(
        'Admin.Dashboard'
    );

    Route::get('/Authorized/Admin-Investment-Plan-Add', InvestmentPlan::class)->name(
        'Admin.Investment'
    );

    Route::post('/Authorized/Admin-Investment-Plan-Add', [InvestmentPlan::class, 'submitPlans'])->name(
        'Admin.Investment.Post'
    );
});

// For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/Authorized/User-Dashboard', Dashboard::class)->name(
        'User.Dashboard'
    );
    Route::get('/Authorized/User-Settings', UserSettings::class);
    Route::get('/Authorized/User-History', UserHistory::class);
    Route::get('/Authorized/User-Wallet', UserWallets::class);
    Route::get('/Authorized/User-Deposit', UserDeposit::class);
    Route::post('/Authorized/User-Deposit', [UserDeposit::class, 'UserDeposit'])->name('User.Deposit');
    Route::get('/Authorized/User-Withdrawal', UserWithdrawal::class);
    Route::get('/Authorized/User-Investment', UserInvestment::class);
    Route::get('/Authorized/User-Affilates', UserAffilates::class);
});
