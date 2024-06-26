@extends('admin_view.layouts.app')

@section('title')
  MediaTTC - Add Course
@endsection

@section('content')
<div class="site-section mt-5">
    <div class="container mt-5">
        <form action="{{ route('add_courses_info') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group mb-4 mx-auto text-center">
                    <h3>Add Course</h3>
                </div>
            </div>
            @if (session()->has('error'))
              <p class="mb-0 alert alert-danger">{{ session()->get('error') }}</p>
            @endif
            @if (session()->has('success'))
              <p class="mb-0 alert alert-success">{{ session()->get('success') }}</p>
            @endif
            {{-- <div class="row">
                <div class="col-md-6 form-group mt-5">
                    <b class="text-secondary"> The <span class="text-warning">*</span> given are mandatory!</b>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="title"><span class="text-warning">*</span> Course Title</label>
                    <input type="text" id="title" required name="title" class="form-control form-control-lg" />
                    @error('title')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="tagline"> Tagline</label>
                    <input type="text" id="tagline" name="tagline" class="form-control form-control-lg" />
                    @error('tagline')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="teacher_name"> Teacher / Instructor</label>
                    <input type="text" id="teacher_name" name="teacher_name" class="form-control form-control-lg" />
                    @error('teacher_name')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" class="form-control form-control-lg" />
                    @error('description')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="start_date"><span class="text-warning">*</span> Start Date</label>
                    <input type="date" min="1990-01-31" id="start_date" required name="start_date" class="form-control form-control-lg" />
                    @error('start_date')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="end_date"><span class="text-warning">*</span> End Date</label>
                    <input type="date" min="1990-01-31" id="end_date" required name="end_date" class="form-control form-control-lg" />
                    @error('end_time')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="start_time"><span class="text-warning">*</span> Starts At</label>
                    <input type="time" id="start_time" required name="start_time" class="form-control form-control-lg" />
                    @error('start_time')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-md-6 form-group">
                    <label for="end_time"><span class="text-warning">*</span> Ends At</label>
                    <input type="time" id="end_time" required name="end_time" class="form-control form-control-lg" />
                    @error('end_time')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="content"><span class="text-warning">*</span> Image</label>
                    <input type="file" id="content" required name="content" class="form-control form-control-lg" />
                    @error('content')
                    <p class="mb-0 alert alert-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" value="Add Course" class="btn btn-primary btn-lg px-5" />
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


