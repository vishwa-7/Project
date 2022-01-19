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
                <li><a href="generatetimetable.php">GENERATE TIMETABLE</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="main.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<br>


<div align="center" style="margin-top: 70px">

    <button id="subjectmanual" class="btn btn-success btn-lg">ADD COURSE</button>
</div>

<div id="myModal" style="margin-bottom:20px;" class="modal">

    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times</span>
            <h2 id="popupHead">Add COURSE</h2>
        </div>
        <div class="modal-body" id="EnterSubject">
            <div style="display:none" id="addSubjectForm">
                <form action="addsubjectFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="c_name">Course Name</label>
                        <input type="text" class="form-control" id="c_name" name="c_name"
                               placeholder="Enter Course Name">
                    </div>
                    <div class="form-group">
                        <label for="c_id">Course Code</label>
                        <input type="text" class="form-control" id="c_id" name="c_id" placeholder="enter course code">
                    </div>
            
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" id="semester" name="semester">
                            <option selected disabled>Select</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subjecttype">Course Type</label>
                        <select class="form-control" id="subjecttype" name="ct">
                            <option selected disabled>Select</option>
                            <option value="THEORY">THEORY</option>
                            <option value="LAB">LAB</option>

                        </select>

                    </div>

                    <div align="right" class="form-group">
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

    
    var addsubjectBtn = document.getElementById("subjectmanual");
    var heading = document.getElementById("popupHead");
    var subjectForm = document.getElementById("addSubjectForm");
    
    var span = document.getElementsByClassName("close")[0];

    addsubjectBtn.onclick = function () {
        modal.style.display = "block";
        subjectForm.style.display = "block";



    }

    
    span.onclick = function () {
        modal.style.display = "none";
        subjectForm.style.display = "none";

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

    
    <table id=subjectstable style="margin-left: 90px">
        <caption><strong>Added Courses Information</strong></caption>
        <tr>
            <th width="150">Code</th>
            <th width=300>Course Name</th>
            <th width=150>Course Type</th>
            <th width="150">Semester</th>
        </tr>
        <?php
        include 'connection.php';
        $sql = mysqli_query(mysqli_connect("localhost", "root", "", "dbtest"),
            "SELECT * FROM course");
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr><td>{$row['c_id']}</td>
                    <td>{$row['c_name']}</td>
                    <td>{$row['course_type']}</td>
                    <td>{$row['semester']}</td>
                    </tr>\n";
        }
        ?>
    </table>
</div>


</body>
</html>
