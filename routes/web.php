<?php

use App\Http\Controllers\NewsController;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Support\Facades\Artisan;
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

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', function () {
    $seoInfo = SeoSettingRepository::getInfo('/*');
    return view('index')->with('seoInfo', $seoInfo);
})->name('index');

Route::get('/about', function () {
    $seoInfo = SeoSettingRepository::getInfo('/about');
    return view('about')->with('seoInfo', $seoInfo);
})->name('about');

Route::get('/car', function () {
    $seoInfo = SeoSettingRepository::getInfo('/car');
    return view('car')->with('seoInfo', $seoInfo);
})->name('car');

Route::get('/cheque', function () {
    $seoInfo = SeoSettingRepository::getInfo('/cheque');
    return view('cheque')->with('seoInfo', $seoInfo);
})->name('cheque');

Route::get('/valuable', function () {
    $seoInfo = SeoSettingRepository::getInfo('/valuable');
    return view('valuable')->with('seoInfo', $seoInfo);
})->name('valuable');

Route::get('/realestate', function () {
    $seoInfo = SeoSettingRepository::getInfo('/realestate');
    return view('realestate')->with('seoInfo', $seoInfo);
})->name('realestate');

Route::get('/on-lendding', function () {
    $seoInfo = SeoSettingRepository::getInfo('/on-lendding');
    return view('on-lendding')->with('seoInfo', $seoInfo);
})->name('on-lendding');

Route::get('/business', function () {
    $seoInfo = SeoSettingRepository::getInfo('/business');
    return view('business')->with('seoInfo', $seoInfo);
})->name('business');

Route::get('/process', function () {
    $seoInfo = SeoSettingRepository::getInfo('/process');
    return view('process')->with('seoInfo', $seoInfo);
})->name('process');

Route::get('/map', function () {
    $seoInfo = SeoSettingRepository::getInfo('/map');
    return view('map')->with('seoInfo', $seoInfo);
})->name('map');

Route::get('/faq', function () {
    $seoInfo = SeoSettingRepository::getInfo('/faq');
    return view('faq')->with('seoInfo', $seoInfo);
})->name('faq');

Route::any('/news', [NewsController::class, 'index'])->name('news');
Route::any('/news-details/{id}', [NewsController::class, 'detail'])->name('news.details');


Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        Route::resource('marqueeInfos', App\Http\Controllers\Admin\MarqueeInfoController::class, ["as" => 'admin']);
        Route::resource('newsInfos', App\Http\Controllers\Admin\NewsInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});
