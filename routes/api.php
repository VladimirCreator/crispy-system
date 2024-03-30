<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotebookController;

Route::controller(NotebookController::class)
	->prefix('v1')
	->group(function () {
		Route::get('/notebook', 'index');
		Route::get('/notebook/{id}', 'read');

		Route::post('/notebook', 'create');
		Route::delete('/notebook/{id}', 'delete');
		Route::post('/notebook/{id}', 'update');
	});
