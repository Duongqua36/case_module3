@extends('backend.home')
@section('title')
    <title>Danh sach sp</title>
@endsection
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h2>Danh Sách sản phẩm</h2></div>
            <a class="btn btn-primary" href="{{ route('product.add') }}">Thêm mới</a>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên sản phẩm</th>
                    <th>giá</th>
                    <th>loại</th>
                    <th>xuất xứ</th>
                    <th>ngày sản xuất</th>
                    <th>nồng độ cồn</th>
                    <th>ảnh</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)

                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->type }}</td>
                        <td>{{ $product->origin }}</td>
                        <td>{{ $product->date_of_produce }}</td>
                        <td>{{ $product->alcohol_concentration }}</td>
                        <td><img width="60px" src="{{asset('storage/'.$product->image)}}"></td>
                        <td><a href="{{ route('product.delete', $product->id) }}" class="btn btn-outline-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">sửa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $products ->links() }}
            </div>
        </div>
    </div>
@endsection
