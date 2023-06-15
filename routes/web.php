<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UsersController;
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

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');

Route::get(
    '/hotel/{id}',
    [HotelController::class, 'show']
)->name('show');

Route::get(
    '/search',
    [HotelController::class, 'search']
)->name('search');


Route::post('search', [HotelController::class, 'searchApi'])->name('search.api');


Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Route::get('countries', [HomeController::class, 'countries']);

Route::get('/login/facebook', [AuthController::class, 'redirectToFacebook'])->name('facebook.login');

Route::get('/login/facebook/callback', [AuthController::class, 'handleFacebookCallback']);

Route::get('/login/twitter', [AuthController::class, 'redirectToTwitter'])->name('twitter.login');
Route::get('/login/twitter/callback', [AuthController::class, 'handleTwitterCallback']);

Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::resource('hotels', HotelController::class);
Route::post('hotel-details', [HotelController::class,'details'])->name("hotel.details");


Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::controller(HotelController::class)->group(function () {
    Route::get('categories', [HotelController::class, 'getCategories']);
    Route::get('category-groups', [HotelController::class, 'getCategoryGroups']);
    Route::get('destinations/{country_code?}', [HotelController::class, 'destinations']);
    Route::get('chains', [HotelController::class, 'chains']);
    Route::get('accommodations', [HotelController::class, 'accommodations']);
    Route::get('currencies', [HotelController::class, 'currencies']);
});

Route::resource('bookings', BookingController::class);
Route::get('prebook/{code}',[BookingController::class, 'prebooking'])->name('prebooking');

Route::resource('users', UsersController::class);


Route::post('filter', [HotelController::class, 'filterSearch']);

Route::get('default-search-options', [HotelController::class, 'defaultSearchOptions']);

Route::get('city-hotels/{city}', [HotelController::class, 'getHotelsByCity']);

Route::get('country/{country}/city/{city}', [HotelController::class, 'getHotelsByCountryCity']);

// Old routes :
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/api', [App\Http\Controllers\APIController::class, 'getApiData'])->name('api');
// Route::get('/hotel/list', [App\Http\Controllers\HotelListController::class, 'searchResult'])->name('searchResult');
// Route::get('/getCountriesDataTest', [App\Http\Controllers\CountryController::class, 'getCountriesDataWithCoordinates'])->name('getCountriesDataWithCoordinates');
// Route::get('/getCountriesData', [App\Http\Controllers\CountryController::class, 'getCountriesData'])->name('getCountriesData');
// Route::get('/getDestinationsData', [App\Http\Controllers\DestinationController::class, 'getDestinationsData'])->name('getDestinationsData');
// Route::get('/getAccommodationsData', [App\Http\Controllers\AccommodationController::class, 'getAccommodationsData'])->name('getAccommodationsData');
// Route::get('/getBoardGroupsData', [App\Http\Controllers\BoardGroupController::class, 'getBoardGroupsData'])->name('getBoardGroupsData');
// Route::get('/getBoardsData', [App\Http\Controllers\BoardController::class, 'getBoardsData'])->name('getBoardsData');
// Route::get('/getCategoriesData', [App\Http\Controllers\CategoryController::class, 'getCategoriesData'])->name('getCategoriesData');
// Route::get('/getChainsData', [App\Http\Controllers\ChainController::class, 'getChainsData'])->name('getChainsData');
// Route::get('/getClassificationsData', [App\Http\Controllers\ClassificationController::class, 'getClassificationsData'])->name('getClassificationsData');
// Route::get('/getCurrenciesData', [App\Http\Controllers\CurrencyController::class, 'getCurrenciesData'])->name('getCurrenciesData');
// Route::get('/getFacilityGroupsData', [App\Http\Controllers\FacilityGroupController::class, 'getFacilityGroupsData'])->name('getFacilityGroupsData');
// Route::get('/getFacilityTypologiesData', [App\Http\Controllers\FacilityTypologyController::class, 'getFacilityTypologiesData'])->name('getFacilityTypologiesData');
// Route::get('/getGroupCategoriesData', [App\Http\Controllers\GroupCategoryController::class, 'getGroupCategoriesData'])->name('getGroupCategoriesData');
// Route::get('/getIssuesData', [App\Http\Controllers\IssueController::class, 'getIssuesData'])->name('getIssuesData');
// Route::get('/getLanguagesData', [App\Http\Controllers\LanguageController::class, 'getLanguagesData'])->name('getLanguagesData');
// Route::get('/getPromotionsData', [App\Http\Controllers\PromotionController::class, 'getPromotionsData'])->name('getPromotionsData');
// Route::get('/getSegmentsData', [App\Http\Controllers\SegmentController::class, 'getSegmentsData'])->name('getSegmentsData');
// Route::get('/getTerminalsData', [App\Http\Controllers\TerminalController::class, 'getTerminalsData'])->name('getTerminalsData');
// Route::get('/getImageTypesData', [App\Http\Controllers\ImageTypeController::class, 'getImageTypesData'])->name('getImageTypesData');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
