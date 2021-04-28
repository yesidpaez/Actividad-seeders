<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
class CompaniesController extends Controller
{
    public function index(){
        // select * from companies
        //$companies = Companies::all();
        $companies = Companies::paginate(5);
        return view('companies.index', compact('companies'));
    }
}
