@extends('layouts.app')

@section('content')
    <div class=" rounded" style="background-color: #E8E8E8 ">
        <div style="
        margin: 20px;
        padding: 20px;
                ">

            <div class="row">
                <div class="col-lg-12 margin-tb" style="margin-top: 20px">
                    <div class="pull-left">
                        <h1><strong>Course Manager</strong></h1>
                    </div>
                </div>
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <a class="btn btn-success" href="{{ route('students.create') }}" title="Create a project"> Add New Courses <i
                                    class="fas fa-plus-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <br/>
            <div class="rounded" style="background-color:#f1f1f1">
                <div>
                    <table class="table table-bordered table-responsive-lg " style="">
                        <thead class="thead-dark ">
                        <tr>
                            <th>No</th>
			    <th>Course ID</th>
                            <th>Couse Name</th>                            
                            <th>Classroom</th>
                            <th>Lecturer</th>
                            <th>Date Created</th>
                            <th width="280px">Action</th>
                        </tr>
                        </thead>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $student->courseId }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->classroom }}</td>
                                <td>{{ $student->teacher }}</td>
                                <td>{{ date_format($student->created_at, 'l jS M Y') }}</td>
                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                                        <a href="{{ route('students.show', $student->id) }}" title="show">
                                            <i class="fas fa-eye text-success  fa-lg" style="margin-right: 7px;"></i>
                                        </a>

                                        <a href="{{ route('students.edit', $student->id) }}">
                                            <i class="fas fa-edit  fa-lg"></i>

                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="delete"
                                                style="border: none; background-color:transparent;">
                                            <i class="fas fa-trash-alt fa-lg text-danger"></i>

                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div>
                    <br/>
                </div>

            </div>
            <div>
            </div>


    {!! $students->links() !!}

@endsection
