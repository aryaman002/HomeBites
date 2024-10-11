<?php 

include 'config.php';
error_reporting(0);

session_start();


if (isset($_POST['Proceed'])) {
    $total_price = $_POST['total_price'];
    $card_cvc = $_POST['card_cvc'];
    $card_expiry_month = $_POST['card_expiry_month'];
    $card_expiry_year = $_POST['card_expiry_year'];
    $card_holder_number = $_POST['card_holder_number'];
    $email_address = $_POST['email_address'];
    $customer_name = $_POST['customer_name'];
    $item_details = $_POST['item_details'];
    $quantity = $_POST['quantity'];
    $customer_address = $_POST['customer_address'];
    $customer_city = $_POST['customer_city'];
    $customer_pin = $_POST['customer_pin'];
    $customer_state = $_POST['customer_state'];
    $customer_country = $_POST['customer_country'];



$sql = " INSERT INTO order_table(total_price,card_cvc,card_expiry_month,card_expiry_year,card_holder_number,email_address,customer_name,item_details,quantity,customer_address,customer_city, customer_pin, customer_state, customer_country) VALUES ('$total_price','$card_cvc','$card_expiry_month','$card_expiry_year','$card_holder_number','$email_address','$customer_name','$item_details','$quantity','$customer_address','$customer_city','$customer_pin','$customer_state','$customer_country')";

$result = mysqli_query($conn, $sql);
            if ($result)
                {
header ("Location: orderplaced.php");
    $total_price = "";
    $card_cvc = "";
    $card_expiry_month = "";
    $card_expiry_year ="";
    $card_holder_number = "";
    $email_address = "";
    $customer_name = "";
    $item_details = "";
    $quantity = "";
    $customer_address = "";
    $customer_city = "";
    $customer_pin = "";
    $customer_state = "";
    $customer_country ="";
    
    } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";

            }
        }


?>