<?php

use Illuminate\Http\Request;

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

/**
* Users
**/
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

/**
* Countries
**/
Route::resource('countries', 'Country\CountryController', ['except' => ['create', 'edit']]);

/**
* Departments
**/
Route::resource('departments', 'Department\DepartmentController', ['except' => ['create', 'edit']]);

/**
* Cities
**/
Route::resource('cities', 'City\CityController', ['except' => ['create', 'edit']]);

/**
* Licence Plans
**/
Route::resource('licence_plans', 'LicencePlan\LicencePlanController', ['except' => ['create', 'edit']]);

/**
* Companies
**/
Route::resource('companies', 'Company\CompanyController', ['except' => ['create', 'edit']]);

/**
* Pay Options
**/
Route::resource('pay_options', 'PayOption\PayOptionController', ['except' => ['create', 'edit']]);

/**
* Suppliers
**/
Route::resource('suppliers', 'Supplier\SupplierController', ['except' => ['create', 'edit']]);

/**
* Customers
**/
Route::resource('customers', 'Customer\CustomerController', ['except' => ['create', 'edit']]);

/**
* Product Categories
**/
Route::resource('product_categories', 'ProductCategory\ProductCategoryController', ['except' => ['create', 'edit']]);

/**
* Taxes
**/
Route::resource('taxes', 'Tax\TaxController', ['except' => ['create', 'edit']]);

/**
* Product Baskets
**/
Route::resource('product-baskets', 'ProductBasket\ProductBasketController', ['except' => ['create', 'edit']]);

/**
* Products
**/
Route::resource('products', 'Product\ProductController', ['except' => ['create', 'edit']]);

/**
* Warehouses
**/
Route::resource('warehouses', 'Warehouse\WarehouseController', ['except' => ['create', 'edit']]);
