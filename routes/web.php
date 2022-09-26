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

Route::get('/', function () { return view('index');});

Auth::routes();
// Route::get('/comsignup', function () {
//         return view('comsignup');
//     });
Route::get('comsignup',[App\Http\Controllers\Auth\ComRegisterController::class, 'index']);
Route::post('comsignup',[App\Http\Controllers\Auth\ComRegisterController::class, 'create'])->name('comsignup.create');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/

    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/service', function () {
        return view('service');
    });
    Route::get('/service-details', function () {
        return view('service-details');
    });
    
    Route::get('/privacy', function () {
        return view('privacy');
    });
    Route::get('/whosignup', function () {
        return view('whosignup');
    });
    
    Route::get('price', function() { 
        return redirect('/'); 
    });
    Route::post('priceIndex',[App\Http\Controllers\PriceController::class, 'index'])->name('price.index');
    

    Route::get('/invoice', function () {
        return view('invoice');
    });

    Route::get('repair', function () {
        $locations = DB::table('users')->where(['type'=>'2'])->groupBy('location')->get();
        $services = DB::table('services')->get();
        return view('repair', ['locations' => $locations, 'services' => $services]);
    });

    Route::get('purchase', function () {
        $locations = DB::table('users')->where(['type'=>'2'])->groupBy('location')->get();
        return view('purchase', ['locations' => $locations]);
    });
    
    Route::get('transport', [App\Http\Controllers\TransportController::class, 'index']);

    Route::get('sendMail', [App\Http\Controllers\MailController::class, 'index']);

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::post('priceCreate',[App\Http\Controllers\PriceController::class, 'create'])->name('price.create');

    Route::post('repair',[App\Http\Controllers\RepairController::class, 'store'])->name('repair.store');
    Route::get('repairConfirm', function () { return view('repairConfirm');})->name('repairConfirm');
    
    Route::post('purchase',[App\Http\Controllers\PurchaseController::class, 'store'])->name('purchase.store');
    Route::get('purchaseConfirm', function () { return view('purchaseConfirm');})->name('purchaseConfirm');

    Route::post('transport',[App\Http\Controllers\TransportController::class, 'store'])->name('transport.store');
    Route::get('transportConfirm', function () { return view('transportConfirm');})->name('transportConfirm');

    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
    Route::get('quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('quote');
    Route::get('pastQuote', [App\Http\Controllers\QuoteController::class, 'past'])->name('pastQuote');
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::post('edit-profile/name',[App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');
    Route::post('edit-profile/password',[App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::resource('admin/adminDashboard', App\Http\Controllers\Admin\AdminDashboardController::class);
    Route::resource('admin/adminRequest', App\Http\Controllers\Admin\AdminRequestController::class);
    Route::resource('admin/adminComRequest', App\Http\Controllers\Admin\AdminComRequestController::class);
    Route::resource('admin/adminUser', App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('admin/adminCompany', App\Http\Controllers\Admin\AdminCompanyController::class);
    Route::resource('admin/adminNewUser', App\Http\Controllers\Admin\AdminNewUserController::class);
    Route::resource('admin/adminLocation', App\Http\Controllers\Admin\AdminLocationController::class);
    Route::resource('admin/adminService', App\Http\Controllers\Admin\AdminServiceController::class);
    Route::resource('admin/adminCost', App\Http\Controllers\Admin\AdminCostController::class);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:company'])->group(function () {
    Route::post('priceCreate',[App\Http\Controllers\PriceController::class, 'create'])->name('price.create');

    Route::get('/company/companyDashboard', [App\Http\Controllers\company\CompanyDashboardController::class, 'index'])->name('company.companyDashboard');
    Route::get('/company/companyQuote', [App\Http\Controllers\company\CompanyQuoteController::class, 'index'])->name('company.companyQuote');
    Route::get('/company/companyPastQuote', [App\Http\Controllers\company\CompanyQuoteController::class, 'past'])->name('company.companyPastQuote');
    Route::get('/company/companyBooking', [App\Http\Controllers\company\CompanyBookingController::class, 'index'])->name('company.companyBooking');
    Route::get('/company/companyProfile', [App\Http\Controllers\company\CompanyProfileController::class, 'index'])->name('company.companyProfile');
    Route::post('/company/edit-profile/name',[App\Http\Controllers\company\CompanyProfileController::class, 'store'])->name('companyProfile.store');
    Route::post('/company/edit-profile/password',[App\Http\Controllers\company\CompanyProfileController::class, 'password'])->name('companyProfile.password');
});
  
