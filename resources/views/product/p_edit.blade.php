<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <div class="card-body">
        <form  action="{{ url('update_product',$product->id) }}" method="POST" >
            @csrf
            <h2>Edit data product </h2>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="mb-4 form-outline">
                <label class="form-label" for="form3Example3">Product Name</label>
                <input type="text" id="product_name" class="form-control" value="{{ $product->product_name }}" name="product_name" required autocomplete="off"/>
                
            </div>
            <!-- Submit button -->
            <button type="submit" class="mb-4 btn btn-primary btn-block">Simpan</button>
          </form>
    </div>
    
</body>
</html>