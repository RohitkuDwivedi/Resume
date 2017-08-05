<?php
$con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
echo "connected<br>";
$query = "drop schema if exists cv_php";
mysqli_query($con, $query) or exit(mysqli_error($con));
echo "dropped<br>";
$query = "create schema cv_php";
mysqli_query($con, $query) or exit(mysqli_error($con));
echo "created<br>";
mysqli_select_db($con, "cv_php");
$query = "CREATE TABLE cv_users ( id INT NOT NULL AUTO_INCREMENT , "
        . " user_name VARCHAR(50) UNIQUE NOT NULL ,pass VARCHAR(15) NOT NULL , "
        . " uname VARCHAR(50), "
        . "phno VARCHAR(15) , "
        . " email_id VARCHAR(50), "
        . " website VARCHAR(50), "
        . " fname VARCHAR(50), "
        . " adress VARCHAR(50), "
        . " dob VARCHAR(50), "
        . " language VARCHAR(50), "
        . " ssc_per FLOAT , "
        . " ssc_board VARCHAR(50), "
        . " ssc_institute VARCHAR(50), "
        . " ssc_year INT, "
        . " hsc_per FLOAT , "
        . " hsc_board VARCHAR(50), "
        . " hsc_institute VARCHAR(50), "
        . " hsc_year INT, "
        . " b_per FLOAT , "
        . " b_board VARCHAR(50), "
        . " b_institute VARCHAR(50), "
        . " b_year INT, "
        . " b_branch VARCHAR(20), "
        . " m_per FLOAT , "
        . " m_board VARCHAR(50), "
        . " m_institute VARCHAR(50), "
        . " m_year INT, "
        . " m_branch VARCHAR(20), "
        . " techskills VARCHAR(200), "
        . " p1_topic VARCHAR(100), "
        . " p1_desc VARCHAR(300), "
        . " p1_techused VARCHAR(50), "
        . " p2_topic VARCHAR(100), "
        . " p2_desc VARCHAR(300), "
        . " p2_techused VARCHAR(50), "
        . " workshop  VARCHAR(200), "
        . " hobbies  VARCHAR(350), "
        . " achivements  VARCHAR(350), "
        . " c_obj  VARCHAR(350), "
        . " PRIMARY KEY (id))";
mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";
$query = "insert into cv_users (user_name,pass) values ('rohit', 'rohit@1212..')";
mysqli_query($con, $query) or exit(mysqli_error($con));
$query = "insert into cv_users (user_name,pass) values ('admin', 'admin')";
mysqli_query($con, $query) or exit(mysqli_error($con));
echo "inserted<br>";
?>