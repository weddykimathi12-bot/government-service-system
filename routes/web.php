
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\AdminController;

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Existing service request submission
Route::post('/requests', [ServiceRequestController::class, 'store'])
    ->name('requests.store');

// Login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Process login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/')
            ->with('success', 'You have logged in successfully!');
    }

    return back()
        ->withErrors(['email' => 'The email or password is incorrect.'])
        ->onlyInput('email');
});

// Registration page
Route::get('/register', function () {
    return view('register');
})->name('register');

// Process registration
Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect('/')
        ->with('success', 'Your account has been created successfully!');
});

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'You have logged out.');
})->middleware('auth')->name('logout');

// Track a service request
Route::get('/track', function () {
    return view('track');
})->name('track');

// Search for a request using its tracking number
Route::post('/track', function (Request $request) {
    $validated = $request->validate([
        'tracking_number' => 'required|integer|min:1',
    ]);

    $serviceRequest = DB::table('service_requests')
        ->where('id', $validated['tracking_number'])
        ->first();

    return view('track', compact('serviceRequest'));
})->name('track.search');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(\App\Http\Middleware\AdminMiddleware::class)
    ->name('admin.dashboard');

Route::post('/admin/requests/{id}/status', [AdminController::class, 'updateStatus'])
    ->middleware(\App\Http\Middleware\AdminMiddleware::class);
