<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Widget;

use App\Http\Requests;

class ApiController extends Controller
{
    public function widgetData()
    {
        $rows = Widget::select('id as Id',
            'name as Name',
            'created_at as Created')
            ->paginate(10);

        return response()->json($rows);
    }
}
