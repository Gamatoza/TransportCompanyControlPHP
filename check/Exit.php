<?php

setcookie('AID',$user['EmpID'],time() - 3600,"/");
setcookie('CID',$user['EmpID'],time() - 3600,"/");
setcookie('Name',$user['Name'],time() - 3600,"/");
setcookie('EmpType',$user['EmpType'],time() - 3600,"/");
setcookie('Login',$user['Login'],time() - 3600,"/");

if (@$_SERVER['HTTP_REFERER'] != null) {
    header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>