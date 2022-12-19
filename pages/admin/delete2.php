<?php
require '../../function/function.php';

$id = $_GET['id'];

if (deleteMenu($id) > 0) {
    echo "<script>alert('Successfull deleted!');
                document.location.href = 'menu.php'</script>";
}
