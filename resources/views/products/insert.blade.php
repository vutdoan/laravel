<div>
    <form action="{{Route('productsinsert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Tên sản phẩm</label>
        <input type="text" id="name" name="name"><br>
        <label for="price">Giá</label>
        <input type="text" id="price" name="price"><br>
        <label for="description">Mô tả</label>
        <input type="text" id="description" name="description"><br>
        <input type="submit" value="Submit">
    </form>
</div>