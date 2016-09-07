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
                <div>
                    <input class='form-control' type='text' name='title' id='title' />
                </div>
            </div>
            
            <div class='form-group'>
                <label for='body'>Body: </label>
                <div>
                    <textarea class='form-control' name='body' rows='5' id='body' ></textarea>
                </div>
            </div>
            
            <div class='form-group'>
                <button type='submit' class='btn btn-default'>Save</button>
            </div>
            
        </form>
    </div>
</div>

@endsection