<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('HomeView');
});

Route::get('/settings', function () {
    return Inertia::render('SettingsView');
});

Route::get('/help', function () {
    return Inertia::render('HelpView', [
        'time' => now() -> toTimeString()
    ]);
});

Route::get('/users', function () {
    // dd(request());

    return Inertia::render('Users/Index', [
        'users' => User::query()
            ->when(request()->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(20)
            ->withQueryString()
            ->through(fn($user) => [
                'name' => $user->name,
                'id' => $user->id,
            ]),
        'filters' => request()->only(['search'])
    ]);
});

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
});

Route::post('/users', function () {
    // sleep(3);

    // Validate the inputs
    $attrs = request()->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    // Create a user
    User::created([
        'name' => request()->input('name'),
        'email' => request()->input('email'),
        'password' => request()->input('password')
    ]);

    // redirect somewhere
    return redirect('/users');

    // I can't find the created user. Why??????????????
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
