<?php 
$data1 = $_POST['data']; 
$conn = mysqli_connect("localhost", "xxxxxxxxxxxx", "xxxxxx", "xxxxxxxx"); 
$sql=("insert into test (test1,test2) values ('$data1','$data2')"); 
$query=mysqli_query($conn,$sql) ?>