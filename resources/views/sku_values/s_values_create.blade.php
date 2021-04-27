<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sku Values</title>
</head>
<body>
    <div class="card-body">
        <form  action="{{ url('store_skuvalues') }}" method="POST" >
            @csrf
            <h2>Input data Sku Values </h2>
            <div class="mb-4 form-outline">
                <label class="form-label" for="form3Example3">Product Id</label>
                <select  class="form-control" name="product_id" id="product_id">
                   
                    <option value="">-Pilih-</option>
                    @foreach ($product as $item)
                      <option value="{{ $item->id }}" required>{{ $item->id }}</option>
                    @endforeach
                </select>
              </div>
              <div class="card-body">
              <label class="form-label" for="form3Example3">sku Id</label>
              <select  class="form-control" name="sku_id" id="sku_id">
                 
                  <option value="">-Pilih-</option>
                  @foreach ($productskus as $item)
                    <option value="{{ $item->id }}" required>{{ $item->id }}</option>
                  @endforeach
              </select>
              </div>
              <div class="card-body">
              <label class="form-label" for="form3Example3">option Id</label>
              <select  class="form-control" name="option_id" id="option_id">
                 
                  <option value="">-Pilih-</option>
                  @foreach ($option as $item)
                    <option value="{{ $item->id }}" required>{{ $item->id }}</option>
                  @endforeach
              </select>
              </div>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
           
           
            <!-- Submit button -->
            <button type="submit" class="mb-4 btn btn-primary btn-block">Simpan</button>
          </form>
        
    </div>
    
</body>
</html>