@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8'><h1>{{ $subject->name }}</h1></div>
        <div class='col-md-offset-2 col-md-2'><a class='btn btn-default' href='{{ url('/notecard/' . $noteCard->id . '/next') }}'>Next <i class="fa fa-hand-o-right" aria-hidden="true"></i></a></div>
    </div>
    
    <div class='col-sm-offset-2 col-sm-8'>
        <div>            
            <input type='hidden' name='subject_id' value='{{ $subject->id }}' />
            
            <div class='form-group'>
                <label for='title'>Title: </label>
                <div class='form-control'>
                    {{ $noteCard->title }}
                </div>
            </div>
            
            <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#answer'>
                Show Card / Hide
            </button>
            <div id='answer' class='collapse'>
                <div class='form-group'>
                    <label for='body'>Body: </label>
                    <div>
                        <textarea class='form-control' name='body' rows='5' id='body' readonly="readonly">
                            {{ $noteCard->body }}
                        </textarea>
                    </div>
                </div>
            </div>            
            
        </div>
    </div>
</div>

@endsection