<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CouncillorController;
use App\Models\Page;
use App\Models\Councillor;


Route::get('/', function () {
    $councillors = Councillor::with('portfolio')->get();
    return view('pages/home', ['councillors' => $councillors]);
});

Route::resource('/councillors', CouncillorController::class);

// Route::get('/', [PageController::class, 'show'])->name('page.home');
// Route::get('/about', [PageController::class, 'about'])->name('page.about');
// Route::get('/history', [PageController::class, 'history'])->name('page.history');
// Route::get('/council', [PageController::class, 'council'])->name('page.council');
// Route::get('/contact-us}', [IssueController::class, 'show'])->name('contact');


// Route::get('/{page}', PageController::class)
//     ->name('page')
//     ->where('page', 'home|contact-us|about|history|council');

try {
    $pages = Page::all();
    foreach ($pages as $page) {
        $name = 'page.' . $page->slug;
        // Route::get('/' . $page->slug, [PageController::class, 'show'])->name($name);
        Route::view('/' . $page->slug, 'pages.'.$page->template, ['page' => $page])->name($name);
    }
} catch (Exception $e) {
    echo '*************************************' . PHP_EOL;
    echo 'Error fetching database pages: ' . PHP_EOL;
    echo $e->getMessage() . PHP_EOL;
    echo '*************************************' . PHP_EOL;
}
