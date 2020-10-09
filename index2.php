<?php
include 'Data.php';
include("Cudtomers.php");
$c1 = new Cudtomers("Dam Kieu Trinh", "05/02/2002", "Soc Son");
$c2 = new Cudtomers("Dam Thu Trang", "13/05/2005", "Soc Son");
$c3 = new Cudtomers("Dam Khac Khang", "27/12/1982", "Soc Son");
$c4 = new Cudtomers("Dam Khac Ninh", "05/02/2002", "Soc Son");
$c5 = new Cudtomers("Nguyen Thi Minh Phuong", "05/02/2002", "Soc Son");
$customers_list = Data::loadData();
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
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="birthday" placeholder="Birthday">
    <input type="text" name="address" placeholder="Address">
    <button type="submit">Add</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $birthday = $_REQUEST["birthday"];
    $address = $_REQUEST["address"];

    //
    //$customers= new Cudtomers($name,$birthday,$address);
    $customer = [
        "name" => $name,
        "birthday" => $birthday,
        "address" => $address,
    ];
    array_push($customers_list, $customer);
    Data::saveData($customers_list);
}
?>
<table border="1">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Address</th>
    </tr>
    <?php foreach ($customers_list as $index => $customers): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customers["name"]; ?></td>
            <td><?php echo $customers['birthday']; ?></td>
            <td><?php echo $customers['address']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
