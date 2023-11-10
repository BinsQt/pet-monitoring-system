<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function dbdata() {
        // fetch data send from arduino using GET method
        $_pid = "1";
        $_bpm = $_GET['bpm'];
        $_temp = $_GET['temp'];
        $_movement = $_GET['movement'];

        // insert sensor value to database
        $data=array('pid'=>$_pid, 'bpm'=>$_bpm,"temp"=>$_temp,"movement"=>$_movement);
        DB::table('pet_status')->insert($data);
    }

    public function showdata() {
        $status = DB::select('select * from pet_status Where sid=(SELECT max(sid) FROM pet_status)');
        return view('main.status', ['datas' => $status]);
    }

    public function add(Request $request) {

        $uid = auth()->id();
        $petname = $request->input('petname');
        $gender = $request->input('gender');
        $breed = $request->input('breed');
        $color = $request->input('color');
        $birthday = $request->input('birthday');
        $age = Carbon::now()->diffInMonths($birthday);

        $petdata=array('uid'=>$uid,'name'=>$petname,"gender"=>$gender,"breed"=>$breed,"color"=>$color,"birthday"=>$birthday,"age"=>$age);
        DB::table('pet')->insert($petdata);

        return view('main.dashboard')->with('message', 'Your Pet is added');
    }

    public function show() {
        $pets = $_GET['submit'];
        $petdata = DB::select("select * from pet where pid = '$pets' ");

        return view('main.store', ['pet' => $petdata]);

    }
}
