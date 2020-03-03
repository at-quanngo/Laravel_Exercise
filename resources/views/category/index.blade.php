@extends('layout')

@section('content')
	<a class="btn btn-primary" href="{{ route('categories.index') }}"> Category</a>
    <a class="btn btn-primary" href="{{ route('products.index') }}"> Product</a>
	<table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        @foreach ($category as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>

        </tr>
        @endforeach
    </table>
@endsection