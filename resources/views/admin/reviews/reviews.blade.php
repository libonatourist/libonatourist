@extends('layout.layout')
@section('title', 'Reviews')
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>
                        Reviews for {{ $place->name }}
                    </h1>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('admin.reviews') }}" class="btn btn-default">
                        Back
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
                                        <th>User</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review->user->name }}</td>
                                            <td>
                                                @for ($i = 1; $i <= $review->rating; $i++)
                                                    <i class="fa fa-star text-warning"></i>
                                                @endfor
                                            </td>
                                            <td>
                                                {{ $review->review }}
                                            </td>
                                            <td>
                                                {{ date('F Y h:i:s A', strtotime($review->created_at)) }}
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
