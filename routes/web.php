<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('auth.login');
});;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('clients', ClientController::class);

Route::resource('documents', DocumentController::class);

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {

    $Username = $request->Username;
    $password = $request->password;

    if ($Username == 'admin' && $password == 'admin123') {

        return redirect('/dashboard');

    }

    return back();

});


Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])
    ->name('clients.edit');

Route::put('/clients/{client}', [ClientController::class, 'update'])
    ->name('clients.update');

Route::get('/documents/{id}/view', [DocumentController::class, 'view'])
    ->name('documents.view');

Route::get('/documents/{id}/download', [DocumentController::class, 'download'])
    ->name('documents.download');