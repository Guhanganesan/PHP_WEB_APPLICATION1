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
            <h3>Register and Login to check your PHP Strength!!</h3>
        </div>
        <div class="col-2">
            <h2 style="margin-right:0px;"><a href="Register.php" style="color:white;">Register</a></h2>
            <p><a href="Login.php" style="color:white;"> Login</a></p>
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
        <p>
            Hi Dear Friends,<br>
                           This is Guhan. I am working as a consultant in Payilagam Software Training Institute in Velachery.<br>
                            Payilagam is dedicated to producing high quality IT professionals. Payilagam has a moral vision to nurture professionals of high academic calibre and perfect character. Our training programs are intended to help the trainees to enhance their knowledge and skill level to have competitive edge in the market. We provide training in Chennai on various courses including Java, .NET, Software Testing, PHP, Android, Ionic, Selenium, DevOps, Hadoop, etc. 
                       
        </p>
</div>

</div>

<div class="row">
<div class="col-12" >
    
    
    <p style="margin-left:15px;text-align:justify;">
        
           <b style="color:blue;"> HTML:</b>
                   Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript it forms a triad of cornerstone technologies for the World Wide Web. Web browsers receive HTML documents from a web server or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.<BR><br>
                     <b style="color:blue;">  CSS:</b>
                       Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language. Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces for many mobile applications.<br><br>
                       <b style="color:blue;">JavaScript:</b>
                          JavaScript often abbreviated as JS, is a high-level, dynamic, weakly typed, object-based, multi-paradigm, and interpreted programming language. Alongside HTML and CSS, JavaScript is one of the three core technologies of World Wide Web content production. It is used to make webpages interactive and provide online programs, including video games. <br>
                          
                         
                          
                          </p>
  
</div>
</div>




<div class="row">
    <div class="col-12" >
         <p style="margin-left:15px;text-align:justify;">
   <b style="color:blue;">jQuery:</b>
                          jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML.It is free, open-source software using the permissive MIT License. Web analysis indicates that it is the most widely deployed JavaScript library by a large margin.
                          <br><br>
                          
                         <b style="color:blue;">MySQL:</b>MySQLis an open-source relational database management system (RDBMS). Its name is a combination of "My", the name of co-founder Michael Widenius's daughte and "SQL", the abbreviation for Structured Query Language. <br><br>
                          
                         <b style="color:blue;">PHP:</b>PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Development Team. PHP originally stood for Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.
                         
  </p>
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
