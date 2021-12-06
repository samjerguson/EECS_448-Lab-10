<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "s550j153", "eb7puiz9", "s550j153");
    /* check connection */
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error); exit();
	}
    $user = $_POST["user_id"];
    if ($user == ""){
        echo "Input cannot be empty";
    }
    $query = "INSERT INTO Users (user) VALUES ('" . $user .  "')";
    if ($mysqli->query($query)){
        echo "Username has been created";
    }
    else{
        echo "Sorry, that username is taken";
    }
    $mysqli->close();
?>