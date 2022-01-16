<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>ADMIN ACCESS</title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/scrollReveal.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="addteachers.php">ADD STAFFS</a></li>
                <li><a href="addsubjects.php">ADD COURSES</a></li>
                <li><a href="addclassrooms.php">ADD CLASSROOMS</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ALLOTMENT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=allotsubjects.php>THEORY COURSES</a>
                        </li>
                     
                        <li>
                            <a href=allotclasses.php>CLASSROOMS</a>
                        </li>
                    </ul>
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="main.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<br>


    <?php
                if(isset($_POST['ADD'])){
                $q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
                    "INSERT INTO staff VALUES ('$s_id','$s_name','$adv_id','','$alias')");
                if ($q) {
                    $sql = "CREATE TABLE " . $s_id . " (
                day VARCHAR(10) PRIMARY KEY, 
                period1 VARCHAR(30),
                period2 VARCHAR(30),
                period3 VARCHAR(30),
                period4 VARCHAR(30),
                period5 VARCHAR(30),
                period6 VARCHAR(30)
                )";
                    mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), $sql);
                    $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
                    for ($i = 0; $i < 6; $i++) {
                        $day = $days[$i];
                        $sql = "INSERT into " . $s_id . " VALUES('$day','','','','','','')";
                        mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"), $sql);
                    }
                }
    }
    ?>
</div>
<div align="center" style="margin-top:20px">
    <button id="teachermanual" style="margin-top:70px;" class="btn btn-success btn-lg">ADD STAFF</button>
</div>

<div id="myModal" class="modal">

    <div class="modal-content" style="margin-top: -60px">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add STAFF</h2>
        </div>
        <div class="modal-body" id="EnterTeacher">
            <div style="display:none" id="addTeacherForm">
                <form action="addteacherFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="s_name">Staff's Name</label>
                        <input type="text" class="form-control" id="s_name" name="s_name"
                               placeholder="Enter Staff Name">
                    </div>
                    <div class="form-group">
                        <label for="s_id">Staff Id</label>
                        <input type="text" class="form-control" id="s_id" name="s_id" placeholder="Enter staff id">
                    </div>
                    <div class="form-group">
                        <label for="adv_id">Advisor Id</label>
                        <input type="text" class="form-control" id="adv_id" name="adv_id" placeholder="Enter the Advisor Id">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias</label>
                        <input type="text" class="form-control" id="alias" name="alias" placeholder="Enter the Short name">
                    </div>
                    
                    <div align="right">
                        <input type="submit" class="btn btn-default" name="ADD" value="ADD">
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<script>
   
    var modal = document.getElementById('myModal');

    
    var addteacherBtn = document.getElementById("teachermanual");
    var heading = document.getElementById("popupHead");
    var facultyForm = document.getElementById("addTeacherForm");
    
    var span = document.getElementsByClassName("close")[0];

    

    addteacherBtn.onclick = function () {
        modal.style.display = "block";
       
        facultyForm.style.display = "block";
      
      


    }

    
    span.onclick = function () {
        modal.style.display = "none";
        
        facultyForm.style.display = "none";

    }

   
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<div>
    <br>
    <style>
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 50px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    

    <table id=teacherstable style="margin-left: 90px">
        <caption><strong>Staff's Information </strong></caption>
        <tr>
            <th width="150">Staff_id</th>
            <th width=300>Staff Name</th>
            <th width=120>Adv_id</th>
            <th width="150">Alias</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $sql = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
            "SELECT * FROM staff");

        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr><td>{$row['s_id']}</td>
                    <td>{$row['s_name']}</td>
                    <td>{$row['adv_id']}</td>
                    <td>{$row['alias']}</td>
                   <td>
                    </tr>\n";
        }
       ?>
        </tbody>
    </table>

</div>



</body>
</html>
