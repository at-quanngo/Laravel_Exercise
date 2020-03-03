@extends('layout')

@section('content')
	<a class="" href="{{ route('products.index') }}">Back</a>
	<form action="{{ route('products.update') }}" method="POST">
	@method('PUT')
    @csrf
     <div class="row">
        <div>
            <div>
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div>
            <div>
                <strong>Quality:</strong>
                <input type="text" name="quality" class="form-control" placeholder="Quality">
            </div>
        </div>
        <div>
            <div>
                <strong>Category_id:</strong>
                <input type="text" name="category_id" class="form-control" placeholder="Category_id">
            </div>
        </div>
        <div>
            <div>
                <strong>Description:</strong>
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection