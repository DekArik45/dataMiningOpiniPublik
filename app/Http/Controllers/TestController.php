<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\SentimentHelper;

class TestController extends Controller
{
    public function index()
    {
        return SentimentHelper::instance()->getDataFromCSV();

    }
}
