<link rel="stylesheet" href="../../css/app.css">
@extends('welcome')

@section('content')
<div>
    <button>
        <a href="/products/create">crear</a>
    </button>
</div> 
<div class="container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Stock</th>
                <th>--</th>
                <th>--</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td><a href="/products/{{$product->id}}">{{$product->id}}</a></td>
                <td>{{$product->productName}}|</td>
                <td>{{$product->productDescription}}|</td>
                <td>{{$product->productPrice}}|</td>
                <td>{{$product->productStock}}|</td>
                <td></td>
                <td></td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection
