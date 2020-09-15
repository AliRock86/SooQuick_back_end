<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| User endpoints
|--------------------------------------------------------------------------
 */
Route::name('users.')->prefix('users')->group(function () {
    Route::get('/', 'UserControllerAPI@index')->name('index');
    Route::post('/', 'UserControllerAPI@store')->name('create');
    Route::get('/{user}', 'UserControllerAPI@show')->name('show');
    Route::patch('/{user}', 'UserControllerAPI@update')->name('update');
    Route::delete('/{user}', 'UserControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| StatusType endpoints
|--------------------------------------------------------------------------
 */
Route::name('status-types.')->prefix('status-types')->group(function () {
    Route::get('/', 'StatusTypeControllerAPI@index')->name('index');
    Route::post('/', 'StatusTypeControllerAPI@store')->name('create');
    Route::get('/{statusType}', 'StatusTypeControllerAPI@show')->name('show');
    Route::patch('/{statusType}', 'StatusTypeControllerAPI@update')->name('update');
    Route::delete('/{statusType}', 'StatusTypeControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Status endpoints
|--------------------------------------------------------------------------
 */
Route::name('statuses.')->prefix('statuses')->group(function () {
    Route::get('/', 'StatusControllerAPI@index')->name('index');
    Route::post('/', 'StatusControllerAPI@store')->name('create');
    Route::get('/{status}', 'StatusControllerAPI@show')->name('show');
    Route::patch('/{status}', 'StatusControllerAPI@update')->name('update');
    Route::delete('/{status}', 'StatusControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Role endpoints
|--------------------------------------------------------------------------
 */
Route::name('roles.')->prefix('roles')->group(function () {
    Route::get('/', 'RoleControllerAPI@index')->name('index');
    Route::post('/', 'RoleControllerAPI@store')->name('create');
    Route::get('/{role}', 'RoleControllerAPI@show')->name('show');
    Route::patch('/{role}', 'RoleControllerAPI@update')->name('update');
    Route::delete('/{role}', 'RoleControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Country endpoints
|--------------------------------------------------------------------------
 */
Route::name('countries.')->prefix('countries')->group(function () {
    Route::get('/', 'CountryControllerAPI@index')->name('index');
    Route::post('/', 'CountryControllerAPI@store')->name('create');
    Route::get('/{country}', 'CountryControllerAPI@show')->name('show');
    Route::patch('/{country}', 'CountryControllerAPI@update')->name('update');
    Route::delete('/{country}', 'CountryControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Province endpoints
|--------------------------------------------------------------------------
 */
Route::name('provinces.')->prefix('provinces')->group(function () {
    Route::get('/', 'ProvinceControllerAPI@index')->name('index');
    Route::post('/', 'ProvinceControllerAPI@store')->name('create');
    Route::get('/{province}', 'ProvinceControllerAPI@show')->name('show');
    Route::patch('/{province}', 'ProvinceControllerAPI@update')->name('update');
    Route::delete('/{province}', 'ProvinceControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Region endpoints
|--------------------------------------------------------------------------
 */
Route::name('regions.')->prefix('regions')->group(function () {
    Route::get('/', 'RegionControllerAPI@index')->name('index');
    Route::post('/', 'RegionControllerAPI@store')->name('create');
    Route::get('/{region}', 'RegionControllerAPI@show')->name('show');
    Route::patch('/{region}', 'RegionControllerAPI@update')->name('update');
    Route::delete('/{region}', 'RegionControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Permision endpoints
|--------------------------------------------------------------------------
 */
Route::name('permisions.')->prefix('permisions')->group(function () {
    Route::get('/', 'PermisionControllerAPI@index')->name('index');
    Route::post('/', 'PermisionControllerAPI@store')->name('create');
    Route::get('/{permision}', 'PermisionControllerAPI@show')->name('show');
    Route::patch('/{permision}', 'PermisionControllerAPI@update')->name('update');
    Route::delete('/{permision}', 'PermisionControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Customer endpoints
|--------------------------------------------------------------------------
 */
Route::name('customers.')->prefix('customers')->group(function () {
    Route::get('/', 'CustomerControllerAPI@index')->name('index');
    Route::post('/', 'CustomerControllerAPI@store')->name('create');
    Route::get('/{customer}', 'CustomerControllerAPI@show')->name('show');
    Route::patch('/{customer}', 'CustomerControllerAPI@update')->name('update');
    Route::delete('/{customer}', 'CustomerControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Address endpoints
|--------------------------------------------------------------------------
 */
Route::name('addresses.')->prefix('addresses')->group(function () {
    Route::get('/', 'AddressControllerAPI@index')->name('index');
    Route::post('/', 'AddressControllerAPI@store')->name('create');
    Route::get('/{address}', 'AddressControllerAPI@show')->name('show');
    Route::patch('/{address}', 'AddressControllerAPI@update')->name('update');
    Route::delete('/{address}', 'AddressControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Merchant endpoints
|--------------------------------------------------------------------------
 */
Route::name('merchants.')->prefix('merchants')->group(function () {
    Route::get('/', 'MerchantControllerAPI@index')->name('index');
    Route::post('/', 'MerchantControllerAPI@store')->name('create');
    Route::get('/{merchant}', 'MerchantControllerAPI@show')->name('show');
    Route::patch('/{merchant}', 'MerchantControllerAPI@update')->name('update');
    Route::delete('/{merchant}', 'MerchantControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| DeliveryCompany endpoints
|--------------------------------------------------------------------------
 */
Route::name('delivery-companies.')->prefix('delivery-companies')->group(function () {
    Route::get('/', 'DeliveryCompanyControllerAPI@index')->name('index');
    Route::post('/', 'DeliveryCompanyControllerAPI@store')->name('create');
    Route::get('/{deliveryCompany}', 'DeliveryCompanyControllerAPI@show')->name('show');
    Route::patch('/{deliveryCompany}', 'DeliveryCompanyControllerAPI@update')->name('update');
    Route::delete('/{deliveryCompany}', 'DeliveryCompanyControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Order endpoints
|--------------------------------------------------------------------------
 */
Route::name('orders.')->prefix('orders')->group(function () {
    Route::get('/', 'OrderControllerAPI@index')->name('index');
    Route::post('/', 'OrderControllerAPI@store')->name('create');
    Route::get('/{order}', 'OrderControllerAPI@show')->name('show');
    Route::patch('/{order}', 'OrderControllerAPI@update')->name('update');
    Route::delete('/{order}', 'OrderControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Image endpoints
|--------------------------------------------------------------------------
 */
Route::name('images.')->prefix('images')->group(function () {
    Route::get('/', 'ImageControllerAPI@index')->name('index');
    Route::post('/', 'ImageControllerAPI@store')->name('create');
    Route::get('/{image}', 'ImageControllerAPI@show')->name('show');
    Route::patch('/{image}', 'ImageControllerAPI@update')->name('update');
    Route::delete('/{image}', 'ImageControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| NotificationType endpoints
|--------------------------------------------------------------------------
 */
Route::name('notification-types.')->prefix('notification-types')->group(function () {
    Route::get('/', 'NotificationTypeControllerAPI@index')->name('index');
    Route::post('/', 'NotificationTypeControllerAPI@store')->name('create');
    Route::get('/{notificationType}', 'NotificationTypeControllerAPI@show')->name('show');
    Route::patch('/{notificationType}', 'NotificationTypeControllerAPI@update')->name('update');
    Route::delete('/{notificationType}', 'NotificationTypeControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Notification endpoints
|--------------------------------------------------------------------------
 */
Route::name('notifications.')->prefix('notifications')->group(function () {
    Route::get('/', 'NotificationControllerAPI@index')->name('index');
    Route::post('/', 'NotificationControllerAPI@store')->name('create');
    Route::get('/{notification}', 'NotificationControllerAPI@show')->name('show');
    Route::patch('/{notification}', 'NotificationControllerAPI@update')->name('update');
    Route::delete('/{notification}', 'NotificationControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| DeliveryPrice endpoints
|--------------------------------------------------------------------------
 */
Route::name('delivery-prices.')->prefix('delivery-prices')->group(function () {
    Route::get('/', 'DeliveryPriceControllerAPI@index')->name('index');
    Route::post('/', 'DeliveryPriceControllerAPI@store')->name('create');
    Route::get('/{deliveryPrice}', 'DeliveryPriceControllerAPI@show')->name('show');
    Route::patch('/{deliveryPrice}', 'DeliveryPriceControllerAPI@update')->name('update');
    Route::delete('/{deliveryPrice}', 'DeliveryPriceControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Bill endpoints
|--------------------------------------------------------------------------
 */
Route::name('bills.')->prefix('bills')->group(function () {
    Route::get('/', 'BillControllerAPI@index')->name('index');
    Route::post('/', 'BillControllerAPI@store')->name('create');
    Route::get('/{bill}', 'BillControllerAPI@show')->name('show');
    Route::patch('/{bill}', 'BillControllerAPI@update')->name('update');
    Route::delete('/{bill}', 'BillControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Driver endpoints
|--------------------------------------------------------------------------
 */
Route::name('drivers.')->prefix('drivers')->group(function () {
    Route::get('/', 'DriverControllerAPI@index')->name('index');
    Route::post('/', 'DriverControllerAPI@store')->name('create');
    Route::get('/{driver}', 'DriverControllerAPI@show')->name('show');
    Route::patch('/{driver}', 'DriverControllerAPI@update')->name('update');
    Route::delete('/{driver}', 'DriverControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Otp endpoints
|--------------------------------------------------------------------------
 */
Route::name('otps.')->prefix('otps')->group(function () {
    Route::get('/', 'OtpControllerAPI@index')->name('index');
    Route::post('/', 'OtpControllerAPI@store')->name('create');
    Route::get('/{otp}', 'OtpControllerAPI@show')->name('show');
    Route::patch('/{otp}', 'OtpControllerAPI@update')->name('update');
    Route::delete('/{otp}', 'OtpControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Offer endpoints
|--------------------------------------------------------------------------
 */
Route::name('offers.')->prefix('offers')->group(function () {
    Route::get('/', 'OfferControllerAPI@index')->name('index');
    Route::post('/', 'OfferControllerAPI@store')->name('create');
    Route::get('/{offer}', 'OfferControllerAPI@show')->name('show');
    Route::patch('/{offer}', 'OfferControllerAPI@update')->name('update');
    Route::delete('/{offer}', 'OfferControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Action endpoints
|--------------------------------------------------------------------------
 */
Route::name('actions.')->prefix('actions')->group(function () {
    Route::get('/', 'ActionControllerAPI@index')->name('index');
    Route::post('/', 'ActionControllerAPI@store')->name('create');
    Route::get('/{action}', 'ActionControllerAPI@show')->name('show');
    Route::patch('/{action}', 'ActionControllerAPI@update')->name('update');
    Route::delete('/{action}', 'ActionControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Partnership endpoints
|--------------------------------------------------------------------------
 */
Route::name('partnerships.')->prefix('partnerships')->group(function () {
    Route::get('/', 'PartnershipControllerAPI@index')->name('index');
    Route::post('/', 'PartnershipControllerAPI@store')->name('create');
    Route::get('/{partnership}', 'PartnershipControllerAPI@show')->name('show');
    Route::patch('/{partnership}', 'PartnershipControllerAPI@update')->name('update');
    Route::delete('/{partnership}', 'PartnershipControllerAPI@destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| DeliveryDrivers endpoints
|--------------------------------------------------------------------------
 */
Route::name('delivery-drivers.')->prefix('delivery-drivers')->group(function () {
    Route::get('/', 'DeliveryDriversControllerAPI@index')->name('index');
    Route::post('/', 'DeliveryDriversControllerAPI@store')->name('create');
    Route::get('/{deliveryDrivers}', 'DeliveryDriversControllerAPI@show')->name('show');
    Route::patch('/{deliveryDrivers}', 'DeliveryDriversControllerAPI@update')->name('update');
    Route::delete('/{deliveryDrivers}', 'DeliveryDriversControllerAPI@destroy')->name('destroy');
});

