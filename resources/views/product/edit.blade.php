@extends('backend.home')
@section('title')
    <title>Chỉnh sửa khách hàng</title>
@endsection
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">type</label>
                        <input type="text" class="form-control" name="type" value="{{ $product->type }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">origin</label>
                        <input type="text" class="form-control" name="origin" value="{{ $product->origin }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_of_produce</label>
                        <input type="date" class="form-control" name="date_of_produce" value="{{ $product->date_of_produce }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alcohol_concentration</label>
                        <input type="text" class="form-control" name="alcohol_concentration" value="{{ $product->alcohol_concentration }}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">image</label>
                        <input type="file" class="form-control" name="image" value="{{ $product->image }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
