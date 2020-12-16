@extends('layouts.app')

@section('content')
    <div class="rounded"
    style="background-color: #E8E8E8;
margin: 20px;">
        <div style="padding: 20px;" >
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('students.index') }}" title="Go back"> <i
                            class="fas fa-backward "></i> </a>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1><strong>Edit Course Info.</strong></h1>
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

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course ID:</strong>
                    <input type="text" class="form-control" name="courseId"
                        placeholder="Course ID">{{ $student->courseId }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course Name:</strong>
                    <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Classroom:</strong>
                    <input type="text" name="classroom" class="form-control" placeholder="{{ $student->classroom }}"
                        value="{{ $student->classroom }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lecturer:</strong>
                    <input type="number" name="teacher" class="form-control" placeholder="{{ $student->teacher }}"
                        value="{{ $student->teacher }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>

    </form>
    </div>
@endsection
