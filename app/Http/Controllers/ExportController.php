<?php

namespace App\Http\Controllers;

class ExportController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    public function index()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Ekspor Data' => false,
        ];
        return view(backpack_view('export'), $this->data);
    }
}
