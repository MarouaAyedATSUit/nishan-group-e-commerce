<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
});

/* ----------------------------------------static---------------------------------------------- */

Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::prefix('dashboards')->group(function () {

        Route::get('ecommerce', function () {
            return view('admin.dashboards.ecommerce');
        })->name('admin.dashboards.ecommerce');

        Route::get('projects', function () {
            return view('admin.dashboards.projects');
        })->name('admin.dashboards.projects');

        Route::get('online-courses', function () {
            return view('admin.dashboards.online-courses');
        })->name('admin.dashboards.online-courses');

        Route::get('marketing', function () {
            return view('admin.dashboards.marketing');
        })->name('admin.dashboards.marketing');

        Route::get('bidding', function () {
            return view('admin.dashboards.bidding');
        })->name('admin.dashboards.bidding');

        Route::get('pos', function () {
            return view('admin.dashboards.pos');
        })->name('admin.dashboards.pos');

        Route::get('call-center', function () {
            return view('admin.dashboards.call-center');
        })->name('admin.dashboards.call-center');

        Route::get('logistics', function () {
            return view('admin.dashboards.logistics');
        })->name('admin.dashboards.logistics');
    });

});
