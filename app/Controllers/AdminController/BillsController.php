<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\BillsModel;

class BillsController extends BaseController
{


    public function index()
    {
        if ($this->request->getMethod() === "get") {

            $billModel = new BillsModel;





            return view('admin/bills/index');
        }
    }

    public function create()
    {

        return view('admin/bills/create');
    }
}
