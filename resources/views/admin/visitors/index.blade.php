@extends('layout.layout')
@section('title', 'Visitors')
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
                    <div class="card-header">
                        <form action="{{ route('admin.visitors.filter') }}" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>From:</label>
                                    <input type="date" class="form-control" name="from" required />
                                </div>
                                <div class="col-md-3">
                                    <label>To:</label>
                                    <input type="date" class="form-control" name="to" required />
                                </div>
                                <div class="col-md-3">
                                    <br />

                                    <button type="submit" class="btn btn-primary" href="#">
                                        Filter
                                    </button>
                                    <a href="{{ route('admin.visitors') }}" class="btn btn-danger" href="#">
                                        reset
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Place Name</th>
                                        <th>Number of Visitors</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($places as $place)
                                        <tr>
                                            <td>{{ $place->name }}</td>
                                            <td>
                                                @if (isset($filter))
                                                    {{ views($place)->period(\CyrildeWit\EloquentViewable\Support\Period::create($startDate, $endDate))->count() }}
                                                @else
                                                    {{ views($place)->count() }}
                                                @endif
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
