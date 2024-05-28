@extends('layouts.admin')

@section('title')
    {{ $item->Name }}
@endsection

@section('content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex justify-content-between">
                <div><h1>{{$item->Name}}</h1></div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID</th>
                            <td>{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $item->name }}</td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>{{ $item->age }}</td>
                        </tr>
                        <tr>
                            <th><Pic></Pic>Position</th>
                            <td>{{ $item->position }}</td>
                        </tr>
                        <tr>
                            <th>Describtion</th>
                            <td>{{ $item->describtion }}</td>
                        </tr>
                        <tr>
                            <th>Photo Url</th>
                            <td>{{ $item->photo }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
@endsection
