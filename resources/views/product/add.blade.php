@extends('backend.home')
@section('title')
    <title>Thêm mới khách hàng</title>
@endsection
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới khách hàng</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('product.add') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" @if($errors->has('name'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('name') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter price"@if($errors->has('price'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('price') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">type</label>
                        <input type="text" class="form-control" name="type"@if($errors->has('type'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('type') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">origin</label>
                        <input type="text" class="form-control" name="origin"@if($errors->has('origin'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('origin') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">date_of_produce</label>
                        <input type="date" class="form-control" name="date_of_produce"@if($errors->has('date_of_produce'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('date_of_produce') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">alcohol_concentration</label>
                        <input type="text" class="form-control" name="alcohol_concentration"@if($errors->has('alcohol_concentration'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('alcohol_concentration') !!}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">image</label>
                        <input type="file" class="form-control" name="image"@if($errors->has('image'))
                            <div class="help-block alert-danger">
                                {!! $errors->first('image') !!}
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
