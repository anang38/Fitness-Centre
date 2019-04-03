<?php
include 'connection.php';
// update 
if(isset($_GET['id'])){
$uid = $_GET['id'];
$suery = "select * from registration where id ='$uid'";
$result = mysqli_query($con, $suery);
$row = mysqli_fetch_array($result);
//echo $uid;
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
            <form class="form-horizontal" action="update.php" method="POST">
                <h2>REGISTRATION FORM</h2>
                <div class="col-sm-8">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">NAME:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter  Your Name" name="name" required="" maxlength="30" value="<?php echo $row['name']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fathername">FATHER'S NAME:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Enter  Your father Name" name="fname" required="" maxlength="30" value="<?php echo $row['fname']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="address">ADDRESS</label>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" id="address" required="" placeholder="Your Address" name="address"><?php echo $row['address']; ?></textarea> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="number">CONTACT NUMBER:</label>
                        <div class="col-sm-10">
                            <input type="number" name="cno" placeholder="Enter your number" id="number" required="" class="form-control" maxlength="10" value="<?php echo $row['cno']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="age">AGE:</label>
                        <div class="col-sm-10">
                            <input type="number" name="age" placeholder="Enter Your Age in Years" id="number" required="" class="form-control" value="<?php echo $row['age']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="height">HEIGHT:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="sel1" name="hfeet" required="">
                                <option><?php echo $row['hfeet']; ?></option>
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
                            <select class="form-control" id="sel1" name="hinch" required="" value="<?php echo $row['hinch']; ?>">
                                <option><?php echo $row['hfeet']; ?></option>
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
                            <input type="number" name="weight" placeholder="Enter Your weight in Kgs." id="number" required="" class="form-control" value="<?php echo $row['weight']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sel1">BLOOD GROUP:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="sel1" name="bgroup" required="">
                                <option><?php echo $row['bgroup']; ?></option>
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
                            <textarea class="form-control" id="profession"placeholder="Your Profession" name="profession"><?php echo $row['profession']; ?></textarea> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="time">TIMING:</label>
                        <div class="col-sm-10">
                            <input type="time" name="time" placeholder="Enter Your Timing" id="time" required="" class="form-control" value="<?php echo $row['time']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <!--                         <button type="submit" class="btn btn-success" name="submit">Submit</button>-->
                            <input type="submit" class="btn btn-success" name="submit" value="update">
                        </div>
                    </div>

                </div>

            </form>

        </div>

    </body>
</html>