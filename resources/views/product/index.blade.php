@extends('layout')

@section('content')
    <a class="" href="{{ route('categories.index') }}"> Category</a>
    <a class="" href="{{ route('products.index') }}"> Product</a>
    <a class="" href="{{ route('products.create') }}"> Create</a>
	<table>
        <tr>
            <td>id</th>
            <td>name</td>
            <td>quality</td>
            <td>category_id</td>
            <td>description</td>
        </tr>
        @foreach ($product as $value)
        <tr>
            <td><a href="{{ route('products.show',$value->id) }}">{{ $value->id }}</a></td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->quality }}</td>
            <td>{{ $value->category_id }}</td>
            <td>{{ $value->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('products.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection