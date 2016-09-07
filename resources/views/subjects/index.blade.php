@extends('layouts.app')

@section('content')

<div class='container'>
    <div class='row'>
        <div class='col-md-8'><h1>Hello {{ $user->name }}</h1></div>
        <div class='col-md-4'>
            <a href='{{ url('/subject') }}' class='btn btn-lg btn-info'><span class='fa fa-btn fa-plus'></span>Add Subject</a>
        </div>
    </div>
    <br />
    <div class='col-sm-offset-2 col-sm-8'>
        <div class='panel panel-default'>
            <div class='panel-heading'>My Subjects</div>
            <div class='panel-body'>
                
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userSubjects as $userSubject)
                        <tr>
                            <td align='center' class='table-text'>{{ $userSubject->name }}</td>
                            <td align='right'>
                                <form action='/usersubject' method='POST'>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type='hidden' name='user_subject_id' value='{{ $userSubject->id }}' />
                                    <button type='submit' id='delete-usersubject-{{ $userSubject->id }}' class='btn btn-default'>
                                        <i class='fa fa-btn fa-trash'></i>Remove
                                    </button>
                                </form>
                            </td>
                            <td align='left'>
                            <a class='btn btn-default' href='{{ url('/subject/'. $userSubject->subject_id .'/notecards') }}'>
                                    <i class='fa fa-btn fa-eye' aria-hidden="true"></i> Cards
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
        
        
        <div class='panel panel-default'>
            <div class='panel-heading'>All Subjects</div>
            <div class='panel-body'>
                
                <!-- display validation errors -->
                @include('common.errors')
                
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <td align='center' class='table-text'>{{ $subject->name }}</td>
                            <td align='right'>
                                <form action='/usersubjects' method='POST'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='subjectid' value='{{ $subject->id }}' />
                                    <button type='submit' id='add-usersubject-{{ $subject->id }}' class='btn btn-default'>
                                        <i class='fa fa-btn fa-plus'></i>Add to My Subjects
                                    </button>
                                </form>
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