<?php

use Illuminate\Support\Facades\Auth;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Route::get('/', function () {
    return view("welcome");
});


 Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

 Route::group(['middleware' => ['role:administrador']], function () {
     //
    Route::resource("categorias", App\Http\Controllers\CategoryController::class);
    Route::post('categoryStore',[App\Http\Controllers\CategoryController::class, 'store']);
    Route::post('categoryEdit',[App\Http\Controllers\CategoryController::class, 'edit']);
    Route::post('categoryUpdate',[App\Http\Controllers\CategoryController::class, 'update']);
    Route::post('categoryDestroy',[App\Http\Controllers\CategoryController::class, 'destroy']);
    Route::post('categoryShow',[App\Http\Controllers\CategoryController::class, 'store']);

   Route::resource("productos",App\Http\Controllers\ProductController::class);
    Route::post('productStore',[App\Http\Controllers\ProductController::class, 'store']);
    Route::post('productEdit',[App\Http\Controllers\ProductController::class, 'edit']);
    Route::post('productUpdate',[App\Http\Controllers\ProductController::class, 'update']);
    Route::post('productDestroy',[App\Http\Controllers\ProductController::class, 'destroy']);
    Route::post('productShow',[App\Http\Controllers\ProductController::class, 'show']);

    Route::post('category_productDestroy',"ProductController@category_productDestroy");
    Route::post('category_productStore',"ProductController@category_productStore");
    Route::post('category_productEdit',"ProductController@category_productEdit");

    Route::resource("proveedores",App\Http\Controllers\ProviderController::class);
    Route::post('providerStore',[App\Http\Controllers\ProviderController::class, 'store']);
    Route::post('providerEdit',[App\Http\Controllers\ProviderController::class, 'edit']);
    Route::post('providerUpdate',[App\Http\Controllers\ProviderController::class, 'update']);
    Route::post('providerDestroy',[App\Http\Controllers\ProviderController::class, 'destroy']);
    Route::post('providerShow',[App\Http\Controllers\ProviderController::class, 'show']);

    Route::resource("almacenes", App\Http\Controllers\WarehouseController::class);
    Route::post('warehouseStore',[App\Http\Controllers\WarehouseController::class, 'store']);
    Route::post('warehouseEdit',[App\Http\Controllers\WarehouseController::class, 'edit']);
    Route::post('warehouseUpdate',[App\Http\Controllers\WarehouseController::class, 'update']);
    Route::post('warehouseDestroy',[App\Http\Controllers\WarehouseController::class, 'destroy']);
    Route::post('warehouseShow',[App\Http\Controllers\WarehouseController::class, 'show']);

    Route::resource("clientes", App\Http\Controllers\CustomerController::class);
    Route::post('customerStore',[App\Http\Controllers\CustomerController::class, 'store']);
    Route::post('customerEdit',[App\Http\Controllers\CustomerController::class, 'edit']);
    Route::post('customerUpdate',[App\Http\Controllers\CustomerController::class, 'update']);
    Route::post('customerDestroy',[App\Http\Controllers\CustomerController::class, 'destroy']);
    Route::post('customerShow',[App\Http\Controllers\CustomerController::class, 'show']);

   
    Route::resource('usuarios', App\Http\Controllers\UserController::class);
    Route::post('userCreate', 'UserController@create');
    Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
    Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
    Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
    Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
    Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);

    Route::post('userRoleStore',[App\Http\Controllers\UserController::class, 'userRoleStore']);
    Route::post('userRoleEdit',[App\Http\Controllers\UserController::class, 'userRoleEdit']);
    Route::post('userRoleDestroy',[App\Http\Controllers\UserController::class, 'userRoleDestroy']);

    Route::resource("roles", App\Http\Controllers\RoleController::class);
    Route::post('roleStore',[App\Http\Controllers\RoleController::class, 'store']);
    Route::post('roleEdit',[App\Http\Controllers\RoleController::class, 'edit']);
    Route::post('roleUpdate',[App\Http\Controllers\RoleController::class, 'update']);
    Route::post('roleDestroy',[App\Http\Controllers\RoleController::class, 'destroy']);
    Route::post('roleShow',[App\Http\Controllers\RoleController::class, 'show']);

    Route::post('rolePermissionStore',"RolesController@rolePermissionStore");
    Route::post('rolePermissionEdit',"RolesController@rolePermissionEdit");
    Route::post('rolePermissionDestroy',"RolesController@rolePermissionDestroy");

    Route::resource("distribuciones", App\Http\Controllers\DistributionController::class);
    Route::post('distributionStore',[App\Http\Controllers\DistributionController::class, 'store']);
    Route::post('distributionEdit',[App\Http\Controllers\DistributionController::class, 'edit']);
    Route::post('distributionUpdate',[App\Http\Controllers\DistributionController::class, 'update']);
    Route::post('distributionDestroy',[App\Http\Controllers\DistributionController::class, 'destroy']);
    Route::post('distributionShow',[App\Http\Controllers\DistributionController::class, 'show']);

    Route::resource("distribucionporalmacen",App\Http\Controllers\DistributionWarehouseController::class);

    Route::resource("colores", App\Http\Controllers\ColorController::class);
    Route::post('colorStore',[App\Http\Controllers\ColorController::class, 'store']);
    Route::post('colorEdit',[App\Http\Controllers\ColorController::class, 'edit']);
    Route::post('colorUpdate',[App\Http\Controllers\ColorController::class, 'update']);
    Route::post('colorDestroy',[App\Http\Controllers\ColorController::class, 'destroy']);
    Route::post('colorShow',[App\Http\Controllers\ColorController::class, 'show']);

  Route::resource("medidas", App\Http\Controllers\SizeController::class);
    Route::post('sizeStore',[App\Http\Controllers\SizeController::class, 'store']);
    Route::post('sizeEdit',[App\Http\Controllers\SizeController::class, 'edit']);
    Route::post('sizeUpdate',[App\Http\Controllers\SizeController::class, 'update']);
    Route::post('sizeDestroy',[App\Http\Controllers\SizeController::class, 'destroy']);
    Route::post('sizeShow',[App\Http\Controllers\SizeController::class, 'show']);

   Route::resource("tipos", App\Http\Controllers\TypeController::class);
    Route::post('typeStore',[App\Http\Controllers\TypeController::class, 'store']);
    Route::post('typeEdit',[App\Http\Controllers\TypeController::class, 'edit']);
    Route::post('typeUpdate',[App\Http\Controllers\TypeController::class, 'update']);
    Route::post('typeDestroy',[App\Http\Controllers\TypeController::class, 'destroy']);
    Route::post('typeShow',[App\Http\Controllers\TypeController::class, 'show']);

 });