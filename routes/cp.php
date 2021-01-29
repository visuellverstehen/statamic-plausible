<?php

use VV\Plausible\Http\Controller\PlausibleController;

/*
|--------------------------------------------------------------------------
| CP routes
|--------------------------------------------------------------------------
*/

Route::get('visit/plausible', [PlausibleController::class, '__invoke'])->name('plausible');
