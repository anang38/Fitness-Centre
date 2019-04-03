<?php include 'header.php';
?>
<?php include 'connection.php';
date_default_timezone_set('Asia/calcutta');
if(isset($_POST['submit']))
{
    $target = "image/".basename($_FILES['image']['name']);
    $path = "idproof/".basename($_FILES['idp']['name']);
    $image = $_FILES['image']['name'];
    $idp = $_FILES['idp']['name'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $cno = $_POST['cno'];
    $age = $_POST['age'];
    $hfeet = $_POST['hinch'];
     $hinch = $_POST['hinch'];
    $weight = $_POST['weight'];
    $bgroup = $_POST['bgroup'];
    $profession = $_POST['profession'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $cdate = date('m/d/Y');
    $ctime = date('H:i:s');
    $status = 'on';
    $sql ="INSERT INTO registration VALUES(NULL,'$name','$fname','$address','$cno','$age','$hfeet','$hinch','$weight','$bgroup','$profession','$time','$email','$image','$idp','$cdate','$ctime','$status')";
    $sql1=  mysqli_query($con, $sql);
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    move_uploaded_file($_FILES['idp']['tmp_name'],$path);
    if($sql1)
    {
        echo"<script>alert('registration success')</script>";
    }
    else{
        echo"<script>alert('query failed)</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body style="background-color:wheat;" >
        <div class="container">
            <form class="form-horizontal" action="registration.php" method="POST" enctype="multipart/form-data">
                <h2><a>REGISTRATION FORM</a></h2>
                <div class="col-sm-8">


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">NAME:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter  Your Name" name="name" required="" maxlength="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fathername">FATHER'S NAME:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter  Your father Name" name="fname" required="" maxlength="30">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="address">ADDRESS</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" id="address" required="" placeholder="Your Address" name="address"></textarea> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="number">CONTACT NUMBER:</label>
                        <div class="col-sm-10">
                            <input type="text" name="cno" placeholder="Enter your number" id="number" required="" class="form-control" maxlength="10" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));"`>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="age">AGE:</label>
                        <div class="col-sm-10">
                            <input type="number" name="age" placeholder="Enter Your Age in Years" id="number" required="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="height">HEIGHT:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="sel1" name="hfeet" required="">
                                <option> select height in feet</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control" id="sel1" name="hinch" required="">
                                <option>select height in inch</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2"for="weight">WEIGHT:</label>
                        <div class="col-sm-10">
                            <input type="number" name="weight" placeholder="Enter Your weight in Kgs." id="number" required="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">BLOOD GROUP:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="bgroup" required="">
                                <option>Select your blood group.</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profession">PROFESSION:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="profession"placeholder="Your Profession" name="profession"></textarea> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="time">TIMING:</label>
                        <div class="col-sm-10">
                            <input type="time" name="time" placeholder="Enter Your Timing" id="time" required="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>


                    <div class="form-group">        
                        <label class="control-label col-sm-2" for="image">UPLOAD YOUR IMAGE</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="image" required=""> 
                        </div>
                    </div>


                    <div class="form-group">        
                        <label class="control-label col-sm-2" for="id">UPLOAD YOUR ID.PROOF</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" name="idp" required=""> 
                        </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <!--                         <button type="submit" class="btn btn-success" name="submit">Submit</button>-->
                            <input type="submit" class="btn btn-success" name="submit" value="Submit">
                        </div>
                    </div>

                </div>

            </form>

        </div>

    </body>

<?php include 'footer.php';
?>