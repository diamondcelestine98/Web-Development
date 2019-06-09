<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #b1 {
            font-size: 40px;
            padding: 25px;
            color: #990000;

        }
        body{
            margin: 0;
        }
        button {
            width: 150px;
            height: 45px;
            font-size: 20px;
            background-color: black;
            color:#ffd11a;
            border-radius: 4pt;
            cursor: pointer;
            border: 1px solid #ffd11a;
            transition-duration: 0.4s;
        }
        button:hover{
            background-color: #ffd11a;
            color: black;
        }
        .form1{
            width: 450px;
            height: 350px;
            padding: 25px;
            margin:150px;
            background-color: rgb(92, 86, 86,.7);
            font-size: 20pt;
            
         }
        #i1{
            width: 400px;
            height: 40px;
        }
        ::placeholder{
            font-size: 15pt;
        }
        #b1{
            display: contents;
            color: whitesmoke;
            font-size: 20pt;
        }
        section:after{
            content: "";
            display: table;
            clear: both;
        }
        article{
            float: right;
            width: 40%;
            height: 50pt;
            background-color: white;
            color: #0080ff;
            font-size: 30px;
            margin-top: -550
        }
        .profile{
            margin-top: -30px;
        }
    </style>
</head>
<body>
    <div style="background-color: #80dfff;">
        <div style="border-left: 2px solid black; border-right: 2px solid black; height: 105px; margin-top: -10px;">
            <hr>
            &nbsp; <i class="fa fa-user-o" aria-hidden="true" style="font-size: 80px;"></i>
            <b id="b1">Hello Technician,</b>
            <!--<a href="#"><button type="button" style="margin-left:550;">View Ratings</button></a>-->
            <a href="index.html#about"><button type="button" style="margin-left: 1160; margin-top: -45;">Sign Out&emsp;<i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
            <hr>
            </div>
    </div>
    <div class="profile">
    <section>
        <div class="form1">
            <form action="dashboard.phpc" method="POST">
            <p><input id="i1" type="text" name="user" placeholder="Enter UserId" required></p>
            <p><input id="i1" type="tel" name="caseid" maxlength="10" pattern="*\d" placeholder="Enter the request id" reuired></p>
            <p><input id="i1" type="text" name="problem" maxlemgth="50" placeholder="Enter the problem" required></p>
            <p>Issue Resolved?&nbsp;&nbsp; <input type="radio" name="resolved" required>Yes
            <input type="radio" name="resolved">No</p><br>
            <center><button id="b1" type="submit">Save</button></center>
            </form>
        </div>
        <?php


// Create connection
$conn = mysqli_connect("localhost","root","", "rescue");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$tn = $_SESSION['sn'];

$sql = "SELECT uname, name, phone, email, company FROM register where uname='$tn'";
$result = $conn->query($sql);
/**if ($result->num_rows > 0) {
    echo "<table><tr><th>USERNAME:</th><th>NAME:</th><th>MOBILE:</th><th>EMAIL:</th><th>COMPANY:</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["uname"]. "</td><td>" . $row["name"]. " </td><td>" . $row["phone"].  " </td><td>" . $row["email"].  " </td><td>" . $row["company"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}**/
if ($result->num_rows > 0) {
    echo "<article>";
       
    while($row = $result->fetch_assoc()) {
      echo "<p><b>USERNAME: </b>" . $row["uname"]. "</p>" ;
      echo "<p><b>NAME: </b>" . $row["name"]. "</p>" ;
      echo "<p><b>MOBILE: </b>" . $row["phone"]. "</p>" ;
      echo "<p><b>EMAIL: </b>" . $row["email"]. "</p>" ;
      echo "<p><b>COMPANY: </b>" . $row["company"]. "</p>" ;
     
    }
    
    echo "</article>";
}else {
    echo "0 results";
} 
        // <article>
            /**<h2></h2>
            <p><b>Username &nbsp;&nbsp;&nbsp;</b> SuryaS</p>
            <p><b>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> Sai Surya</p>
            <p><b>Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>9898959692</p>
            <p><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>suryas789@gmail.com</p>
            <p><b>Company &nbsp;&nbsp;&nbsp;</b>XYZ Mechanics</p>
        </article>**/
        $conn->close();
        ?> 
    </section>
    </div>
</body>
</html>