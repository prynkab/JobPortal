<?php
function getMainPosts(){
    $db=mysqli_connect("localhost","root","","courserecommend");
    $query= "SELECT * FROM register_course";
    $result=mysqli_query($db,$query);
    while($row=mysqli_fetch_array($result)){
        $query ="SELECT * FROM course 
                WHERE course.id = ".$row['Course_Id'];
        $cat_result= mysqli_query($db,$query);
        $categories = "";
        $amount="";
        while($category=mysqli_fetch_array($cat_result)){
            $categories = $category['Course_Name'];
            $amount=$category['Amount'];
        }
        $query ="SELECT PaymentMethod FROM payment 
                WHERE payment.id = ".$row['PaymentMethodID'];
        $payment_result= mysqli_query($db,$query);
        $payments = "";
        while($payment=mysqli_fetch_array($payment_result)){
            $payments = $payment['PaymentMethod'];
        }
    }
}
?>