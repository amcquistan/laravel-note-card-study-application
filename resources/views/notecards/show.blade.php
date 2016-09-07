@extends('layouts.app')

@section('content')
<h1>{{ $subject->name }}</h1>
<div class='container'>
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