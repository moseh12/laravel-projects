<?php

use App\Http\Controllers\FaqsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PendingCasesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\TaxationController;
use App\Http\Controllers\ItemListingController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SolvedCasesController;
use App\Http\Controllers\GeneralSettingsController;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\BuyUtilitiesController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\FutureSectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('admin.dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');

Route::get('/custom_fields', [CustomController::class, 'custom_fields'])->name('admin.custom_fields.index');


Route::get('/customers', [CustomersController::class, 'customers'])->name('admin.customers.index');


Route::get('/chats', [ChatsController::class, 'chats'])->name('admin.chats.index');



Route::get('/items', [ItemsController::class, 'items'])->name('admin.items.index');


Route::get('/tips', [TipsController::class, 'tips'])->name('admin.tips.index');





Route::get('/buy_utilities', [BuyUtilitiesController::class, 'buy_utilities'])->name('admin.buy_utilities.index');




Route::get('/item_listing', [ItemListingController::class, 'item_listing'])->name('admin.item_listing.index');


Route::get('/advertisement', [AdvertisementController::class, 'advertisement'])->name('admin.advertisement.index');


Route::get('/user_packages', [UserPackageController::class, 'user_packages'])->name('user_packages.index');

Route::get('/payment', [PaymentController::class, 'payment'])->name('admin.payment.index');

Route::get('/slider', [SliderController::class, 'slider'])->name('admin.slider.index');


Route::get('/future_section', [FutureSectionController::class, 'admin.future_section'])->name('future_section.index');


Route::get('/countries', [CountriesController::class, 'countries'])->name('admin.countries.index');


Route::get('/city', [CityController::class, 'city'])->name('admin.city.index');


Route::get('/states', [StatesController::class, 'states'])->name('admin.states.index');


Route::get('/areas', [AreasController::class, 'areas'])->name('admin.areas.index');

Route::get('/report', [ReportController::class, 'report'])->name('admin.report.index');

Route::get('/user_report', [UserReportController::class, 'user_report'])->name('admin.user_report.index');

Route::get('/notifications', [NotificationsController::class, 'notifications'])->name('admin.notifications.index');

Route::get('/police', [PoliceController::class, 'police'])->name('police.index');

Route::get('/solved_cases', [SolvedCasesController::class, 'solved_cases'])->name('admin.solved_cases.index');
Route::get('/pending_cases', [PendingCasesController::class, 'pending_cases'])->name('admin.pending_cases.index');
Route::get('/staff', [StaffController::class, 'staff'])->name('admin.staff.index');
Route::get('/roles', [RolesController::class, 'roles'])->name('admin.roles.index');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('admin.blogs.index');
Route::get('/faqs', [FaqsController::class, 'faqs'])->name('admin.faqs.index');

Route::get('/general_settings', [GeneralSettingsController::class, 'general_settings'])->name('admin.general_settings.index');
Route::get('/taxation', [TaxationController::class, 'taxation'])->name('admin.taxation.index');

Route::get('/currency', [CurrencyController::class, 'currency'])->name('admin.currency.index');
Route::get('/site', [SiteController::class, 'site'])->name('admin.site.index');

Route::get('/user_package', [SiteController::class, 'user_package'])->name('admin.user_packages.index');


Route::get('/future_section', [SiteController::class, 'future_section'])->name('admin.future_section.index');


Route::get('/police', [SiteController::class, 'police'])->name('admin.police.index');
