<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" ></link>
    <title>Guhan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.header {
    border: 0px solid red;
    padding: 2px;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 5px;
    border: 0px solid red;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
ul{margin-top:-1px;}
ul li{float:left;border:0px solid blue;padding:10px;width:280px;text-align:center;height:50px;background:blue;
color:white;margin-left:3px;margin-top:1px;}
li:hover{background:red;color:white;}

#h2{margin-right:2px;}
</style>
</head>
<body style="background:pink;">
    
    <div class="row" style="background-color:green;color:white;">
        <div class="col-2">
            <h2>Guhan</h2>
        </div>
        <div class="col-7">
            <h2><marquee>Welcome to PHP World!!!</marquee></h2>
        </div>
        <div class="col-2">
            <h2 style="margin-right:0px;"><a href="Register.php" style="color:white;">Register</a></h2>
            <p><a style='color:white;' href='Register.php'> Logout</a></p>
        </div>
    </div>

<div class="row">
<div class="col-4" style="padding:2px;">
<ul type="none">

<li> HTML</li>
<li>CSS </li>
<li>JAVASCRIPT </li>
<li>JQUERY </li>
<li>MYSQL </li>
<li>PHP </li>

</ul>
  
</div>







<div class="col-8" >
  
        <img src="guha.jpg" style="width:130px;height:130px;"></img>
        <br>
        <p style="color:black;">
            Hi Dear Friends,<br>
                           This is Guhan. I am working as a consultant in Payilagam Software Training Institute in Velachery.<br>
                            Payilagam is dedicated to producing high quality IT professionals. Payilagam has a moral vision to nurture professionals of high academic calibre and perfect character. Our training programs are intended to help the trainees to enhance their knowledge and skill level to have competitive edge in the market. We provide training in Chennai on various courses including Java, .NET, Software Testing, PHP, Android, Ionic, Selenium, DevOps, Hadoop, etc. 
                       
        </p>
</div>

</div>

<div class="row">
<div class="col-12" >
    
    <style>
 p{color:blue;font-weight:bold;font-size:18px;}
</style>
<form method="post" action="PHP.php">  
<div style="float:left;">
<p style="color:blue;">1. PHP is a? <br>
<input type="radio" name="i0" value=1 />A.Server side scripting language<br>
<input type="radio" name="i0" value=0 />B.Client side scripting language<br>
<input type="radio" name="i0" value=0 />C.Middle level Language<br>
<input type="radio" name="i0" value=0 />D.Light programming language<br></p>
<p style="color:blue;">2. What does PHP stand for? <br>
<input type="radio" name="i1" value=1 />A.PHP: Hypertext Preprocessor<br>
<input type="radio" name="i1" value=0 />B.Personal Hypertext Processor<br>
<input type="radio" name="i1" value=0 />C.Private Home Page<br>
<input type="radio" name="i1" value=0 />D.All of the Above<br></p>
<p style="color:blue;">3. How do you write "Hello World" in PHP? <br>
<input type="radio" name="i2" value=0 />A. "Hello World";<br>
<input type="radio" name="i2" value=1 />A.echo "Hello World";<br>
<input type="radio" name="i2" value=0 />A.Document.Write("Hello World");<br>
<input type="radio" name="i2" value=0 />A.Hello World<br></p>
</div>
<div style="float:left;">
<p style="color:blue;">4. All variables in PHP start with which symbol? <br>
<input type="radio" name="i3" value=0 />A.@<br>
<input type="radio" name="i3" value=0 />B.%<br>
<input type="radio" name="i3" value=0 />C.#<br>
<input type="radio" name="i3" value=1 />D.$<br>
<p style="color:blue;">5. The PHP syntax is most similar to: <br>
<input type="radio" name="i4" value=0 />A.VBScript<br>
<input type="radio" name="i4" value=1 />B.Perl and C<br>
<input type="radio" name="i4" value=0 />C.JavaScript<br>
<input type="radio" name="i4" value=0 />D.HTML<br></p>
<input type="submit" name="submit" value="submit" style="margin-left:100px;"/>
</div>
</form>


<?php
//session_start();
//$s=$_SESSION['mob'];
if(isset($_POST['submit'])){
	     if(empty($_POST['i0']))
	     {
			$_POST['i0']=0;
				
		 }
		 if(empty($_POST['i1'])){
			 $_POST['i1']=0;
		 }
		 
         if(empty($_POST['i2']))
	     {
			$_POST['i2']=0;
				
		 }
		 if(empty($_POST['i3'])){
			 $_POST['i3']=0;
		 }
		 
         if(empty($_POST['i4']))
	     {
			$_POST['i4']=0;
				
		 }
	
        $x=array($_POST['i0'],$_POST['i1'],$_POST['i2'],$_POST['i3'],$_POST['i4']);
        
        
     $host="localhost";
     $user="id3242175_guha_5599";
     $pass="guha0804";
     
     $con=mysqli_connect($host,$user,$pass, "id3242175_guha");
		
        $query="update java
		set A1=$x[0],A2=$x[1], A3=$x[2], A4=$x[3], A5=$x[4]";
		if(mysqli_query($con, $query))
		{
             $query1="SELECT A1,A2,A3,A4,A5, A1+A2+A3+A4+A5 as total from java WHERE user_id='x'";
		     $result=mysqli_query($con,$query1);
   		     $row= mysqli_fetch_row($result);
		 	 	 
		     if($row)
		      {			     
                    
                echo "<b style='color:blue;'>  Your Total Mark is: $row[5] </b><br>";
				//$query2="delete from test  WHERE user_id='x'";
		       // $result=mysql_query($query2);
	          }
		}
//session_destroy();
		
}

?>


    
    
</div>


</div>
    
    
<div class="header" style="background:green;">
  <h1 style="color:white;">Contact:</h1>
  <p style="color:white;font-size:22px;">Guhan</p>
  <p style="color:white;">Consultant<br>
       Payilagam<br>
   Velachery, Chennai.</p>
</div>

</body>
</html>
