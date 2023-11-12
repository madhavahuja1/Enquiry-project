<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <title>Apply</title>

    <style>
        .verify {
            margin: 0 30px 30px 30px;
            border: 1px solid;
            text-align: center;
            overflow: hidden;
            cursor: pointer;
        }

        .verify button {
            padding: 13px 16px;
        }
        .innerForm{
            padding: 30px !important;
        }

        
    </style>
</head>

<body>

    <nav class='navbar'>

        <div class="top">
            <a href="./index.php"><i class="fa-solid fa-house"></i> |  GEU Dehradun</a>
        </div>
        <div class="middle">

            <div id="logo">
                <strong> ग्राफ़िक एरा विश्वविद्यालय (जीईयू)</strong>

                <img src="./img/logo.jpg" alt=logo width="60" height="40"> <strong>Graphic Era
                    university(GEU)</strong>
            </div>
        </div>

        <div class="navbar_1">
            <a href="index.php">Faculty</a>
            <a href="student.php">Students</a>
            <div class="dropdown">
                <button class="dropbtn">ACADEMICS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="UG.php" target="_vipul">UG</a>
                    <a href="PG.php">PG</a>
                    <a href="PHD.php">PHD</a>
                    <a href="FRESHER.php">WELCOME FRESHER</a>




                </div>
            </div>
            <div class="navbar_2">
                <div class="dropdown">
                    <button class="dropbtn">ADMISSION
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Apply.php" target="_madhav">ApplyNow</a>
                        <a href="scholar.php" target="_madhav">Scholarship</a>
                    </div>
                </div>
            </div>
        </div>


    </nav>

    <div id="applyBg">
        <marquee behavior="scroll" Scrollamount=10 direction="left">
            <h4>Admission Open ! </h4>
        </marquee>

    </div>
    <br>
    <h2 class="adHead"> <b>Take your First Step towards success!<b></h2>
    <br>
    <br>
    <div id="para">
        <section>
            <div class="para1">
                <p>Choosing the right University is an important decision for any student, for the professional success
                    one
                    aspires for in their lives, depends on this very decision. Graphic Era offers its prospective
                    students,
                    more than 85 UG, PG and Doctoral Programmes to choose from, spread across various domains such as
                    Engineering, Computer Application, Management, Commerce, Life Sciences, Food Technology,
                    Hospitality,
                    Paramedical, Humanities and Social Sciences and more.</p>
            </div>
            <div class="para2">
                <p>Choosing the right University is an important decision for any student, for the professional success
                    one
                    aspires for in their lives, depends on this very decision. Graphic Era offers its prospective
                    students,
                    more than 85 UG, PG and Doctoral Programmes to choose from, spread across various domains such as
                    Engineering, Computer Application, Management, Commerce, Life Sciences, Food Technology,
                    Hospitality,
                    Paramedical, Humanities and Social Sciences and more.</p>


            </div>
        </section>
        <section>
            <div class="para2">
                <p>The application process at Graphic Era is strictly based on the Merit of the qualifying examination
                    with the entire Admission Process available for completion online. *NOTE: Graphic Era doesn’t
                    outsource any of its admission activities. Please beware of imposters posing to represent Graphic
                    Era. For any and all clarifications, please write to us at enquiry@geu.ac.in or call us on our Toll
                    Free: 1800 890 6027</p>
            </div>
            <div class="para1">
                <p>The application process at Graphic Era is strictly based on the Merit of the qualifying examination
                    with the entire Admission Process available for completion online. *NOTE: Graphic Era doesn’t
                    outsource any of its admission activities. Please beware of imposters posing to represent Graphic
                    Era. For any and all clarifications, please write to us at enquiry@geu.ac.in or call us on our Toll
                    Free: 1800 890 6027</p>
            </div>
        </section>
    </div>
    <h2>The Application Process:</h2>
    <br>
    <section class="hello">
        <div class="head">
            <div class="number">
                <h1>1</h1>
                <h3>Choose your Course of Interest</h6>
            </div>
            <div>
                <p>This is the most important step of your application process, since there are more than 85 Programs to
                    choose from at UG, PG and PhD Level. Considering your core skills, aptitude and interest are key
                    factors before arriving at the right choice.</p>
            </div>
        </div>
        <div class="head">
            <div class="number">
                <h1>2</h1>
                <h6>Choose your Course of Interest</h6>
            </div>
            <div>
                <p>This is the most important step of your application process, since there are more than 85 Programs to
                    choose from at UG, PG and PhD Level. Considering your core skills, aptitude and interest are key
                    factors before arriving at the right choice.</p>
            </div>
        </div>
    </section>
    <section class="hello">
        <div class="head">
            <div class="number">
                <h1>3</h1>
                <h6>Choose your Course of Interest</h6>
            </div>
            <div>
                <p>This is the most important step of your application process, since there are more than 85 Programs to
                    choose from at UG, PG and PhD Level. Considering your core skills, aptitude and interest are key
                    factors before arriving at the right choice.</p>
            </div>
        </div>
        <div class="head">
            <div class="number">
                <h1>4</h1>
                <h6>Choose your Course of Interest</h6>
            </div>
            <div>
                <p>This is the most important step of your application process, since there are more than 85 Programs to
                    choose from at UG, PG and PhD Level. Considering your core skills, aptitude and interest are key
                    factors before arriving at the right choice.</p>
            </div>
        </div>
    </section>

    <section>
        <form method="POST">
        <fieldset>
<legend>Personalia:</legend>
            <div class="innerForm">
                <h1>Enquire Now </h1>
                <hr>
                <br>
                <label for="fname">Candidate's Name</label>
                <input type="text" id="fname" name="CandidateName" placeholder="Your name..">

                <label for="lname">Father's Name</label>
                <input type="text" id="lname" name="FatherName" placeholder="Your father's name..">
                <br>
                <label for="male"> Gender </label>
                <label for="male">Male</label>
                <input type="radio" id="male" name="Gender" value="Male">
                <label for="Female">Female</label>
                <input type="radio" id="Female" name="Gender" value="Female">
                <br>
                <br>
                <label for="Address">Address For Correspondence</label>
                <input type="text" id="lname" name="Address" placeholder="">
                <div class="phno">

                    <label for="FNO">Father's Phone No.</label>
                    <input type="tel" id="fpn" name="FathersPhoneNumber" placeholder="">
                    <label for="CNO">Candidate's Phone No.</label>
                    <input type="tel" id="cpn" name="CandidatesPhoneNumber" placeholder="">
                </div>

                <br>
                <div class="email">
                    <label for="ema">Student E-mail Address</label>
                    <input type="ema" id="ema" name="StudentEmail" placeholder="">
                    <label for="email">Guardian's E-mail Address</label>
                    <input type="email" id="email" name="GuardiansEmail" placeholder="">
                </div>
                <h4>Eduactional Qualifications</h4>
                <br>
                <table border="1">

                    <tr>
                        <th>Class</th>
                        <th>Exam Passed/Apperaing</th>
                        <th>Board/University</th>
                        <th>Year</th>
                        <th>Percantage%</th>
                    </tr>
                    <tr>
                        <td>10th</td>
                        <td><input type="text" name="ExamPassedAppearing10"></td>
                        <td><input type="text" name="BoardUniversity10"></td>
                        <td><input type="text" name="Year10"></td>
                        <td><input type="text" name="Percentage10"></td>
                    </tr>
                    <tr>
                        <td>12th</td>
                        <td><input type="text" name="ExamPassedAppearing12"></td>
                        <td><input type="text" name="BoardUniversity12"></td>
                        <td><input type="text" name="Year12"></td>
                        <td><input type="text" name="Percentage12"></td>
                    </tr>
                    <tr>
                        <td>Gradution</td>
                        <td><input type="text" name="GraduationExamPassedAppearing"></td>
                        <td><input type="text" name="GraduationUniversity"></td>
                        <td><input type="text" name="GraduationYear"></td>
                        <td><input type="text" name="GraduationPercentage"></td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td><input type="text" name="OtherExampassedAppearing"></td>
                        <td><input type="text" name="OtherBoardUniversity"></td>
                        <td><input type="text" name="Other3"></td>
                        <td><input type="text" name="Other4"></td>
                    </tr>
                </table>
                <label for="p">Program Interested in</label>
                <input type="text" id="p" name="ProgramInterested" placeholder="">
                <label for="cc"> Campus Choice : </label>

                <label for="geu">Geu Dehradhun</label>
                <input type="radio" id="geu" name="CampusChoice" value="geu">
                <label for="gehu">Gehu Derhadhun</label>
                <input type="radio" id="gehu" name="CampusChoice" value="gehu">
                <label for="geub">Gehu Bhimtal</label>
                <input type="radio" id="gehb" name="CampusChoice" value="gehb">
                <br>
                <BR>
                <label for="Entrance">Entrance Exam Appeared</label>
                <label for="Entrance">CAT</label>
                <input type="radio" id="exa" name="EntranceExamAppeared" value="exa">
                <label for="Entrance">MAT</label>
                <input type="radio" id="exa" name="EntranceExamAppeared" value="exa">
                <label for="Entrance">JEE MAINS</label>
                <input type="radio" id="EXAM" name="EntranceExamAppeared" value="EXAM"><br>

                <label for="cc"> Roll No : </label>
                <input type="number" id="RollNo" name="RollNo" value="roll">
                <label for="Entrance">Score/Percentile</label>
                <input type="number" id="RollNo" name="ScorePercentile" value="roll">
                <br><br>
                <P>HOW DO YOU KNOW ABOUT GRAPHIC ERA ? </P>
                <label for="source">Social Media</label>
                <input type="radio" id="source" name="HowCometoknowaboutGEU" value="source">
                <label for="sou">Print Media</label>
                <input type="radio" id="sou" name="HowCometoknowaboutGEU" value="sou">
                <label for="sour">Elctronic Media</label>
                <input type="radio" id="sour" name="HowCometoknowaboutGEU" value="sour">
                <br>
                <br>
                <label for="sourc">Any other Source:(please specify name)</label>
                <input type="text" id="other" name="AnyOtherSources">





                <input name="submitEvent" type="submit" value="Submit">
            </div>
    </fieldset>
        </form>
    </section>
    <!-- <footer>
    <p>Madhav PVT LTD. All Right Reserved &copy; 2023</p>
</footer> -->
    <a class="verify" href="./webcam/index.php"><button>Click Here to Verify Your Image</button></a>

</body>

</html>

<?php
error_reporting(0);

include "server.php";


if (isset($_POST['submitEvent'])) {
  
    $CandidateName = $_POST['CandidateName'];
    $FatherName = $_POST['FatherName'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $FathersPhoneNumber = $_POST['FathersPhoneNumber'];
    $CandidatesPhoneNumber = $_POST['CandidatesPhoneNumber'];
    $studentemail = $_POST['StudentEmail'];
    $guardiansemail = $_POST['GuardiansEmail'];
    $a1 = $_POST['ExamPassedAppearing10'];
    $a2 = $_POST['BoardUniversity10'];
    $a3 = $_POST['Year10'];
    $a4 = $_POST['Percentage10'];
    $a5 = $_POST['ExamPassedAppearing12'];
    $a6 = $_POST['BoardUniversity12'];
    $a7 = $_POST['Year12'];
    $a8 = $_POST['Percentage12'];
    $a9 = $_POST['GraduationExamPassedAppearing'];
    $a10 = $_POST['GraduationUniversity'];
    $a11 = $_POST['GraduationYear'];
    $a12 = $_POST['GraduationPercentage'];
    $a13 = $_POST['OtherExamPassedAppearing'];
    $a14 = $_POST['OtherBoardUniversity'];
    $a15 = $_POST['Other3'];
    $a16 = $_POST['Other4'];
    $Programinterested = $_POST['ProgramInterested'];
    $Campuschoice = $_POST['CampusChoice'];
    $Entranceexam = $_POST['EntranceExamAppeared'];
    $whygeu = $_POST['HowCometoknowaboutGEU'];
    $othersource = $_POST['AnyOtherSources'];

    echo "$CandidateName";
    echo "<br>";
    // echo "ExamPassedAppearing10 : ".$a1;
    echo "<br>";

    $query="INSERT INTO `erashan` (CandidateName,FatherName,Gender,Address,FatherphoneNumber,CandidatephoneNumber,studentemail,guardiansEmail,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,programinterested,Campuschoice,Entranceexam,whygeu,othersource) 
    VALUES('$CandidateName','$FatherName','$Gender','$Address','$FathersPhoneNumber','$CandidatesPhoneNumber','$studentemail','$guardiansemail','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$Programinterested','$Campuschoice','$Entranceexam','$whygeu','$othersource')";

    $res = mysqli_query($conn, $query);
    if ($res && $a4!="") {
       if($a4>=75)
       {
        ?>
        <script type="text/javascript">
            location.href="http://localhost/geu/feespay.php";
        </script>
        <?php
       
       }
       else if($a4<75)
       {
        ?>
        <script type="text/javascript">
            alert("Sorry to Say But, You are not Eligible, try next time");
            
        </script>
        <?php
       }

    } else
        echo "New record Not Created!";

}


?>