@extends('admin.layout.master')
@section('title')
    Store
@endsection
@section('titlePage')
    Creatte Category Page
@endsection
@section('body')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('categore.store')}}" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Products name</label>
                                    <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter products name">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="dec">Description</label>
                                    <textarea name="dec"  class="form-control @error('dec') is-invalid @enderror" rows="3" placeholder="Enter description...">{{old('dec')}}</textarea>
                                    @error('dec')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                    </div>
                                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    </form>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
