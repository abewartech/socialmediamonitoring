<?php

namespace App\Http\Controllers;

class PostingBaruController extends Controller
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
            'Posting Baru' => false,
        ];
        return view(backpack_view('posting'), $this->data);
    }
}
