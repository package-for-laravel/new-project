<?php

declare(strict_types=1);

// use Route::view so it can be cached
Route::view('', 'welcome');

// non-changing data?
// Route::middleware('cache.headers:public;max_age=2628000')
