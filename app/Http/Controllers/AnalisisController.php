<?php

namespace App\Http\Controllers;

class AnalisisController extends Controller
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
            'Analisis' => false,
        ];
        return view(backpack_view('analisis'), $this->data);
    }
}
