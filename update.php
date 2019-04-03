<?php
include 'connection.php';
    if(isset($_POST['submit']))
{
    //$target = "image/".basename($_FILES['image']['name']);
    //$path = "idproof/".basename($_FILES['idp']['name']);
    //$image = $_FILES['image']['name'];
    //$idp = $_FILES['idp']['name'];
    $updateid = $_POST['id'];
    //echo $updateid;
    $name = $_POST['name'];
    //echo $name;
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $cno = $_POST['cno'];
    $age = $_POST['age'];
    $hfeet = $_POST['hfeet'];
    $hinch = $_POST['hinch'];
    $weight = $_POST['weight'];
    $bgroup = $_POST['bgroup'];
    $profession = $_POST['profession'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    //$cdate = date('m/d/Y');
    //$ctime = date('H:i:s');
    $sql ="UPDATE registration SET name='".$name."',fnmae='".$fname."',address='".$address."',cno='".$cno."',age='".$age."',hfeet='".$hfeet."',hinch='".$hinch."',weight='".$weight."',bgroup='".$bgroup."',profession='".$profession."',time='".$time."',email='".$email."' WHERE id = '".$updateid."'";
    $sql1=  mysqli_query($con, $sql);
    //move_uploaded_file($_FILES['image']['tmp_name'],$target);
    //move_uploaded_file($_FILES['idp']['tmp_name'],$path);
    if($sql1)
    {
        echo"<script>alert('registration success')</script>";
    }
    else{
        echo"<script>alert('query failed)</script>";
    }
}

?>