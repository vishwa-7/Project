<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>ADMIN ACCESS</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
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
                <li><a href="addteachers.php">ADD STAFF</a></li>
                <li><a href="addsubjects.php">ADD COURSES</a></li>
                <li><a href="addclassrooms.php">ADD CLASSROOMS</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ALLOTMENT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=allotsubjects.php>THEORY COURSES</a>
                        </li>
                        <li>
                            <a href=allotpracticals.php>PRACTICAL COURSES</a>
                        </li>
                        <li>
                            <a href=allotclasses.php>CLASSROOMS</a>
                        </li>
                    </ul>
                </li>
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="main.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>

<?php
if (isset($_POST['in_class'])) {
    include 'connection.php';
    $year = $_POST['course'];
    $name = $_POST['in_class'];
    $q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
        "UPDATE class SET status = '$year' WHERE name = '$name'");
}
?>
<form action="allotclasses.php" method="post" style="margin-top: 100px">

    <div align="center">
        <select name="course" class="list-group-item">
            <option selected disabled>Select Course</option>
            ';
            <option value="2">B.E 2nd Year</option>
            <option value="3">B.E 3rd Year</option>
            <option value="4">B.E 4th Year</option>
        </select>
    </div>

    <div align="center" style="margin-top: 5px">
        <select name="in_class" class="list-group-item">
            <?php
            include 'connection.php';
            $q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
                "SELECT * FROM class");
            $row_count = mysqli_num_rows($q);
            if ($row_count) {
                $mystring = '
             <option selected disabled>Select Classroom</option>';
                while ($row = mysqli_fetch_assoc($q)) {
                    if ($row['status'] == 0)
                        continue;
                    $mystring .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                }
                echo $mystring;
            }
            ?>
        </select>
    </div>
    <div align="center" style="margin-top: 10px;">
        <button type="submit" class="btn btn-success btn-lg">Allot</button>
    </div>
</form>

<script>
    function deleteHandlers() {
        var table = document.getElementById("allotedsubjectstable");
        var rows = table.getElementsByTagName("tr");
        for (i = 0; i < rows.length; i++) {
            var currentRow = table.rows[i];
            //var b = currentRow.getElementsByTagName("td")[0];
            var createDeleteHandler =
                function (row) {
                    return function () {
                        var cell = row.getElementsByTagName("td")[0];
                        var id = cell.innerHTML;
                        var x;
                        if (confirm("Are You Sure?") == true) {
                            window.location.href = "deleteallotment.php?name=" + id;

                        }

                    };
                };

            currentRow.cells[2].onclick = createDeleteHandler(currentRow);
        }
    }
</script>
<div align="center">
    <style>
        table {
            margin-top: 70px;
            margin-bottom: 50px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 80px;
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

    <table id=allotedclassroomstable>
        <caption><strong>CLASSROOMS ALLOTMENT</strong></caption>
        <tr>
            <th width="250">Classroom</th>
            <th width="400">Alloted To</th>
            <th width="60">Action</th>
        </tr>
        <tbody>
        <?php
        include 'connection.php';
        $q = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
            "SELECT * FROM class");
        $courses = array('B.E 2nd Year', 'B.E 3rd Year', 'B.E 4th Year');
        while ($row = mysqli_fetch_assoc($q)) {
            if ($row['status'] == 0)
                continue;

            echo "<tr><td>{$row['name']}</td>
                    <td>{$courses[$row['status']]}</td>
                <td><button>Delete</button></td>
                    </tr>\n";
        }
        echo "<script>deleteHandlers();</script>";
        ?>
        </tbody>
    </table>
</div>
<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="js/custom.js"></script>
</body>
</html>
