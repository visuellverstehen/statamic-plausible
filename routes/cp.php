<?php

use VV\Plausible\Plausible;

/*
|--------------------------------------------------------------------------
| CP routes
|--------------------------------------------------------------------------
*/

Route::get('visit/plausible', function() {
    return redirect(Plausible::link());
})->name('plausible');
