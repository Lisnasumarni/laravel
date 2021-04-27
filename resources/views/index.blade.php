
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Blogs - SantriKoding.com</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
    <body style="background: rgb(186, 186, 187)  ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-5 shadow rounded">
                        <div class="card-body">
                        </div>

    <h2>products</h2>
    <a href="{{ url('create_product') }}" class="btn btn-md btn-success mb-3 col-md-2">TAMBAH DATA</a>
    <table class="table table-bordered">
    

    <table border="1" cellpading="10" cellspacing="0" width=700 >
        <tr>
            <th width=50>No</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th width=100 >Action</th>
        </tr>
        <tfoot>
            @foreach ($product  as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>
                  
                    
                     <a href="{{ url('edit_product',$product->id ) }}" class="btn btn-sm btn-primary  ">edit</a> 
                    <a href="{{ url('destroy_product',$product->id ) }}" class="btn btn-sm btn-danger fas fa-trash-alt  ">delete</a>
                     
                </td>
            </tr>
            @endforeach
        </tfoot>
    </table>
</body>


<body>
    <h2>options</h2>
    <a href="{{ url('create_options') }}" class="btn btn-md btn-success mb-3 col-md-2">TAMBAH DATA</a>
    <table class="table table-bordered">
 

    <table border="1" cellpading="10" cellspacing="0" width=700 >
        <tr>
            <th width=50>No</th>
            <th>Option ID</th>
            <th>Product_ID</th>
            <th>Option Name</th>
            <th width=100 >Action</th>
        </tr>
        <tfoot>
            @foreach ($option  as $option)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $option->id }}</td>
                <td>{{ $option->product_id }}</td>
                <td>{{ $option->option_name }}</td>
                <td>
                  
                    
                     <a href="{{ url('edit_options',$option->id ) }}" class="btn btn-sm btn-primary  ">edit</a> 
                    <a href="{{ url('destroy_option',$option->id ) }}" class="btn btn-sm btn-danger fas fa-trash-alt  ">delete</a>
                     
                </td>
            </tr>
            @endforeach
        </tfoot>
    </table>
</body>
<body>
    <h2>Product Skus</h2>
    <a href="{{ url('create_productskus') }}" class="btn btn-md btn-success mb-3 col-md-2">TAMBAH DATA</a>
    <table class="table table-bordered">
   

    <table border="1" cellpading="10" cellspacing="0" width=700 >
        <tr>
            <th width=50>No</th>
            <th>SKU ID</th>
            <th>product ID</th>
            <th>Price</th>
            <th>SKU</th>
            
            <th width=100 >Action</th>
        </tr>
        <tfoot>
            @foreach ($productskus  as $productskus)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $productskus->id }}</td>
                <td>{{ $productskus->product_id }}</td>
                <td>{{ $productskus->price }}</td>
                <td>{{ $productskus->sku }}</td>
                
                <td>
                  
                    
                     <a href="{{ url('edit_productskus',$productskus->id ) }}" class="btn btn-sm btn-primary  ">edit</a> 
                    <a href="{{ url('destroy_productskus',$productskus->id ) }}" class="btn btn-sm btn-danger fas fa-trash-alt  ">delete</a>
                     
                </td>
            </tr>
            @endforeach
        </tfoot>
    </table>
</body>

<body>
    <h2>Sku Values</h2>
    <a href="{{ url('create_skuvalues') }}" class="btn btn-md btn-success mb-3 col-md-2">TAMBAH DATA</a>
    

    <table border="1" cellpading="10" cellspacing="0" width=700 >
        <tr>
            <th width=50>No</th>
            <th>Value ID</th>
            <th>Product ID</th>
            <th>SKU ID</th>
            <th>Option ID</th>
            
            
            <th width=100 >Action</th>
        </tr>
        <tfoot>
            @foreach ($skuvalue  as $skuvalue)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $skuvalue->id }}</td>
                <td>{{ $skuvalue->product_id }}</td>
                <td>{{ $skuvalue->sku_id }}</td>
                <td>{{ $skuvalue->option_id }}</td>
                
                <td>
                  
                    
                     <a href="{{ url('edit_skuvalues',$skuvalue->id ) }}" class="btn btn-sm btn-primary  ">edit</a> 
                     <a href="{{ url('destroy_skuvalues',$skuvalue->id ) }}" class="btn btn-sm btn-danger fas fa-trash-alt  ">delete</a>
                     
                </td>
            </tr>
            @endforeach
        </tfoot>
    
    </table>
</body>


<body>
    <h2> Option Values</h2>
    <a href="{{ url('create_optionvalues') }}" class="btn btn-md btn-success mb-3 col-md-2">TAMBAH DATA</a>
  

    <table border="1" cellpading="10" cellspacing="0" width=700 >
        <tr>
            <th width=50>No</th>
            <th>Product ID</th>
            <th>Option ID</th>
            <th>Value ID</th>
            <th>Value Name</th>
            
            
            <th width=100 >Action</th>
        </tr>
        <tfoot>
            @foreach ($option_values  as $option_values)
            <tr>
                <td>{{ $loop->iteration }}</td>
            
                <td>{{ $option_values->product_id }}</td>
                <td>{{ $option_values->option_id }}</td>
                <td>{{ $option_values->value_id }}</td>
                <td>{{ $option_values->value_name }}</td>
                <td>
                  
                    
                     
                     <a href="{{ url('destroy_optionvalues',$option_values->id ) }}" class="btn btn-sm btn-danger fas fa-trash-alt  ">delete</a>
                     
                </td>
            </tr>
            @endforeach
        </tfoot>
    
    </table>
</body>