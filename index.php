<!DOCTYPE html>
<html lang="en"></html>
<head>
    <title>Discuss Project</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
 <?php 
 session_start();
 include('./client/header.php') ;

if (isset($_GET['signup'] ))
{
 include('./client/signup.php');
} else if (isset($_GET['login']))
{
     include('./client/login.php');
} else {
   // 
}

 
 ?>

</body>
</html> 