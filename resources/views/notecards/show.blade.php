@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-sm-8'><h1>{{ $subject->name }}</h1></div>
    </div>
    
    <div class='row'>
        <div class='col-sm-offset-10 col-sm-1'>
            <a href='{{ url('/notecard/' . $noteCard->id .'/edit') }}' class='btn btn-md btn-default'>
                <i class="fa fa-pencil fa-fw"></i> Edit
            </a>
        </div>
        <div class='col-sm-1'>
            <a class='btn btn-default' href='{{ url('/notecard/' . $noteCard->id . '/next') }}'>
                Next <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    
    <div class='col-sm-offset-1 col-sm-11'>
        <div>            
            <input type='hidden' name='subject_id' value='{{ $subject->id }}' />
            
            <div class='form-group'>
                <label for='title'>Title: </label>
                <input type='text' class='form-control' type='text' name='title' id='title' 
                       readonly="readonly" value='{{ $noteCard->title }}'/>
            </div>
            
            <div class='form-group'>
                <label for='title'>Question: </label>
                <textarea class='form-control' name='question' id='question' rows='7' 
                          readonly="readonly" value='{{ $noteCard->question }}'>
                    {{ $noteCard->question }}
                </textarea>
            </div>
            
            <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#answer'>
                Show Card / Hide
            </button>
            <div id='answer' class='collapse'>
                <div class='form-group'>
                    <label for='answer'>Answer: </label>
                    <div>
                        <textarea class='form-control' name='answer' rows='4' id='answer' 
                                  readonly="readonly" value='{{ $noteCard->answer }}'>{{ $noteCard->answer }}</textarea>
                    </div>
                </div>
            </div>            
            
            
            
        </div>
    </div>
</div>

@endsection