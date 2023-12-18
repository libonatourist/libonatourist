@extends('layout.layout')
@section('title', 'Reviews')
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
                                        <th>Place Name</th>
                                        <th>Number of Review</th>
                                        <th>Reviews</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($places as $place)
                                        <tr>
                                            <td>{{ $place->name }}</td>
                                            <td>
                                                {{ $place->reviews->count() }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.reviews.view', ['id' => $place->id]) }}"
                                                    role="button">
                                                    See Reviews
                                                </a>
                                            </td>
                                        </tr>
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
