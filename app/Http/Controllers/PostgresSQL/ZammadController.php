<?php

namespace App\Http\Controllers\PostgresSQL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZammadController extends Controller
{
    //
    public function getFunciones()
    {
        return DB::select('select * from tbl_psql');
    }
}
