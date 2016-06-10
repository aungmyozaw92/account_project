<?php

Breadcrumbs::register('admin.access.category.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.access.category.management'), route('admin.access.category.index'));
});

Breadcrumbs::register('admin.access.category.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.access.category.index');
    $breadcrumbs->push(trans('menus.backend.access.category.create'), route('admin.access.category.create'));
});

Breadcrumbs::register('admin.access.category.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.access.category.index');
    $breadcrumbs->push(trans('menus.backend.access.category.edit'), route('admin.access.category.edit', $id));
});