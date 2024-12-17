<?php


use App\Http\Controllers\SkinDiseaseController;
use Illuminate\Support\Facades\Session;

Route::get('/WebProg', function () {
    return view('predict');
});

Route::post('/WebProg/predict', [SkinDiseaseController::class, 'predict']);


Route::get('/change-lang/{lang}', [SkinDiseaseController::class, 'changeLanguage']);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
