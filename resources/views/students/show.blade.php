@extends('layouts.app')


@section('content')
    <div class="rounded "
    style="margin: 20px; background-color: #e8e8e8;">
        <div style="padding: 20px">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1><strong>Course: {{ $student->name }}</strong></h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
<br />
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Course ID:</strong></h2>
                <b><h3>{{ $student->courseId }}</h3></b>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Course Name:</strong></h2>
                <b><h3>{{ $student->name }}</h3></b>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Classroom:</strong></h2>
                <b><h3>{{ $student->classroom }}</h3></b>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Lecturer:</strong></h2>
                <b><h3>{{ $student->teacher }}</h3></b>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h2><strong>Date Created:</strong></h2>
                <b><h3>{{ date_format($student->created_at, 'l jS M Y') }}</h3></b>
            </div>
        </div>
    </div>
        </div>
    </div>>
@endsection
