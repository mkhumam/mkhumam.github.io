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

Route::get('/', function () { return view('welcome'); });

            // Login
Route::get('/login', function () { return view('login.index'); });


            // Home Menu
/* Dashboard */
Route::get('/home', function () { return view('home.dashboard'); });

/* Calendar */
Route::get('/calendar', function () { return view('home.calendar'); });

/* Inbox */
Route::get('/inbox', function () { return view('home.inbox'); });


            // Transaction Menu
/* Quotation List */
Route::get('/quot', function () { return view('transaction.quotation'); });

/* Tour Packages List */
Route::get('/tour', function () { return view('transaction.tour'); });

/* Reimbursement */
Route::get('/reimburs', function () { return view('transaction.reimbursement'); });


            // Reports Menu
/* Packages Report */
Route::get('/invoice', function () { return view('reports.invoice'); });

/* Invoice Report */
Route::get('/packages', function () { return view('reports.packages'); });

/* Revenue Report */
Route::get('/revenue', function () { return view('reports.revenue'); });


            // Master Data
/* user / hak akses user */
Route::get('/user', function () { return view('masterdata.user'); });

/* Packages */
Route::get('/paket', function () { return view('masterdata.packages'); });

/* Destination */
Route::get('/destinasi', function () { return view('masterdata.destination'); });

/* hotels */
Route::get('/hotel', function () { return view('masterdata.hotels'); });

/* resto */
Route::get('/resto', function () { return view('masterdata.restaurant'); });

/* Vehicle */
Route::get('/vehicle', function () { return view('masterdata.vehicle'); });
