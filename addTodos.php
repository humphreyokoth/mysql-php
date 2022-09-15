    <?php
    include('./db_connnection.php');
    $conn = OpenCon();
    //Add to list items to DB
    $to_do_item = isset($_POST["item"]) ? $_POST["item"] : null;
    error_log("$to_do_item" . "\n", 3, "./php_error.log");

    $sql = "INSERT INTO to_do_list_items(`title`) VALUES ('$to_do_item')";

    $result = $conn->query($sql);

    error_log($result . "\n", 3, "./php_error.log");

    if ($result) {
        echo ' successful.';
    } else {
        echo 'ERROR:' . $sql . '\n' . $conn->close();
    }
    ?>
    