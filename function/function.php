<?php
$conn = mysqli_connect("localhost", "root", "", "restaurant_db");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insert($data)
{
    global $conn;
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $category = $data['category'];

    // $image = upload();
    // if (!$image) {
    //     return false;
    // }

    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    // Allow certain file formats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $query = "INSERT INTO menu VALUES ('','$name','$price','$category','$imgContent','$description')";
    }
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('choose an image!')";
        return false;
    }

    $validation = ['jpg', 'jpeg', 'png'];
    $extentionImage = explode('.', $fileName);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM account WHERE id_customer = $id");
    return mysqli_affected_rows($conn);
}

function deleteMenu($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM menu WHERE id= $id");
    return mysqli_affected_rows($conn);
}
