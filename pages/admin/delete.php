<?php
require '../../function/function.php';

$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>alert('Successfull deleted!');
                document.location.href = 'costumers.php'</script>";
}
