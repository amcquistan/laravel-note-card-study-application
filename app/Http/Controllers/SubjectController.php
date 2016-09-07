<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use App\Usersubject;
use DB;

class SubjectController extends Controller
{
    /**
     * Create a new SubjectController instance
     * 
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Index action method.  Returns list of subjects.
     * 
     * @param Request $request
     */
    public function index(Request $request) {
        $user = $request->user();
        $subjects = Subject::leftJoin('usersubjects', 'subjects.id', '=', 'usersubjects.subject_id')
                        ->whereNull('user_id')
                        ->orWhere('user_id', '<>', $user->id)
                        ->select('name', 'subjects.id')
                        ->get();
        // $subjects = Subject::all();
        $userSubjects = DB::table('usersubjects')
                            ->join('subjects', 'usersubjects.subject_id', '=', 'subjects.id')
                            ->where('user_id', $user->id)
                            ->select('usersubjects.id', 'name', 'subject_id')
                            ->get();
        
        
        return view('subjects.index', [
                'subjects'=>$subjects,
                'user' => $user,
                'userSubjects' => $userSubjects
            ]);
    }
    
    public function showCreate(Request $request) {
        return view('subjects.create', [
            'user'=>$request->user()
        ]);
    }
    
    public function create(Request $request) {
        
        $rules = [
                'name'=>'required|max:200',
                'description'=>'required'
            ];
        $this->validate($request, $rules);
        
        DB::beginTransaction();
        
        try {
            $subject = Subject::create([
                'name'=>$request->name,
                'description'=>$request->description
            ]);

            $userSubject = new Usersubject();
            $userSubject->user_id = $request->user()->id;
            $userSubject->subject_id = $subject->id;
            $userSubject->save();
            
            DB::commit();
        } catch (Exception $ex) {
            DB::rollBack();
        }
            
        return redirect('/subjects');
    }
}
