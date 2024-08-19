<style></style>
<h1>Đây là trang sửa tin tức</h1>
<style>
    /* Reset some default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="file"],
input[type="date"],
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    background-color: #3498db;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

img {
    display: block;
    margin-bottom: 15px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    max-height: 200px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

</style>
<form action="?action=update_news" method="POST" enctype="multipart/form-data">
    Id
    <br>
    <input type="text" name="id_news" 
    value="<?php echo $each['id_news'] ?>">
    <br>
    Name
    <br>
    <input type="text" name="name" 
    value="<?php echo $each['name'] ?>">
    <br>
    photo
    <br>
    Nhập ảnh mới tại form
    <br>
    <input type="file" name="photo"
    value="<?php echo $each['photo'] ?>">
    <br>
    hoặc giữ lại ảnh củ
    <br>
    <img src="<?php echo $each['photo'] ?>" alt="" style="height:200px;"">
    <br>
    Date
    <br>
    <input type="date" name="date" 
    value="<?php echo $each['date'] ?>">
    <br>
    Description
    <br>
    <input type="text" name="description" 
    value="<?php echo $each['description'] ?>">
    <br>
    <button>Sửa tin tức</button>
</form>