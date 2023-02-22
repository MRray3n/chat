<?php
//echo "reponse....";
$msg = $_REQUEST["msg"];
exec("python.exe response.py ".$msg,$output,$RET);
echo ($output[2]);

$db = mysqli_connect("localhost","root","", "chatbot_db");
if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$ret = mysqli_query($db, "INSERT INTO unanswered VALUES(NULL, '$msg',2)");

mysqli_close($db);
?>