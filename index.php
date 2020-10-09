
<?php
include ("Customer.php");
$c1=new Customer("Trinh","05/02/2002","Soc Son");
$c2=new Customer("Trinh2","05/02/2002","Soc Son");
$c3=new Customer("Trinh3","05/02/2002","Soc Son");
$c4=new Customer("Trinh4","05/02/2002","Soc Son");
$c5=new Customer("Trinh5","05/02/2002","Soc Son");
$customer_list = array(
    "0"=>$c1,
    "1"=>$c2,
    "2"=>$c3,
    "3"=>$c4,
    "4"=>$c5
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="cname" placeholder="Name">
    <input type="text" name="cbirth" placeholder="Birthday">
    <input type="text" name="caddress" placeholder="Address">
    <button type="submit">Add</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["cname"];
    $birthday=$_REQUEST["cbirth"];
    $address=$_REQUEST["caddress"];

    $customer=new Customer($name,$birthday,$address);
    array_push($customer_list,$customer);
}

?>
<table border="1">
    <caption><h1>Danh sach Khach Hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php foreach ($customer_list as $index=>$customer ):?>
    <tr>
        <td><?php echo $index + 1;?></td>
        <td><?php echo $customer->getName();?></td>
        <td><?php echo $customer->getBirthday();?></td>
        <td><?php echo $customer->getAddress();?></td>
        <td><?php echo $customer->getImg();?></td>
    </tr>
    <?php endforeach; ?>


</table>
</body>
</html>




