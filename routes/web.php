<?php


use App\Http\Controllers\Businesses;
use App\Http\Controllers\Cashiers;
use App\Http\Controllers\Categories;
use App\Http\Controllers\DailyReports;
use App\Http\Controllers\Expenses;
use App\Http\Controllers\Groups;
use App\Http\Controllers\ManageUsers;
use App\Http\Controllers\PrintSmallInvoice;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sections;
use App\Http\Controllers\Services;
use App\Http\Controllers\SoftwareSettings;
use App\Http\Controllers\SubCategories;
use App\Http\Controllers\SubsiDaries;
use App\Http\Controllers\Suppliers;
use App\Http\Controllers\Types;

Route::get('/', function () {
    return view('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/", function () {

        return view("index");
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::any("/businesses/{id?}/{action?}", [Businesses::class, 'businessesIndex']);
    Route::any("/categories/{id?}/{action?}", [Categories::class, 'categoriesIndex']);
    Route::any("/expenses/{id?}/{action?}", [Expenses::class, 'expensesIndex']);
    Route::any("/groups/{id?}/{action?}", [Groups::class, 'groupsIndex']);
    Route::any("/manage-users/{id?}/{action?}", [ManageUsers::class, 'manageUsersIndex']);
    Route::any("/products/{id?}/{action?}", [Products::class, 'productsIndex']);
    Route::any("/sections/{id?}/{action?}", [Sections::class, 'sectionsIndex']);
    Route::any("/sub-categories/{id?}/{action?}", [SubCategories::class, 'subCategoriesIndex']);
    Route::any("/subsidaries/{id?}/{action?}", [SubsiDaries::class, 'subsidariesIndex']);
    Route::any("/suppliers/{id?}/{action?}", [Suppliers::class, 'suppliersIndex']);
    Route::any("/types/{id?}/{action?}", [Types::class, 'typesIndex']);
    Route::any("/services/{id?}/{action?}", [Services::class, 'servicesIndex']);
    Route::any("/cashiers/{action?}", [Cashiers::class, 'cashiersIndex']);
    Route::get("/print-small-invoice/{id}", [PrintSmallInvoice::class, 'printSmallInvoiceIndex']);
    Route::any("/daily-reports/{action?}", [DailyReports::class, 'dailyReportsIndex']);
    Route::any("/software-settings", [SoftwareSettings::class, 'softwareSettingsIndex']);



});




require __DIR__ . '/auth.php';
