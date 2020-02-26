@extends('app1')

@section('content1')


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-3">
   
                    <h1>Product Update</h1>

        <form action="{{route('product_update')}}" method="POST">
              @csrf
        <input type="hidden" name="Pid" value="{{$id}}" >
                <div class="form-group">
                  <label for="product_name">Product Name </label>
                <input type="text" id="product_name" class="form-control" placeholder="Product Name" name="product_name" value="{{$productdata->product_name}}">
                </div>
                <div class="form-group">
                  
            
             
                  <label for="iproduct_catagoryd">Product Catagory</label>
                  <select class="form-control" id="iproduct_catagoryd" name="product_catagory">
                    
                   
                    
                   
                  </select>
              
                </div>

                <div class="form-group">
                  <label for="product_quality">Product Quality </label>
                  <input type="number" id="product_quality" class="form-control" placeholder="Product Quality" name="product_quality" value="{{$productdata->product_quality}}">
                </div>
                <div class="form-group">
                  <label for="product_price">Product Price </label>
                  <input type="text" id="product_price" class="form-control" placeholder="Product Price" name="product_price" value="{{$productdata->product_price}}">
                </div>
                <div class="form-group form-check">
                <label for="product_discription">Product Descriptiion </label>
                  <textarea id="product_discription" class="form-control" cols="80" rows="8" name="product_discription">{{$productdata->product_discription}}</textarea>
                </div>
              <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection



