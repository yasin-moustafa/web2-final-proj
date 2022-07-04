@extends('admin.layout.master')
@section('title')
    Store
@endsection
@section('titlePage')
    Creatte Products Page
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
                    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Products name</label>
                                <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-ivanlid @enderror" id="name" placeholder="Enter products name">
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
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" value="{{old('price')}}" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Enter description">
                                @error('price')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
<!--                            <div class="form-group">
                                <label for="category">Select category</label>
                                <select name="category" class="form-control  @error('category') is-invalid @enderror">
                                    <option>No choice</option>
                                    @foreach(\App\Models\Categore::all() as $product)
                                    <option value="{{$product->categores_id}}">{{$product->name}}</option>

                                    @endforeach

                                </select>
                                @error('category')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="exampleInputFile">Product Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" clsas="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose image</label>
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror

                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
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
