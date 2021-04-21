<?php
echo "Hello";
$titles = ['Male','Female','Other'];
if (isset($_POST['submit'])) { //to check if the form was submitted
    $username= $_REQUESTT['userName'];
    echo $username;
    echo $titles[$_POST['sex']];
}































?>