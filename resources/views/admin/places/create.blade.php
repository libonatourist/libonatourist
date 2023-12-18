@extends('layout.layout')
@section('title', 'Add Place')
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
                    <a type="button" href="{{ route('admin.places.index') }}" class="btn btn-default float-right">
                        <i class="fa fa-arrow-left"></i>
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
                    <form action="{{ route('admin.places.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category_id">Category</label>
                                            <select class="form-control" name="category_id" id="category_id" required>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Place Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" name="description" id="summernote" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" name="latitude" id="latitude" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="longitude">Longitude</label>
                                            <input type="text" name="longitude" id="longitude" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="guideline">Guideline Image</label>
                                            <input type="file" name="guideline" id="guideline" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>

                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-6">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="view_url">360View URL</label>
                                            <input type="text" name="view_url" id="view_url" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="guideline">place Images</label>
                                            <input type="file" name="images[]" id="guideline" class="form-control"
                                                placeholder="" aria-describedby="helpId" multiple required>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

    </section>
@endsection
@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

        })
    </script>
@endpush
