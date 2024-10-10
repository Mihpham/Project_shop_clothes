<?php
if (!empty($_POST) ) {
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    if ($cart == null || count($cart) == 0) {
        header('Location: index.php');
        die();
    }
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $orderDate = date('Y-m-d H:i:s');
    // lai ohair xem lại code toi deo tai nghe ong goi toi k nghe thay dau
    // thêm vào order
    $sql = "INSERT INTO orders(full_name, phone_number,email, address, note, order_date) values ('$fullname','$phone_number','$email','$address','$note','$orderDate')";
    execute($sql);

    $sql = "SELECT * FROM orders WHERE order_date = '$orderDate'";
    $order = executeResult($sql); // in ra 1 dòng
    $orderId = $order[0]['id'];
//    var_dump($orderId);
//    foreach ($order as $item) {
//        $orderId = $item['id'];
//    }
    if (isset($_SESSION['username'])) {
        $tendangnhap = $_SESSION['username']; // xem laij cai nay no co hay k in ra
        echo $tendangnhap;
        $sql = "SELECT * FROM tbl_dangky WHERE username = '$tendangnhap'";
        $user = executeResult($sql); // in ra 1 dòng
        var_dump($user);
        foreach ($user as $item) {
            $userId = $item['register_id'];

        }// í tuong là lúc mua nó cx zô chỗ admin sao
        $idList = [];
        foreach ($cart as $item) {
            $idList[] = $item['id'];
        }
        if (count($idList) > 0) {
            $idList = implode(',', $idList); // chuyeern
            //[2, 5, 6] => 2,5,6

            $sql = "SELECT * FROM product where id in ($idList)";
            $cartList = executeResult($sql);
        } else {
            $cartList = [];
        }
        $status = 'Đang chuẩn bị';

        foreach ($cartList as $item) {
            $num = 0;
            foreach ($cart as $value) {
                if ($value['id'] == $item['id']) {
                    $num = $value['num'];
                    break;
                }
            }


            $sql = "INSERT into order_details(order_id, product_id, user_id, num, price, status) 
            values ($orderId, " . $item['id'] . ", " . $userId . ", '$num', " . $item['price'] . ",'$status')";
            execute($sql);
        }
    }
//        $sql = "INSERT into order_details(order_id, product_id, id_user, num, price, status)
//            values ($orderId, " . $item['id'] . ", " . $userId . ", '$num', " . $item['price'] . ",'$status')"; // same same như này ok ?
    // sửa tại đây. nếu không có session id được gửi lên. Thì sẽ truy vấn vào vào bảng khác
    // cả cái câu này truy vấn nó k lấy được cái id vấn đề ở session của tui nhi
    // lấy cartList ra
    //tạo bảng mới đi cho dễ. đây bh là zô database tạo bảng mới ừ nm k lấy session thì tray vấn vào cái bảng đó bảng đó chứa những gì thì i hệt như
    header('Location: history.php');
    setcookie('cart', '[]', time() - 1000, '/');
}



