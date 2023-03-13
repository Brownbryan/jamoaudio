<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\LogoutComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponent::class);
Route::get('/checkout',CheckoutComponent::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('user.dashboard');
// })->name('dashboard');

// Route for Users page and Admins
Route::middleware(['auth:sanctum',' verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//Route page for Admin Only
Route::middleware(['auth:sanctum','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});

// Logout

