<?php

use Core\Page;
use Modules\Crud\Libraries\Repositories\CrudRepository;

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

// init table fields
$tableName  = 'exam_schedules';
$table      = tableFields($tableName);
$fields     = $table->getFields();
$module     = $table->getModule();
$success_msg = get_flash_msg('success');
$error_msg   = get_flash_msg('error');

// get data
$crudRepository = new CrudRepository($tableName);
$crudRepository->setModule($module);
// $data           = $crudRepository->get();

if(isset($_GET['draw']))
{
    return $crudRepository->dataTable($fields);
}

Page::pushFoot("<script src='".asset('assets/crud/js/crud.js')."'></script>");

return view('dashboard/views/index', compact('fields', 'tableName', 'success_msg', 'error_msg', 'crudRepository'));