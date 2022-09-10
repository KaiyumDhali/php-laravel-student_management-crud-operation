@extends('master')

@section('title')
    Course Page
@endsection

@section('body')
    <section class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Add Course Form</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('student.update',['id' => $student->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Title</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$student->title}}" name="title" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Teacher Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$student->name}}" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Fee</label>
                                    <div class="col-md-9">
                                        <input type="number" value="{{$student->fee}}" name="fee" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Duration</label>
                                    <div class="col-md-9">
                                        <input type="text" name="duration" value="{{$student->duration}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Starting Date</label>
                                    <div class="col-md-9">
                                        <input type="date" name="date" value="{{$student->date}}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Course Objective</label>
                                    <div class="col-md-9">
                                        <textarea name="objective" class="form-control">{{$student->objective}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Course Details</label>
                                    <div class="col-md-9">
                                        <textarea name="details" class="form-control">{{$student->details}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control"/>
                                        <img src="{{asset($student->image)}}"style="height: 100px; width: 100px;">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success " value="Save"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



