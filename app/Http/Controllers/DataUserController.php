<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;
use DataTables;

class DataUserController extends Controller
{
    public function index() {

        return view('data-user');
    }

    public function json() {
        return DataTables::of(DataUser::limit(10))->make(true);
    }
}
