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
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; 

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::resource('dashboards','DashboardController');
	Route::resource('customers','CustomerController');
	Route::resource('orders','OrderController');
	Route::resource('salaries','SalaryController');
	Route::resource('staffs','StaffController');
	Route::resource('measurements','MeasurementController');
    Route::resource('masterbranches','MasterBranchController');
    Route::resource('settings','SettingController');
    Route::resource('categories','CategoryController');
    Route::resource('subcategories','SubCategoryController');
    Route::resource('alterations','AlterationController');
    Route::resource('expensetypes','ExpenseTypeController');
    Route::resource('expenses','ExpenseController');
    Route::resource('vendors','VendorController');
    Route::resource('rawmaterials','RawMaterialController');
    Route::resource('users','UserController');
    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');
    Route::resource('purchaseorders','PurchaseOrderController');
    Route::resource('gallery', 'GalleryController');

	Route::get('/', 'DashboardController@index');

	Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('password', 'OrderController@password');
	Route::post('password', 'OrderController@updatePassword');

	Route::get('/orders/{id}/send_invoice',[
    'as' => 'orders.send_invoice',
    'uses' => 'OrderController@send_invoice'
     ]);
    Route::post('/orders/create_customer',[
    'as' => 'orders.create_customer',
    'uses' => 'OrderController@create_customer'
     ]);
    Route::post('/orders/create_staff',[
    'as' => 'orders.create_staff',
    'uses' => 'OrderController@create_staff'
     ]);
    
    Route::post('/subcategories/create_category',[
    'as' => 'subcategories.create_category',
    'uses' => 'SubCategoryController@create_category'
     ]);
    
    Route::get('/profile',[
    'as' => 'user.profile',
    'uses' => 'UserController@profile'
     ]);
    
    Route::get('/create_role_permission', function(){
        $role = Role::create(['name'=> 'Administer']);
        $permission = Permission::create(['name'=> 'Administer roles & permissions']);
        auth()->user()->assignRole('Administer');
        auth()->user()->givePermissionTo('Administer roles & permissions');
    });



});