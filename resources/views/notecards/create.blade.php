@extends('layouts.app')

@section('content')
<h1>Create New Card for {{ $subject->name }}</h1>
<div class='container'>
    <div class='col-sm-offset-2 col-sm-8'>
        <form action='/notecard' method='POST'>
            {{ csrf_field() }}
            
            <input type='hidden' name='subject_id' value='{{ $subject->id }}' />
            
            <div class='form-group'>
                <label for='title'>Title: </label>
                <input type='text' class='form-control' type='text' name='title' id='title'/>
            </div>
            
            <div class='form-group'>
                <label for='title'>Question: </label>
                <textarea class='form-control' name='question' id='question' rows='7'>
                </textarea>
            </div>
            
            <div class='form-group'>
                <label for='answer'>Answer: </label>
                <div>
                    <textarea class='form-control' name='answer' rows='4' id='answer' ></textarea>
                </div>
            </div>
            
            <div class='form-group'>
                <button type='submit' class='btn btn-default'>Save</button>
            </div>
            
        </form>
    </div>
</div>

@endsection