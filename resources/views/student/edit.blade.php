@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

        @if(session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Student with Image
                    <a href="{{ url('students') }}" class="btn btn-danger float-end">Back</a>
                    </h4>                    
                </div>
                <div class="card-body">
                    <form action="{{ url('update-student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" class="form-control" name="name" value=" {{ $student->name }} ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" class="form-control" name="email" value=" {{ $student->email }} ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" class="form-control" name="course" value=" {{ $student->course }} ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Profile Image</label>
                            <input type="file" class="form-control" name="profile_image">
                            <img src="{{ asset('uploads/students/'.$student->profile_image) }}" width="70px" height="70px" alt="image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection