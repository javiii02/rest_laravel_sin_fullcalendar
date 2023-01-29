<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/nuestra_carta', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/contacto', [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/reserva/one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reserva/one', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reserva/dos', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reserva/dos', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/reserva_completa', [WelcomeController::class, 'thankyou'])->name('thankyou');
Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('/calendarEvents', [CalenderController::class, 'calendarEvents']);
Route::get('/event', [CalenderController::class, 'event']);

// Route::get('/reservations', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('reservations');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

Route::post('/guardar-fecha', 'ControladorFecha@guardarFecha');


require __DIR__ . '/auth.php';
