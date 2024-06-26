<?php

use App\Models\Councillor;
use App\Models\Page;
use App\Models\Committee;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
 

Breadcrumbs::for('pages.home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('pages.home'));
});

$pages = Page::all();
foreach ($pages as $page) {
    Breadcrumbs::for('page.'.$page->slug, function (BreadcrumbTrail $trail) use ($page) {
        $parent = ($page->parent) ? 'page.'.$page->parent : 'pages.home';
        $trail->parent($parent);
        $trail->push($page->title, route('page.'.$page->slug));
    });
}

//Councillor
Breadcrumbs::for('councillors.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('pages.home');
    $trail->push('Councillors', route('councillors.index'));
});

Breadcrumbs::for('councillors.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('councillors.index');
    $trail->push('Councillors', route('councillors.create'));
});

Breadcrumbs::for('councillors.show', function (BreadcrumbTrail $trail, Councillor $councillor) {
    $trail->parent('councillors.index');
    $trail->push($councillor->full_name, route('councillors.show', $councillor));
});

Breadcrumbs::for('councillors.edit', function (BreadcrumbTrail $trail, Councillor $councillor) {
    $trail->parent('councillors.show');
    $trail->push('Edit', route('councillors.edit', $councillor));
});

//Committee
Breadcrumbs::for('committees.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('pages.home');
    $trail->push('Committees', route('committees.index'));
});

Breadcrumbs::for('committees.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('committes.index');
    $trail->push('Committees', route('committees.create'));
});

Breadcrumbs::for('committees.show', function (BreadcrumbTrail $trail, Committee $committee) {
    $trail->parent('committees.index');
    $trail->push($committee->title, route('committees.show', $committee));
});

Breadcrumbs::for('committees.edit', function (BreadcrumbTrail $trail, Committee $committee) {
    $trail->parent('committees.show');
    $trail->push('Edit', route('committees.edit', $committee));
});

