<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notecard;
use App\Subject;

class NotecardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Request $request, $subject_id) {
        
        $noteCards = Notecard::where([
            ['user_id', '=', $request->user()->id],
            ['subject_id', '=', $subject_id]
        ])->get();
        
        
        
        return view('notecards.index', [
            'noteCards' => $noteCards,
            'subject' => Subject::find($subject_id),
            'user' => $request->user()
        ]);
    }
    
    public function showCreate(Request $request, $subject_id) {
        $subject = Subject::find($subject_id);
        
        return view('notecards.create', [
           'subject' => $subject 
        ]);
    }
    
    public function create(Request $request) {
        $noteCard = new Notecard();
        $noteCard->title = $request->title;
        $noteCard->body = $request->body;
        $noteCard->subject_id = $request->subject_id;
        $noteCard->user_id = $request->user()->id;
        $noteCard->save();
        
        return redirect('/subject/'. $request->subject_id .'/notecards');
    }
    
    public function show(Request $request, $id) {
        $noteCard = Notecard::find($id);
        
        return view('notecards.show', [
            'noteCard' => $noteCard,
            'subject' => Subject::find($noteCard->subject_id)
        ]);
    }
    
    public function edit(Request $request, $id) {
        $noteCard = Notecard::find($id);
        $subject = Subject::find($noteCard->subject_id);
        return view('notecards.edit', [
            'noteCard' => $noteCard,
            'subject' => $subject
        ]);
    }
    
    public function update(Request $request) {
        // TODO: implement save functionality
    }
}
