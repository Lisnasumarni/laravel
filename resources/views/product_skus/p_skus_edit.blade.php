<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Skus</title>
</head>
<body>
    <div class="card-body">
        <form  action="{{ url('update_productskus',$productskus->id) }}" method="POST" >
            @csrf
            <h2>Edit data Product Skus</h2>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
             
            <div class="mb-4 form-outline">
                <label class="form-label" for="form3Example3">Product Id</label>
                <select  class="form-control" name="product_id" id="product_id">
                    <option >{{$productskus-> product_id  }}</option>
                    @foreach ($product as $item)
                      <option value="{{ $item->id }}" required>{{ $item->id }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-4 form-outline">
                
                <label class="form-label" for="form3Example3">price</label>
                <input type="text" id="price" class="form-control" name="price" value="{{  $productskus-> price }}" required autocomplete="off"/>
                
            </div>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="mb-4 form-outline">
                <label class="form-label" for="form3Example3">Sku</label>
                <input type="text" id="sku" class="form-control" value="{{ $productskus-> sku }}" name="sku" required autocomplete="off"/>
                
            </div>
            <!-- Submit button -->
            <button type="submit" class="mb-4 btn btn-primary btn-block">Simpan</button>
          </form>
    </div>
    
</body>
</html>