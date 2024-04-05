@extends('master.admin')
@section('title', 'Product manager')
@section('main')

<style>
    .btn-sm {
        width: 70px;
        height: 30px;
        margin-left: 10px
    }
</style>

<form action="" method="POST" class="form-inline" role="form">
    <a href="{{ route('product.create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add new</a>
</form>

<br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $model)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $model->name }}</td>
            <td>{{ $model->price }} <span class="label label-success">{{ $model->sale_price }}</span></td>
            <td>{{ $model->status == 0 ? 'Hidden' : 'Publish' }}</td>
            <td>
                <img src="/uploads/product/{{ $model->image }}" width="40">
            </td>
            <td class="text-right">
                <form action="{{ route('product.destroy', $model->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <a href="{{ route('product.edit', $model->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete it?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Links -->
{{ $data->links() }}

@stop()
