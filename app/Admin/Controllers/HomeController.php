<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Qiaweicom\Admin\Controllers\Dashboard;
use Qiaweicom\Admin\Facades\Admin;
use Qiaweicom\Admin\Layout\Column;
use Qiaweicom\Admin\Layout\Content;
use Qiaweicom\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(Dashboard::title());

            $content->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
        });
    }
}
