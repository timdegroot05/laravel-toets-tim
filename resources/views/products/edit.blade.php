<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Street</label>
            <input type="text" name="street" placeholder="Street" value="{{$product->street}}" />
        </div>
        <div>
            <label>Home Number</label>
            <input type="text" name="home_nr" placeholder="Home Number" value="{{$product->home_nr}}" />
        </div>
        <div>
            <label>Zipcode</label>
            <input type="text" name="zipcode" placeholder="Zipcode" value="{{$product->zipcode}}" />
        </div>
        <div>
            <label>City</label>
            <input type="text" name="city" placeholder="City" value="{{$product->city}}" />
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone_nr" placeholder="Phone Number" value="{{$product->phone_nr}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>