<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    @include('inc.navbar')
    <div class="container p-5 mt-3 card">
        <h1>Add product</h1>
     <div class="card-body">
        <form action="{{route('product.save')}}" method="POST">
            @csrf
            <div class="row ">
                <div class="col-md-12 form-group">
                    <label for="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Quantity</label>
                    <input type="number" class="form-control" name="qty" id="">
                </div>
                <div class="col-md-12 form-group">
                    <label for="form-label">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>

            </div>
            <button type="submit" class="w-100 btn mt-3 btn-success">Save Product</button>
           </form>
     </div>

    </div>
</body>
</html>
