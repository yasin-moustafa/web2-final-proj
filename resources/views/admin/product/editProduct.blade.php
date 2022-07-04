@extends('admin.layout.master')
@section('title')
    Store
@endsection
@section('titlePage')
    Edit Products Page
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
                            <h3 class="card-title">Edit product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('product.update',[$product->id])}}" enctype="multipart/form-data">

                            @csrf

                            <!--use support put in htmll-->
                             <input type="hidden" name="_method" value="put">


                                <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Products name</label>
                                    <input name="name" value="{{$product->name}}" type="text" class="form-control" id="name" placeholder="Enter products name">
                                </div>
                                <div class="form-group">
                                    <label for="dec">Description</label>
                                    <textarea name="dec"  class="form-control" rows="3" placeholder="Enter description...">{{$product->dec}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" value="{{$product->price}}" class="form-control" id="price" placeholder="Enter description">
                                </div>
                                <div class="form-group">
                                    <label for="categores_id">Select</label>
                                    <select name="categores_id" class="form-control">
                                        <option >No choice</option>
                                        @foreach(\App\Models\Categore::all() as $product)
                                            <option value="{{$product->categores_id}} @if(old($product->categores_id) == $product->id) selected @endif">{{$product->categores_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" clsas="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose image</label><
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div><br>
                                        <img src="{{asset('storage/'.$product->image)}}" alt="product image" style="display: block; width: 80px ;height: 60px ; border-radius: 1px">                                        </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
