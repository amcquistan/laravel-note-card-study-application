@extends('layouts.app')

@section('content')
<h1>Create New Subject</h1>
<div class='container'>
    <div class='col-sm-offset-2 col-sm-8'>
        <form action='/subject' method='POST'>
            {{ csrf_field() }}
            
            <div class='form-group'>
                <label for='name'>Name: </label>
                <div>
                    <input class='form-control' type='text' name='name' id='name' />
                </div>
            </div>
            
            <div class='form-group'>
                <label for='description'>Description: </label>
                <div>
                    <textarea class='form-control' name='description' rows='5' id='description' ></textarea>
                </div>
            </div>
            
            <div class='form-group'>
                <button type='submit' class='btn btn-default'>Save</button>
            </div>
            
        </form>
    </div>
</div>

@endsection