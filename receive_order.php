<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "order";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Connection error". $conn->connect_error);
        
    }

    // PHP VALIDATION 
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $product = trim($_POST['product']);
        $quantity = trim($_POST['quantity'] ?? '');

        // ALLOWED ITEMS
        $allowed_items = ['USB', 'SSD', 'Mouse'];

        if(!in_array($product, $allowed_items)){
            die("Invalid item");
        }

        // IF THE INPUT FIELD BEING SUBMITTED IS EMPTY
        if(empty($quantity)){
            echo "Quantity required";
            exit;

        }

        //IF VALUE BEING INPUTTED IS NOT A NUMBER
        if(!is_numeric($quantity)){
            echo "Quantity must be numeric";
            exit;
        }

        $submit_order = $conn->prepare("INSERT INTO orders (product, quantity) VALUES(?, ?)");
        $submit_order->bind_param("ss", $product, $quantity);

        if($submit_order->execute()){
            echo "<script> alert('Order received and saved') </script> ";
        }else{
            echo "<script> alert('Order unsuccessfully saved') </script>";
        }

        $submit_order->close();

        // $sql = "INSERT INTO orders (product, quantity) VALUES(?, ?)";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("ss", $product, $quantity); 
        // $stmt->execute();

        // if($stmt->execute()){
        //     echo "<script> alert('Order received and saved') </script> ";
        // }else{
        //     echo "<script> alert('Order unsuccessfully saved') </script>";
        // }

        // $stmt->close();
    }
    $conn->close();


?>