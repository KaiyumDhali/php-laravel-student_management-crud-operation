@extends('master')

@section('title')
    Manage Page
@endsection

@section('body')
    <section class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All blog data</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover text-center">
                                <thead >
                                <tr>
                                    <th>SL NO</th>
                                    <th>Course Title</th>
                                    <th>Teacher Name</th>
                                    <th>Course Fee</th>
                                    <th>Course Duration</th>
                                    <th>Starting Date</th>
                                    <th>Course Objective</th>
                                    <th>Course Details</th>
                                    <th>Course Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-primary">
                                @foreach($students as  $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$student->title}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->fee}}</td>
                                        <td>{{$student->duration}}</td>
                                        <td>{{$student->date}}</td>
                                        <td>{{$student->objective}}</td>
                                        <td>{{$student->details}}</td>
                                        <td><img src="{{asset($student->image)}}" alt="" style="height: 100px;width: 100px;"></td>
                                       <td>
                                           <a href="{{route('student.edit',['id' => $student->id])}}" class="btn btn-success">Edit</a>
                                           <a href="{{route('student.delete',['id' => $student->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this')">Delete</a>
                                       </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

