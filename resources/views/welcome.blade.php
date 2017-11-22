<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Coalition Test</title>

        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
  


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
    <form id="prodForm">
        <div class="form-group">
        <label for="name">Product name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter product name">
        </div>
        <div class="form-group">
        <label for="quantity">Quantity in stock</label>
        <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter quantity in stock">
        </div>
        <div class="form-group">
        <label for="price">Price per item</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Enter price per item">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>

<table class="table">
    <thead>
      <tr>
        <th>Product name</th>
        <th>Quantity in stock</th>
        <th>Price per item</th>
        <th>Datetime submitted</th>
        <th>Total value</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->quantity * $product->price}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></scrip
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    </body>
</html>
