<br>
<br>
<br>
<br>
<?php
session_start();
require'config.php';
    $isbn=$_POST['isbn'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $pub_date=$_POST['date'];
    $genre=$_POST['genre'];
    $cat=$_POST['cat'];
    $query="insert into books(isbn,title,author,pub_date,genre,category,status) values('$isbn','$title','$author','$pub_date','$genre','$cat',1)";
    $result= mysqli_query($conn,$query);
    require'temp.html';
    echo '<h2>Book Added successfully </h2>';
?>