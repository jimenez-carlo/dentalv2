<?php
require_once 'db_conn.php';
$_SESSION['conn'] = $conn;

function query($sql)
{
    return mysqli_query($_SESSION['conn'], $sql);
}

function get_inserted_id($sql)
{
    $conn =  $_SESSION['conn'];
    mysqli_query($conn, $sql);
    return mysqli_insert_id($conn);
}

function get_one($sql)
{
    $result = mysqli_query($_SESSION['conn'], $sql);
    while ($row = mysqli_fetch_object($result)) {
        return $row;
    }
    // $obj = get_one("select * from where id = '1' tbl_user limit 1");
    // $obj->id;
}

function get_list($sql)
{
    $result = mysqli_query($_SESSION['conn'], $sql);
    $temp = array();
    while ($row = $result->fetch_assoc()) {
        $temp[] = $row;
    }
    return $temp;
    // $table = get_list("select * from tbl_user");
    // foreach ($table as $res) {
    //     echo $res['id'];
    // }
}

function loginUser($data)
{
    extract($data);
    $result = query("SELECT * FROM `tbl_user` WHERE username = '$username' AND password = '$password' ");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_object($result)) {
            $_SESSION['user'] = $row;
        }
        echo "<script>location.reload();</script>";
    } else {
        echo '<div class="alert alert-danger" role="alert">
                  Invalid Login!
                  </div>';
    }
}

function error_message($message = "Error Something Went Wrong")
{
    return '<div class="alert alert-danger" role="alert"> ' . $message . ' </div>';
}

function success_message($message = "Successfull")
{
    return '<div class="alert alert-success" role="alert"> ' . $message . ' </div>';
}

function registerClinic($data)
{
    extract($data);

    // $sql = SELECT * FROM tbl_user WHERE username = $username
    // if(!empty(get_one($sql))){
    // return error_message("Already Exist")
    // }
    // ucfirst();

    $file_name = "default.png";
    if (isset($image_koto) && !empty($image_koto['name'])) {
        $ext = explode(".", $image_koto["name"]);
        $file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($image_koto['tmp_name'], "../images/clinic/" . $file_name);
        $file_name = "$file_name";
    }

    $clinic_id = get_inserted_id("INSERT INTO `tbl_clinic` (name, image) values('$clinic_name', '$file_name')");
    $id = get_inserted_id("INSERT INTO `tbl_user` (access_id, username, password, clinic_id) values('2', '$username', '$password','$clinic_id')");
    query("INSERT INTO `tbl_userinfo` (id, municipality, barangay, email, contact) values($id, '$municipality', '$barangay', '$email', '$contact')");
    return success_message();
}

function editClinic($data)
{
    extract($data);
    if (!empty(get_one("select * from tbl_clinic where name = '$clinic_name' and clinic_id <> '$clinic_id'"))) {
        return error_message("Clinic Name Already Exist");
    }

    $file_name = get_one("select * from tbl_clinic where clinic_id = $clinic_id")->image;
    if (isset($image_koto) && !empty($image_koto['name'])) {
        $ext = explode(".", $image_koto["name"]);
        $file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($image_koto['tmp_name'], "../images/clinic/" . $file_name);
        $file_name = "$file_name";
    }

    query("UPDATE `tbl_user` set  username ='$username', password = '$password' where id = $id");
    query("UPDATE `tbl_userinfo` set  municipality ='$municipality', barangay = '$barangay',email='$email',contact='$contact' where id = $id");
    query("UPDATE `tbl_clinic` set name = '$clinic_name', image ='$file_name' where clinic_id = $clinic_id");
    return success_message("Clinic #$clinic_id Updated Successfully!");
}

function editClinicDentalAdmin($data)
{
    extract($data);
    if (!empty(get_one("select * from tbl_clinic where name = '$clinic_name' and clinic_id <> '$clinic_id'"))) {
        return error_message("Clinic Name Already Exist");
    }

    $file_name = get_one("select * from tbl_clinic where clinic_id = $clinic_id")->image;
    if (isset($image_koto) && !empty($image_koto['name'])) {
        $ext = explode(".", $image_koto["name"]);
        $file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($image_koto['tmp_name'], "../images/clinic/" . $file_name);
        $file_name = "$file_name";
    }

    query("UPDATE `tbl_userinfo` set  municipality ='$municipality', barangay = '$barangay',email='$email',contact='$contact' where id = $id");
    query("UPDATE `tbl_clinic` set name = '$clinic_name', image ='$file_name' where clinic_id = $clinic_id");
    return success_message("Clinic Updated Successfully!");
}

function deleteClinic($id)
{
    query("DELETE from `tbl_clinic` where clinic_id = $id");
    query("DELETE from `tbl_user` where clinic_id = $id");
    return success_message("Clinic Deleted Successfully!");
}

function registerStaff($data)
{
    extract($data);
    $clinic_id = $_SESSION['user']->clinic_id;
    // ucfirst();
    $id = get_inserted_id("INSERT INTO `tbl_user` (access_id, username, password, clinic_id) values('$access_id', '$username', '$password','$clinic_id')");
    query("INSERT INTO `tbl_userinfo` (id, email, contact, first_name, last_name) values($id, '$email', '$contact', '$first_name', '$last_name')");
    return success_message();
}

function registerUser($data)
{
    extract($data);

    // ucfirst();
    $id = get_inserted_id("INSERT INTO `tbl_user` (access_id, username, password) values('5', '$username', '$password')");
    query("INSERT INTO `tbl_userinfo` (id, municipality, barangay, email, contact, first_name, last_name) values($id, '$municipality', '$barangay', '$email', '$contact', '$first_name', '$last_name')");
    return success_message();
}

function addProduct($data)
{
    extract($data);

    $file_name = "default.png";
    if (isset($image_koto) && !empty($image_koto['name'])) {
        $ext = explode(".", $image_koto["name"]);
        $file_name = 'file_' . date('YmdHis') . "." . end($ext);
        move_uploaded_file($image_koto['tmp_name'], "../images/products/" . $file_name);
        $file_name = "$file_name";
    }

    $clinic_id = $_SESSION['user']->clinic_id;
    query("INSERT INTO `tbl_product` (clinic_id, prod_name, prod_desc, prod_price, image) values($clinic_id, '$prod_name', '$prod_desc', '$prod_price', '$file_name')");
    return success_message();
}

function addService($data)
{
    extract($data);

    $clinic_id = $_SESSION['user']->clinic_id;
    query("INSERT INTO `tbl_service` (clinic_id, srvc_name, srvc_desc, srvc_price) values($clinic_id, '$srvc_name', '$srvc_desc', '$srvc_price')");
    return success_message();
}


// SELECT x.first_name,x.last_name,c.name,b.name `barangay` FROM tbl_userinfo x inner join tbl_city c on c.id = x.municipality inner join tbl_barangay b on b.id = x.barangay;


// table_1				table_2
// id   name           id city
// 1    foo            1  bayamabng
// 2    bar       		2  san carlos
// 3    john			4  basista


// select * from table_1 x left join table_2 y on  y.id = x.id

// table_1				table_2
// id   name           id city
// 1    foo            1  bayamabng
// 2    bar       		2  san carlos
// 3    john			NULL NULL

// select * from table_1 x INNER  join table_2 y on  y.id = x.id

// table_1				table_2
// id   name           id city
// 1    foo            1  bayamabng
// 2    bar       		2  san carlos

// select * from table_1 x RIGHT join table_2 y on  y.id = x.id

// table_1				table_2
// id   name           id city
// 1    foo            1  bayamabng
// 2    bar       		2  san carlos
// NULL NULL			4  basista
