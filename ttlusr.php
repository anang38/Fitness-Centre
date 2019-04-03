<?php include 'header2.php';
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
include 'connection.php';
?>

    
    <style>
        .zoom
        {
            width: 150px; height: 150px;
        }
        .zoom:hover{
            width:500px;
            height:500px;
        }  

        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
        <div class="container">
            <?php
            $res = "SELECT * FROM registration  WHERE status='on' ORDER BY  id DESC";
            $result1 = mysqli_query($con, $res);
            ?>
            <?php
            if (isset($_GET['id'])) {
                $status = $_GET['id'];
                $query = "UPDATE registration SET status='off' WHERE id=$status";
                $result = mysqli_query($con, $query);
                echo('<meta http-equiv="refresh" content="1">');
            }
            ?>

            
            <div class="container">
                <h2>My Customers</h2>
                <form action="panel.php" method="POST">
                    <div class="col-sm-10" style="padding-left:0px;">
                        <input type="text" placeholder="Search" name="name" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" name="search" value="search" class="btn btn-success">
                    </div>
                </form>  
            </div>
            <br>
            <div class="container">
                <?php
                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                    $sql = " SELECT * FROM registration WHERE name like '%" . $name . "%'";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="well well-sm">
                            <a href="view.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <br>
            <div class="table-responsive">

                <table class="table">
                    <tr>
                        <th>action</th>
                        <th>View</th>
                        <th>id</th>
                        <th>name</th>
                        <th>fname</th>
                        <th>address</th>
                        <th>cno</th>
                        <th>age</th>
                        <th>hfeet</th>
                        <th>hinch</th>
                        <th>weight</th>
                        <th>bgroup</th>
                        <th>profession</th>
                        <th>time</th>
                        <th>email</th>

                        <th>cdate</th>
                        <th>ctime</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result1)) { ?>
                        <tr>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>"><b><i class="far fa-edit"></i></b></a>&nbsp;
                                <a href="panel.php?id=<?php echo $row['id']; ?>"><b><i class="fas fa-trash-alt"></i></b></a>&nbsp;
                                
                            </td>
                            <td><a href="view.php?id=<?php echo $row['id']; ?>"><b><i class="fas fa-eye"></i></b></a></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['cno']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['hfeet']; ?></td>
                            <td><?php echo $row['hinch']; ?></td>
                            <td><?php echo $row['weight']; ?></td>
                            <td><?php echo $row['bgroup']; ?></td>
                            <td><?php echo $row['profession']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['cdate']; ?></td>
                            <td><?php echo $row['ctime']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

