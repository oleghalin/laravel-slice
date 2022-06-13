<?php

namespace Khalin\LaravelSlice\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('slice::entrypoint');
    }
}
