<?php

declare(strict_types=1);

use App\Http\Controllers\Tenancy\VerseController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Tenancy\ProfileController;
use App\Models\User;
use App\Models\Verse;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('tenancy.welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            $verses = Verse::all();
            $users = User::all();
            return view('tenancy.dashboard', compact('verses', 'users'));
        })->name('dashboard');

        Route::resource('verses', VerseController::class)->names('verses');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('tenancy.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('tenancy.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('tenancy.profile.destroy');

        Route::resource('tenants', TenantController::class)->except('show');
    });
    require __DIR__ . '/auth.php';
});
