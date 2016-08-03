<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auditwise_theme.pages.homepage');
});

Route::get('/services', function () {
    return view('auditwise_theme.pages.services');
});

Route::get('/about/history', function () {
    return view('auditwise_theme.pages.about.history');
});

Route::get('/about/people', function () {
    return view('auditwise_theme.pages.about.people');
});

Route::get('/services', function () {
    return redirect('/services/accounting');
});

Route::get('/services/accounting', function () {
    return view('auditwise_theme.pages.services.accounting');
});

Route::get('/services/auditing_and_insurance', function () {
    return view('auditwise_theme.pages.services.auditing_and_insurance');
});

Route::get('/services/business_administration', function () {
    return view('auditwise_theme.pages.services.business_administration');
});

Route::get('/services/business_plan', function () {
    return view('auditwise_theme.pages.services.business_plan');
});

Route::get('/services/tax', function () {
    return view('auditwise_theme.pages.services.tax');
});

Route::get('/services/business_advisors', function () {
    return view('auditwise_theme.pages.services.business_advisors');
});

Route::get('/contact', function () {
    return view('auditwise_theme.pages.contact');
});

Route::get('/news/{id}', function () {
    return view('auditwise_theme.pages.single_post');
});
