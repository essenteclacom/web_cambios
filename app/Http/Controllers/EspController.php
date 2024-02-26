<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspController extends Controller {
    public function __invoke() {
        $url = Request()->headers->get('referer');
        $urlExplode = explode("/", $url);
        $count = count($urlExplode);
        if ($count > 0) {
            $curretPage = end($urlExplode);
        }
        switch ($curretPage) {
            case "home":
                return redirect('inicio');
                break;
            case "regulations":
                return redirect('normativas');
                break;
        }
    }
}
