<?php
namespace App\Http\Controllers;
class HomeController extends Controller {

    function getIndex() {
        return view('member.layout');
    }

}
