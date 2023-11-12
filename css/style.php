<?php
header("Content-type: text/css");

?>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;


}

body {
  font-family: 'Montserrat', sans-serif;

}
.top a{
  display: flex;
justify-content: space-between;
  align-items: right;
}
.header {
   height:100vh;  
  width:100vw;
   <!-- background-image: url(../img/graphic.jpg);
   background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */ -->
  background: #7F7FD5;  /* fallback for old browsers */
backg
round: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
.content {
  position: fixed;
  top: 0;
  <!-- background: rgba(0, 0, 0, 0.5); -->
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  height:300px;
}
 #headerhai{
  display:flex;
  width:100%;
justify-content: space-between;

  
 }
.top {
  display: flex;
justify-content: space-between;
  align-items: center;
  <!-- border:1px solid; -->
  <!-- width:300px; -->
}
.top .login{
  background-color: #f34656 !important;
  margin: 0;
  padding:10px 14px !important;
  <!-- border: 4px solheaderhaiid gray; -->
}
.top button i{
  color: #fff !important;
  padding: 10px;
  
}
.top div{
  display: flex;
  justify-content: center;
  align-items: center;
}
#headerhai a button{
 

}
.navlinks a{
  background-color:#3a7bd5;
  margin:0 10px 0 0 ;
  border-radius:9px;
}
.enquiry {
  background-color: #0000FF;
  height:100%;
}
.top button{
  padding: 13px 15px;
  border: none;
  outline: none;
  border-radius: 5px;

  color: #fff;
  cursor: pointer;
  font-size: 17px;

} .top a{
  /* border: 1px solid; */
  padding: 0 !important;
  margin-left: 12px;
}


.top i {
  color: black !important;
  cursor: pointer;

}



i {
  color: brown;
  float: left;


}

.navbar {
  <!-- border-bottom: 2px solid #000; -->
  padding: 10px 30px 40px 30px;
  display: flex;
  /* justify-content: center; */
  /* align-items: center; */
  /* height: 70px; */
  flex-direction: column;
}

.navbar_1 a {
  text-transform: uppercase;
}

.navbar_1 .dropdown button {
  color: #000;
}

.navbar .down {
  /* border: 1px solid red; */
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 30px;
}

.navbar .down a {
  padding: 10px 13px;
  color: #000;
}

.header .navbar a {
  color: blue;
  text-decoration: none;
  color: #000;
}

.middle img {
  margin: 0 10px;
  height: 100%;
  /* border: 1px solid red; */
  border-radius: 50%;
}

.middle #logo {
  margin: 5px 0;
  /* border: 1px solid red; */
  height: 65px;
  display: flex;
  /* border: 2px solid; */
  box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
  padding: 3px;
  justify-content: center;
  align-items: center;
}

.navbar {
  overflow: hidden;
  /* background-color: #333; */
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  /* Important for vertical align on mobile phones */
  margin: 0;
  /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover,
.dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}




/* ================= Footer ================  */


#footer {
  background: #f7f7f7;
  padding: 3rem;
  /* padding-top: 5rem; */
  padding-top: 7rem;
  padding-bottom: 80px;
  background-image: url(https://arena.km.ua/wp-content/uploads/3538533.jpg);
}

#footer2 {
  background: #f7f7f7;
  padding: 3rem;
  margin-top: 0px;
  /* padding-top: 5rem; */
  padding-top: 7rem;
  padding-bottom: 80px;
  background-image: url(../images/cards/v748-toon-111.png);
}

.logo-footer {
  /* max-width: 300px; */
}

.social-links {
  /* display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center; */

}

.social-links h2 {
  padding-bottom: 15px;
  font-size: 20px;
  font-weight: 600;
}

.social-links img {
  padding-bottom: 25px;
}

.social-icons {
  /* display: flex;
      gap: 3rem; */
  display: flex;
  flex-direction: column;
  gap: 1rem;
  color: #777777;
}

.social-icons a {
  /* font-size: 18px; */
  /* background: #ffffff; */
  /* box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
      padding: 0.4rem 1rem 0.4rem 1rem;
      border-radius: 3px;
    color: #82074a; */
  /* margin-right: 18px; */
  color: #777777;
}

.social-icons a:hover {
  color: #000;
}

.social-icons a i {
  box-shadow: rgb(0 0 0 / 8%) 0px 4px 12px;
  padding: 0.4rem 1rem 0.4rem 1rem;
  border-radius: 3px;
  color: #82074a;
  font-size: 16px;
  margin-right: 12px;
}

li {
  list-style: none;
}

.useful-link h2 {
  padding-bottom: 15px;
  font-size: 20px;
  font-weight: 600;
}

.useful-link img {
  padding-bottom: 15px;
}

.use-links {
  line-height: 32px;
}

.use-links li i {
  font-size: 14px;
  padding-right: 8px;
  color: #898989;
}

.use-links li a {
  color: #303030;
  font-size: 15px;
  font-weight: 500;
  color: #777777;
}

.use-links li a:hover {
  color: #000;
}

.address h2 {
  padding-bottom: 15px;
  font-size: 20px;
  font-weight: 600;
}

.address img {
  padding-bottom: 15px;
}

.address-links li a {
  color: #303030;
  font-size: 15px;
  font-weight: 500;
  color: #777777;

}

.address-links li i {
  font-size: 16px;
  padding-right: 8px;
  color: #82074a;

}

.address-links li i:nth-child(1) {
  padding-top: 9px;
}

.address-links .address1 {
  font-weight: 500;
  font-size: 15px;
  display: flex;
}

.address-links {
  line-height: 32px;
  color: #777777;
}

.copy-right-sec {
  padding: 1.8rem;
  background: #82074a;
  color: #fff;
  text-align: center;
}

.copy-right-sec a {
  color: #fcd462;
  font-weight: 500;
}

/* ================= Footer ================  */

/* Add a red background color to navbar links on hover */
.navbar_2 a:hover,
.dropdown:hover .dropbtn {
  background-color: red;
}

.navbar a {
  color: #000 !important;
}


/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.navbar_2.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/*image for apply*/
#applyBg {
  height: 100vh;

  background-image: url('../img/dress.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;

}

#applyBg {
  display: flex;
  justify-content: end;
  flex-direction: column;
}

#applyBg marquee {
  font-size: 40px;
  margin-bottom: 30px;
}

#para {
  display: flex;
  justify-content: center;
  flex-direction: column;
}

#para .para1,
#para .para2 {
  margin: 10px;
}

/* }
 #para .para1,#para .para2 .para3{
flex-basis: 0%;
margin: 9px;
padding: 30px;
 } */

#para section {
  display: flex;
  justify-content: center;
}

#para p {
  font-weight: 300;
}

.adHead {
  text-align: center;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  padding: 7px;
  margin: 6px 10px;
}
.hello{
  display: flex;
  align-items: center;
  padding: 12px;
}
.head .number {
  display: flex;
  align-items: center;

}

.head h1 {
  font-size: 100px;
  color: cyan;
  font-weight: 800;
}

#parh {
  display: flex;
  justify-content: center;
  flex-direction: column;
}
#parh .para3{
  margin: 10px;
}
#parh section{
  display: flex;
  justify-content: center;
}


footer{
  padding: 40px;
  background: #777777;
  color: #000;
  margin-top: 20px;
}
footer p{
  text-align: center;
}



/* =========== form =============  */

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
  margin: 400px 10px;
  font-weight: 400;
  
}
form input{
  font-size: 18px;
}
form div{
  /* padding: 30px; */
  /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
  /* width: 50%/; */
  /* margin: 10px; */
 
}
.phno{
  display: flex;
  justify-content: space-between;
  
    
}
table{
  border-collapse: collapse;
 
}
table tr th{
  padding: 4px;

}
table tr td{
  height: 30px;
}
table tr input{
  height: 100%;
  border: none;
  outline: none;
  width: 100%;
}
.email{
  display:flex;
  justify-content: space-between;
}
