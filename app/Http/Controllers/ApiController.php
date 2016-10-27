<?php

namespace App\Http\Controllers;

use App\Queries\GridQueries\GridQuery;
use App\Queries\GridQueries\WidgetQuery;
use App\Queries\GridQueries\MarketingImageQuery;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function widgetData(Request $request)
    {
        return GridQuery::sendData($request, new WidgetQuery);
    }

    public function marketingImageData(Request $request)
    {
        return GridQuery::sendData($request, new MarketingImageQuery);
    }
}
