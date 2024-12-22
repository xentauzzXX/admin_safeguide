<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/login');
});

// Rute untuk dashboard setelah login
Route::get('/admin', \Filament\Pages\Dashboard::class)->name('admin.dashboard');

// Rute untuk daftar banners
Route::get('/admin/banners', \App\Filament\Resources\BannerResource\Pages\ListBanners::class)
    ->name('admin.banners.index');

// Rute untuk membuat banner baru
Route::get('/admin/banners/create', \App\Filament\Resources\BannerResource\Pages\CreateBanner::class)
    ->name('admin.banners.create');

// Rute untuk mengedit banner
Route::get('/admin/banners/{record}/edit', \App\Filament\Resources\BannerResource\Pages\EditBanner::class)
    ->name('admin.banners.edit');

// Rute untuk daftar categories
Route::get('/admin/categories', \App\Filament\Resources\CategoryResource\Pages\ListCategories::class)
    ->name('admin.categories.index');

// Rute untuk membuat category baru
Route::get('/admin/categories/create', \App\Filament\Resources\CategoryResource\Pages\CreateCategory::class)
    ->name('admin.categories.create');

// Rute untuk mengedit category
Route::get('/admin/categories/{record}/edit', \App\Filament\Resources\CategoryResource\Pages\EditCategory::class)
    ->name('admin.categories.edit');

// Rute untuk daftar contents
Route::get('/admin/contents', \App\Filament\Resources\ContentResource\Pages\ListContents::class)
    ->name('admin.contents.index');

// Rute untuk membuat content baru
Route::get('/admin/contents/create', \App\Filament\Resources\ContentResource\Pages\CreateContent::class)
    ->name('admin.contents.create');

// Rute untuk mengedit content
Route::get('/admin/contents/{record}/edit', \App\Filament\Resources\ContentResource\Pages\EditContent::class)
    ->name('admin.contents.edit');

// Rute untuk logout admin
Route::post('/admin/logout', \Filament\Http\Controllers\Auth\LogoutController::class)->name('admin.logout');