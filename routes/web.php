<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\SizesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\ReturnProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoldProductsController;
use App\Http\Controllers\MobileDashboardController;
use App\Http\Controllers\MobileUsersController;
use App\Http\Controllers\MobileProductsController;
use App\Http\Controllers\MobileRequestsController;
use App\Http\Controllers\MobileSoldProductsController;
use App\Http\Controllers\MobileReturnProductsController;
use App\Http\Controllers\CityHallDashboardController;
use App\Http\Controllers\CityHallUsersController;
use App\Http\Controllers\CityHallProductsController;
use App\Http\Controllers\CityHallStocksController;
use App\Http\Controllers\CityHallRequestsController;
use App\Http\Controllers\CityHallSoldProductsController;
use App\Http\Controllers\CityHallReturnProductsController;
use App\Http\Controllers\ADMMobileDashboardController;
use App\Http\Controllers\ADMMobileUsersController;
use App\Http\Controllers\ADMMobileProductsController;
use App\Http\Controllers\ADMMobileRequestsController;
use App\Http\Controllers\ADMMobileSoldProductsController;
use App\Http\Controllers\ADMMobileReturnProductsController;
use App\Http\Controllers\ADMCityHallDashboardController;
use App\Http\Controllers\ADMCityHallUsersController;
use App\Http\Controllers\ADMCityHallProductsController;
use App\Http\Controllers\ADMCityHallRequestsController;
use App\Http\Controllers\ADMCityHallSoldProductsController;
use App\Http\Controllers\ADMCityHallReturnProductsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MobileAboutController;
use App\Http\Controllers\CityHallAboutController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\ActivityLogsController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\OrganizationController;

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

// Route::get('/', function () {
//     return redirect('/login');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return redirect('/login');
});


Route::get('/template', function () {
    return view('layouts.master');
});
Route::get('/2fa', [TwoFactorController::class, 'index'])->name('2fa');
Route::get('/logout', [UsersController::class, 'logout'])->name('users.logout');

Route::middleware(['auth:sanctum'])->group(function(){
    //Redirect
    Route::get('redirects', 'App\Http\Controllers\HomeController@index');

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'MCV'], function () {

            Route::get('/mobileproducts/print', [MobileProductsController::class, 'report'])->name('mobileproductsPrintHistory');

            Route::get('/mobile/dashboard', [MobileDashboardController::class, 'mobileIndex'])->name('mobileDashboard');
            Route::resource('mobileusers', MobileUsersController::class);

            Route::get('mobile/resume/{id}', [MobileUsersController::class, 'show']);
            Route::get('mobile/resume/download/{id}', [MobileUsersController::class, 'download']);

            Route::resource('mobileproducts', MobileProductsController::class);
            Route::get('/mobile/requests', [MobileRequestsController::class, 'request'])->name('mobilerequest');
            Route::post('/mobile/requests', [MobileRequestsController::class, 'stockSubmit'])->name('stockSubmit');
            Route::get('/mobile/requests/history', [MobileRequestsController::class, 'history'])->name('mobilerequestHistory');
            Route::get('/mobile/return-products', [MobileReturnProductsController::class, 'returnProduct'])->name('mobilereturnProduct');
            Route::post('/mobile/return-products', [MobileReturnProductsController::class, 'returnProductSubmit'])->name('returnProductSubmit');
            Route::get('/mobile/return-products/history', [MobileReturnProductsController::class, 'history'])->name('mobilereturnProductHistory');

            Route::get('/mobile/return-products/print', [MobileReturnProductsController::class, 'returnPrint'])->name('mobilereturnPrintHistory');
            Route::get('/mobile/return-products/print/today', [MobileReturnProductsController::class, 'today'])->name('mobileprintReturnToday');
            Route::get('/mobile/return-products/print/month', [MobileReturnProductsController::class, 'month'])->name('mobileprintReturnMonth');
            Route::get('/mobile/return-products/print/week', [MobileReturnProductsController::class, 'week'])->name('mobileprintReturnWeek');

            Route::get('/mobile/dispatched-products', [MobileSoldProductsController::class, 'soldProduct'])->name('mobilesoldProduct');
            Route::post('/mobile/dispatched-products', [MobileSoldProductsController::class, 'soldProductSubmit'])->name('soldProductSubmit');
            Route::get('/mobile/dispatched-products/history', [MobileSoldProductsController::class, 'history'])->name('mobilesoldProductHistory');

            Route::get('/mobile/dispatched-products/print', [MobileSoldProductsController::class, 'soldPrint'])->name('mobilesoldPrintHistory');
            Route::get('/mobile/dispatched-products/print/today', [MobileSoldProductsController::class, 'today'])->name('mobileprintSoldToday');
            Route::get('/mobile/dispatched-products/print/month', [MobileSoldProductsController::class, 'month'])->name('mobileprintSoldMonth');
            Route::get('/mobile/dispatched-products/print/week', [MobileSoldProductsController::class, 'week'])->name('mobileprintSoldWeek');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'CHV'], function () {

            Route::get('/cityhallproducts/print', [CityHallProductsController::class, 'report'])->name('cityhallproductsPrintHistory');

            Route::get('/cityhall/dashboard', [CityHallDashboardController::class, 'cityhallIndex'])->name('cityhallDashboard');
            Route::resource('cityhallusers', CityHallUsersController::class);

            Route::get('cityhall/resume/{id}', [UsersController::class, 'show']);
            Route::get('cityhall/resume/download/{id}', [UsersController::class, 'download']);

            Route::resource('cityhallproducts', CityHallProductsController::class);
            Route::get('/cityhall/requests', [CityHallRequestsController::class, 'request'])->name('cityhallrequest');
            Route::post('/cityhall/requests', [CityHallRequestsController::class, 'stockSubmit'])->name('stockSubmit');
            Route::get('/cityhall/requests/history', [CityHallRequestsController::class, 'history'])->name('cityhallrequestHistory');
            Route::get('/cityhall/return-products', [CityHallReturnProductsController::class, 'returnProduct'])->name('cityhallreturnProduct');
            Route::post('/cityhall/return-products', [CityHallReturnProductsController::class, 'returnProductSubmit'])->name('returnProductSubmit');

            Route::get('/cityhall/return-products/print', [CityHallReturnProductsController::class, 'returnPrint'])->name('cityhallreturnPrintHistory');
            Route::get('/cityhall/return-products/print/today', [CityHallReturnProductsController::class, 'today'])->name('cityhallprintReturnToday');
            Route::get('/cityhall/return-products/print/month', [CityHallReturnProductsController::class, 'month'])->name('cityhallprintReturnMonth');
            Route::get('/cityhall/return-products/print/week', [CityHallReturnProductsController::class, 'week'])->name('cityhallprintReturnWeek');

            Route::get('/cityhall/return-products/history', [CityHallReturnProductsController::class, 'history'])->name('cityhallreturnProductHistory');
            Route::get('/cityhall/dispatched-products', [CityHallSoldProductsController::class, 'soldProduct'])->name('cityhallsoldProduct');
            Route::post('/cityhall/dispatched-products', [CityHallSoldProductsController::class, 'soldProductSubmit'])->name('soldProductSubmit');
            Route::get('/cityhall/dispatched-products/history', [CityHallSoldProductsController::class, 'history'])->name('cityhallsoldProductHistory');

            Route::get('/cityhall/dispatched-products/print', [CityHallSoldProductsController::class, 'soldPrint'])->name('cityhallsoldPrintHistory');
            Route::get('/cityhall/dispatched-products/print/today', [CityHallSoldProductsController::class, 'today'])->name('cityhallprintSoldToday');
            Route::get('/cityhall/dispatched-products/print/month', [CityHallSoldProductsController::class, 'month'])->name('cityhallprintSoldMonth');
            Route::get('/cityhall/dispatched-products/print/week', [CityHallSoldProductsController::class, 'week'])->name('cityhallprintSoldWeek');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'ADM'], function () {
            //ADM
            Route::get('/notifications',[ProductsController::class, 'notifications'])->name('notifications');
            Route::get('/expired-products',[ProductsController::class, 'notificationsExpiry'])->name('expired-products');

            //Charts
            Route::get('/charts', [ChartController::class, 'index'])->name('charts');
            Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations');

            //Activity Logs
            Route::resource('/activitylogs', ActivityLogsController::class);
            Route::get('/activitylogs', [ActivityLogsController::class, 'index'])->name('activityLogs');


            Route::get('/products/print', [ProductsController::class, 'report'])->name('productsPrintHistory');
            Route::get('/products/print/today', [ProductsController::class, 'today'])->name('printProductsToday');
            Route::get('/products/print/month', [ProductsController::class, 'month'])->name('printProductsMonth');
            Route::get('/products/print/week', [ProductsController::class, 'week'])->name('printProductsWeek');

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('users', UsersController::class);

            Route::get('resume/{id}', [UsersController::class, 'show']);
            Route::get('resume/download/{id}', [UsersController::class, 'download']);

            Route::resource('categories', CategoriesController::class);
            // Route::get('/api/categories', [CategoriesController::class, 'getCategoriesJson']);
            Route::resource('brands', BrandsController::class);
            // Route::get('/api/brands', [BrandsController::class, 'getBrandsJson']);
            Route::resource('sizes', SizesController::class);
            // Route::get('/api/sizes', [SizesController::class, 'getSizesJson']);

            Route::resource('products', ProductsController::class);

            // Route::get('/api/products', [ProductsController::class, 'getProductsJson']);
            Route::get('/stocks', [StocksController::class, 'stock'])->name('stock');
            Route::post('/stocks', [StocksController::class, 'stockSubmit'])->name('stockSubmit');
            Route::get('/stocks/history', [StocksController::class, 'history'])->name('stockHistory');

            Route::get('/stocks/print', [StocksController::class, 'print'])->name('printHistory');
            Route::get('/stocks/print/today', [StocksController::class, 'today'])->name('printStocksToday');
            Route::get('/stocks/print/month', [StocksController::class, 'month'])->name('printStocksMonth');
            Route::get('/stocks/print/week', [StocksController::class, 'week'])->name('printStocksWeek');

            Route::get('/return-products', [ReturnProductsController::class, 'returnProduct'])->name('returnProduct');
            Route::post('/return-products', [ReturnProductsController::class, 'returnProductSubmit'])->name('returnProductSubmit');
            Route::get('/return-products/history', [ReturnProductsController::class, 'history'])->name('returnProductHistory');

            Route::get('/return-products/print', [ReturnProductsController::class, 'returnPrint'])->name('returnPrintHistory');
            Route::get('/return-products/print/today', [ReturnProductsController::class, 'today'])->name('printReturnToday');
            Route::get('/return-products/print/month', [ReturnProductsController::class, 'month'])->name('printReturnMonth');
            Route::get('/return-products/print/week', [ReturnProductsController::class, 'week'])->name('printReturnWeek');

            Route::get('/dispatched-products', [SoldProductsController::class, 'soldProduct'])->name('soldProduct');
            Route::post('/dispatched-products', [SoldProductsController::class, 'soldProductSubmit'])->name('soldProductSubmit');
            Route::get('/dispatched-products/history', [SoldProductsController::class, 'history'])->name('soldProductHistory');

            Route::get('/dispatched-products/print', [SoldProductsController::class, 'soldPrint'])->name('soldPrintHistory');
            Route::get('/dispatched-products/print/today', [SoldProductsController::class, 'today'])->name('printSoldToday');
            Route::get('/dispatched-products/print/month', [SoldProductsController::class, 'month'])->name('printSoldMonth');
            Route::get('/dispatched-products/print/week', [SoldProductsController::class, 'week'])->name('printSoldWeek');

            Route::get('/requests/history', [RequestsController::class, 'history'])->name('requestHistory');
            Route::delete('/requests/{id}',[RequestsController::class, 'destroy'])->name('requests.destroy');
            Route::get('/requests',[RequestsController::class, 'store'])->name('requests.store');

            //Mobile Center Admin Side

            Route::get('/ADMmobileproducts/print', [ADMMobileProductsController::class, 'report'])->name('ADMmobileproductsPrintHistory');

            Route::get('/ADM/mobile/dashboard', [ADMMobileDashboardController::class, 'ADMmobileIndex'])->name('ADMmobileDashboard');
            Route::resource('ADMmobileusers', ADMMobileUsersController::class);

            Route::get('ADMmobile/resume/{id}', [UsersController::class, 'show']);
            Route::get('ADMmmobile/resume/download/{id}', [UsersController::class, 'download']);
            
            Route::resource('ADMmobileproducts', ADMMobileProductsController::class);
            Route::get('/ADM/mobile/requests/history', [ADMMobileRequestsController::class, 'history'])->name('ADMmobilerequestHistory');

            Route::get('/ADM/mobile/return-products/history', [ADMMobileReturnProductsController::class, 'history'])->name('ADMmobilereturnProductHistory');

            Route::get('/ADM/mobile/return-products/print', [ADMMobileReturnProductsController::class, 'returnPrint'])->name('ADMmobilereturnPrintHistory');
            Route::get('/ADM/mobile/return-products/print/today', [ADMMobileReturnProductsController::class, 'today'])->name('ADMmobileprintReturnToday');
            Route::get('/ADM/mobile/return-products/print/month', [ADMMobileReturnProductsController::class, 'month'])->name('ADMmobileprintReturnMonth');
            Route::get('/ADM/mobile/return-products/print/week', [ADMMobileReturnProductsController::class, 'week'])->name('ADMmobileprintReturnWeek');

            Route::get('/ADM/mobile/dispatched-products/history', [ADMMobileSoldProductsController::class, 'history'])->name('ADMmobilesoldProductHistory');

            Route::get('/ADM/mobile/dispatched-products/print', [ADMMobileSoldProductsController::class, 'soldPrint'])->name('ADMmobilesoldPrintHistory');
            Route::get('/ADM/mobile/dispatched-products/print/today', [ADMMobileSoldProductsController::class, 'today'])->name('ADMmobileprintSoldToday');
            Route::get('/ADM/mobile/dispatched-products/print/month', [ADMMobileSoldProductsController::class, 'month'])->name('ADMmobileprintSoldMonth');
            Route::get('/ADM/mobile/dispatched-products/print/week', [ADMMobileSoldProductsController::class, 'week'])->name('ADMmobileprintSoldWeek');

            //City Hall Admin Side

            Route::get('/ADMcityhallproducts/print', [ADMCityHallProductsController::class, 'report'])->name('ADMcityhallproductsPrintHistory');

            Route::get('/ADM/cityhall/dashboard', [ADMCityHallDashboardController::class, 'ADMCityHallIndex'])->name('ADMcityhallDashboard');
            Route::resource('ADMcityhallusers', ADMCityHallUsersController::class);

            Route::get('ADMcityhall/resume/{id}', [UsersController::class, 'show']);
            Route::get('ADMcityhall/resume/download/{id}', [UsersController::class, 'download']);

            Route::resource('ADMcityhallproducts', ADMCityHallProductsController::class);
            Route::get('/ADM/cityhall/requests/history', [ADMCityHallRequestsController::class, 'history'])->name('ADMcityhallrequestHistory');

            Route::get('/ADM/cityhall/return-products/history', [ADMCityHallReturnProductsController::class, 'history'])->name('ADMcityhallreturnProductHistory');

            Route::get('/ADM/cityhall/return-products/print', [ADMCityHallReturnProductsController::class, 'returnPrint'])->name('ADMcityhallreturnPrintHistory');
            Route::get('/ADM/cityhall/return-products/print/today', [ADMCityHallReturnProductsController::class, 'today'])->name('ADMcityhallprintReturnToday');
            Route::get('/ADM/cityhall/return-products/print/month', [ADMCityHallReturnProductsController::class, 'month'])->name('ADMcityhallprintReturnMonth');
            Route::get('/ADM/cityhall/return-products/print/week', [ADMCityHallReturnProductsController::class, 'week'])->name('ADMcityhallprintReturnWeek');

            Route::get('/ADM/cityhall/dispatched-products/history', [ADMCityHallSoldProductsController::class, 'history'])->name('ADMcityhallsoldProductHistory');

            Route::get('/ADM/cityhall/dispatched-products/print', [ADMCityHallSoldProductsController::class, 'soldPrint'])->name('ADMcityhallsoldPrintHistory');
            Route::get('/ADM/cityhall/dispatched-products/print/today', [ADMCityHallSoldProductsController::class, 'today'])->name('ADMcityhallprintSoldToday');
            Route::get('/ADM/cityhall/dispatched-products/print/month', [ADMCityHallSoldProductsController::class, 'month'])->name('ADMcityhallprintSoldMonth');
            Route::get('/ADM/cityhall/dispatched-products/print/week', [ADMCityHallSoldProductsController::class, 'week'])->name('ADMcityhallprintSoldWeek');
        });
    });

    //Categories
    Route::get('/api/categories', [CategoriesController::class, 'getCategoriesJson']);

    //Brands
    Route::get('/api/brands', [BrandsController::class, 'getBrandsJson']);

    //Size
    Route::get('/api/sizes', [SizesController::class, 'getSizesJson']);

    //Product
    Route::get('/api/products', [ProductsController::class, 'getProductsJson']);

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/mobile/about', [MobileAboutController::class, 'mobileindex'])->name('mobile-about');
    Route::get('/cityhall/about', [CityHallAboutController::class, 'cityhallindex'])->name('cityhall-about');



});


