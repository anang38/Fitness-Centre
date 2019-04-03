<?php include 'header2.php';
?>
<?php
include 'connection.php';
// update 
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $suery = "select * from registration where id ='$uid'";
    $result = mysqli_query($con, $suery);
    $row = mysqli_fetch_array($result);
//echo $uid;
}
?>

        
        <div class="container">
            <h2><?php echo $row['name']; ?></h2>                       
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%;">name</th>
                        <th><?php echo $row['name']; ?></th>
                    </tr>
                    <tr>
                        <th>Fname</th>
                        <th><?php echo $row['fname']; ?></th>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <th><?php echo $row['address']; ?></th>
                    </tr>
                    <tr>
                        <th>cno</th>
                        <th><?php echo $row['cno']; ?></th>
                    </tr>
                    <tr>
                        <th>age</th>
                        <th><?php echo $row['age']; ?></th>
                    <tr>
                        <th>hfeet</th>
                        <th><?php echo $row['hfeet']; ?></th>
                    </tr>
                    <tr>
                        <th>hinch</th>
                        <th><?php echo $row['hinch']; ?></th>
                    </tr>
                    <tr>
                        <th>weight</th>
                        <th><?php echo $row['weight']; ?></th>
                    </tr>
                    <tr>
                        <th>BGroup</th>
                        <th><?php echo $row['bgroup']; ?></th>
                    </tr>
                    <tr>
                        <th>Profession</th>
                        <th><?php echo $row['profession']; ?></th>
                    </tr>
                    <tr>
                        <th>time</th>
                        <th><?php echo $row['time']; ?></th>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <th><?php echo $row['email']; ?></th>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <th><img class="zoom" src="image/<?php echo $row['image']; ?>"</th>
                    </tr>
                    <tr>
                        <th>Idp</th>
                        <th><img class="zoom" src="idproof/<?php echo $row['idp']; ?>"</th>
                    </tr>
                    <tr>
                        <th>CDate</th>
                        <th><?php echo $row['cdate']; ?></th>
                    </tr>
                    <tr>
                        <th>CTime</th>
                        <th><?php echo $row['ctime']; ?></th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </body>
</html>