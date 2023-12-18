@extends('layout.layout')
@section('title', 'Places')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>
                        @yield('title')
                    </h1>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.places.create') }}" type="button" class="btn btn-primary float-right">
                        <i class="fa fa-plus-circle"></i>
                        Create
                    </a>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Posted by</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $page = 'place';
                                    @endphp
                                    @foreach ($places as $place)
                                        @php
                                            $id = $place->id;
                                        @endphp
                                        <tr>

                                            <td>{{ $place->category->name }}</td>
                                            <td>{{ $place->name }}</td>
                                            <td>{{ $place->address }}</td>
                                            <td>{{ @$place->user->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.places.edit', ['place' => $id]) }}"
                                                        type="button" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete{{ $id }}">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        @include('delete_modal')
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

    </section>
@endsection
