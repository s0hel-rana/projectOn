@extends('app1')

@section('content1')


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-3">
   
    

            <form action="/create" method="POST">
              @csrf
                <div class="form-group">
                  <label for="product_name">Product Name </label>
                  <input type="text" id="product_name" class="form-control" placeholder="Product Name" name="product_name">
                </div>


                <div class="form-group">
                  
            
             
                  <label for="iproduct_catagoryd">Product Catagory</label>
                  <select class="form-control" id="iproduct_catagoryd" name="iproduct_catagoryd">
                    @foreach ($catagorys as $catagory)
                  <option value="{{$catagory->id}}">{{$catagory->iproduct_catagoryd}}</option>
                       {{-- cata model database id     localhost database name --}}
                    @endforeach
                     
                      
                    
                    
                   
                  </select>
              
                </div>

               
                <div class="form-group">
                  <label for="product_quality">Product Quality </label>
                  <input type="number" id="product_quality" class="form-control" placeholder="Product Quality" name="product_quality">
                </div>
                <div class="form-group">
                  <label for="product_price">Product Price </label>
                  <input type="text" id="product_price" class="form-control" placeholder="Product Price" name="product_price">
                </div>
                <div class="form-group form-check">
                <label for="product_discription">Product Descriptiion </label>
                  <textarea id="product_discription" class="form-control" cols="80" rows="8" placeholder="Write" name="product_discription"></textarea>
                </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection



