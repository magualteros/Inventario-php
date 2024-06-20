<div class="container">
    <form action="/newProduct" method="POST">
        @csrf
        <input type="text" name="productName" id="nameProduct">
        <input type="text" name="productPrice" id="priceProduct">
        <input type="text" name="productDes">
        <input type="text" name="productStock" id="">
        <button type="submit">Crear</button>
    </form>
</div>
