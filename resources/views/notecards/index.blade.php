@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8'><h1>Hello {{ $user->name }}</h1></div>
        <div class='col-md-4'>
            <a href='{{ url('/notecard/' . $subject->id . '/create') }}' class='btn btn-lg btn-info'>
                <span class='fa fa-btn fa-plus'></span>Add Card
            </a>
        </div>
    </div>
    
    <br />
    <div class='col-sm-offset-2 col-sm-8'>
        <div class='panel panel-default'>
            <div class='panel-heading'>{{ $subject->name }} Cards</div>
            <div class='panel-body'>
                
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noteCards as $noteCard)
                        <tr>
                            <td class='table-text'>{{ $noteCard->title }}</td>
                            <td align='right'>
                                <a href='{{ url('/notecard/' . $noteCard->id) }}' class='btn btn-md btn-default'>
                                    <i fa fa-btn fa-eye></i> View
                                </a>
                                
                            </td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
        
    </div>
</div>

@endsection