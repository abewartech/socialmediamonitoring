<?php

namespace App\Http\Controllers;

class InfluencerController extends Controller
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
            'Influencer' => false,
        ];
        return view(backpack_view('influencer'), $this->data);
    }
}
