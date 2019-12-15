<?php

namespace App\Http\Controllers;

class TrashController extends Controller
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
            'Trash Bin' => false,
        ];
        return view(backpack_view('trash'), $this->data);
    }
}
