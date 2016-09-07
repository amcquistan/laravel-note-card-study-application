<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usersubject;
use DB;

class UserSubjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function store(Request $request) {
        $userSubject = new Usersubject();
        $userSubject->subject_id = $request->subjectid;
        $userSubject->user_id = $request->user()->id;
        $userSubject->save();
        
        return redirect('/subjects');
    }
    
    public function delete(Request $request) {
        
        DB::table('usersubjects')
                ->where('id', $request->user_subject_id)
                ->delete();
        
        // $userSubject->delete();
        return redirect('/subjects');
    }
}
