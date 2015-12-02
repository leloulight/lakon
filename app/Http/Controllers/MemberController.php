<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Hash;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller {

    public function __construct() {
//        $this->filter('before', 'auth');
    }

    function getLogin() {
        return view('auth.login');
//        echo Hash::make('dewi');
//        exit();
    }

    function postLogin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $userdata = array(
            'pwd' => $password,
            'email' => $email,
            'password' => Hash::make($password)
        );
//        echo json_encode($userdata);
//        exit();
        $exists = DB::table('member_account')->where('email', $email)->where('password', md5($password))->first();
        if ($exists != null) {
            Session::put('logged_in', TRUE);
            Session::put('userid', $exists->id);
            Session::put('username', $exists->username);
            Session::put('fullname', $exists->fullname);
            Session::put('email', $exists->email);
            return Redirect::to('/basic');
        } else {
            return Redirect::back()->with('message', 'Please check your username and password')
                            ->with('type', 'danger');
        }
        exit();
    }

    function getIndex() {
//        return view('member.layout');
        return view('member.basicinfo');
    }

    function getBasic() {
        return view('member.basicinfo');
    }

    function postBasic(Request $request) {
        $data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_basic_info')->insert($data);
    }

    function getExperience() {
        return view('member.experience');
    }

    function postExperience(Request $request) {
        $data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_experience')->insert($data);
    }

    function getObjective() {
        return view('member.objective');
    }

    function postObjective(Request $request) {
$data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_objective')->insert($data);
    }

    function getReference() {
        return view('member.reference');
    }

    function postReference(Request $request) {
        $data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_reference')->insert($data);
    }

    function getInterest() {
        return view('member.interest');
    }

    function postInterest(Request $request) {
        $data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_interest')->insert($data);
    }

    function getQualification() {
        return view('member.qualification');
    }

    function postQualification(Request $request) {
        $data = $request->all();
        $data['id_member'] = 1;
        echo json_encode($data);
        DB::table('member_qualification')->insert($data);
    }

    function getEducation() {
        return view('member.education');
    }

    function postEducation() {
        
    }

}
