@extends('layouts.admin')

@section('title')
    Stuff create
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Stuff</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="container">
                <form action="{{ route('admin.stuffs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="stuff_name_input" class="form-label">Name</label>
                        <input type="text" class="form-control" id="stuff_name_input" placeholder="Name" name="name" value="{{ old('name') }}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stuff_age_input" class="form-label">age</label>
                        <input type="number" class="form-control" id="stuff_age_input" placeholder="age" name="age" value="{{ old('age') }}">
                        @error('age')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stuff_position_input" class="form-label">Position</label>
                        <input type="text" class="form-control" id="stuff_postion_input" placeholder="Position" name="position" value="{{ old('position') }}">
                        @error('position')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stuff_descrition_input" class="form-label">Describtion</label>
                        <input type="text" class="form-control" id="stuff_describtion_input" placeholder="Describtion" name="describtion" value="{{ old('describtion') }}">
                        @error('desccribtion')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stuff_photo_upload" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="news_photo_input" placeholder="Photo URL" name="photo" value="{{ old('photo') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
      </div>
    </section>
@endsection

