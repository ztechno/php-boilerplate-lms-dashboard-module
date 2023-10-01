<?php

use Core\Page;

Page::set_title("Dashboard");
Page::setActive("dashboard.index");

Page::setBreadcrumbs([
    [
        'url' => routeTo('/'),
        'title' => __('crud.label.home')
    ],
    [
        'url' => routeTo('dashboard'),
        'title' => __('dashboard.menu.dashboard')
    ],
]);

return view('dashboard/views/index');