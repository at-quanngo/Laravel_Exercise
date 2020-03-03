@extends('layout')

@section('content')
    <a class="" href="{{ route('products.index') }}">Back</a>
	<table>
        <tr>
            <td>id</th>
            <td>name</td>
            <td>quality</td>
            <td>category_id</td>
            <td>description</td>
        </tr>
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quality }}</td>
            <td>{{ $product->category_id }}</td>
            <td>{{ $product->description }}</td>

        </tr>

    </table>
@endsection