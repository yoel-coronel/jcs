<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiciosDAO\IMarcaDAO;

class HomeController extends Controller
{
    protected $mi;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IMarcaDAO $imarcadao)
    {
       // $this->middleware('auth');
        $this->mi = $imarcadao;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function datos(){

        return $this->mi->showAll();

    }
}
