@extends('layouts.app')

@section('content')
<h1>Edit New Card for {{ $subject->name }}</h1>
<div class='container'>
    <div class='col-sm-offset-2 col-sm-8'>
        <form action='/notecard' method='POST'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            
            <input type='hidden' name='subject_id' value='{{ $noteCard->subject_id }}' />
            <input type='hidden' name='id' value='{{ $noteCard->id }}' />
            
            <div class='form-group'>
                <label for='title'>Title: </label>
                <input type='text' class='form-control' type='text' name='title' id='title' value='{{ $noteCard->title }}'/>
            </div>
            
            <div class='form-group'>
                <label for='title'>Question: </label>
                <textarea class='form-control' name='question' id='question' rows='7' value='{{ $noteCard->question }}'>
                {{ $noteCard->question }}
                </textarea>
            </div>
            
            <div class='form-group'>
                <label for='answer'>Answer: </label>
                <div>
                    <textarea class='form-control' name='answer' rows='4' id='answer'>
                        {{ $noteCard->answer }}
                    </textarea>
                </div>
            </div>
            
            <div class='form-group'>
                <button type='submit' class='btn btn-default'>Save</button>
            </div>
            
        </form>
    </div>
</div>

@endsection