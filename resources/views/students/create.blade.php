@extends('layouts.app')

@section('content')
    <div class="rounded"
          style="background-color: #E8E8E8;
margin: 20px;">
        <div class="rounded"
        style="padding: 20px;"
        >
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-light " href="{{ route('students.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
        </div>

        <div class="col-lg-12 margin-tb">
            <br />
            <div class="pull-left">
                <h1><strong>Add New Course</strong></h1>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course ID:</strong>
                    <input type="text" class="form-control" name="courseId"
                        placeholder="Course ID"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Classroom:</strong>
                    <input type="text" name="classroom" class="form-control" placeholder="Classroom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lecturer:</strong>
                    <input type="text" name="teacher" class="form-control" placeholder="Lecturer">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>

    </form>
            </div>
    </div>
@endsection
