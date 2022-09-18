<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutPage;
use App\Http\Livewire\Frontend\ContactPage;
use App\Http\Livewire\Frontend\InvestmentPage;
use App\Http\Livewire\Frontend\AffilatePage;
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
Route::get('/Authentication/LoginForm', LoginForm::class);
Route::get('/Authentication/Registeration', RegisterForm::class);

Route::get('/Authorized/User-Dashboard', Dashboard::class);
Route::get('/Authorized/User-Settings', UserSettings::class);
Route::get('/Authorized/User-History', UserHistory::class);
Route::get('/Authorized/User-Wallet', UserWallets::class);
Route::get('/Authorized/User-Deposit', UserDeposit::class);
Route::get('/Authorized/User-Withdrawal', UserWithdrawal::class);
Route::get('/Authorized/User-Investment', UserInvestment::class);
Route::get('/Authorized/User-Affilates', UserAffilates::class);