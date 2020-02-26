@extends('app1')

@section('content1')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Catagory</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Description</th>
      <th scope="col">Created At</th>
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->product_name}}</td>
      <td>{{$product->relationBetweenCatagory->iproduct_catagoryd}}</td>
      <td>{{$product->product_quality}}</td>
      <td>{{$product->product_price}}</td>
      <td>{{$product->product_discription}}</td>
      <td>{{$product->created_at->diffForhumans()}}</td>
      <td>
        <a href="{{url("/edit")}}/{{$product->id}}" class="btn btn-success">Edit</a>
      <a href="{{url("/delete")}}/{{$product->id}}" class="btn btn-danger">Delete</a>
      </td>
      
     
    </tr>
    
    @endforeach
  </tbody>
</table>

@endsection
