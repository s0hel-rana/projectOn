@extends('app1')

@section('content1')

<div class="row">
    <div class="col-md-4 offset-md-3">

<form action="{{ route('product_add') }}" method="POST">
    @csrf

 <div class="form-group">
    <label for="product_name">Product Catagory </label>
    <input type="text" id="product_name" class="form-control" placeholder="Product Name" name="iproduct_catagoryd">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
    </div>
</div>
@endsection