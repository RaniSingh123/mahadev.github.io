<?php

?>
<!Doctype html>
<html>
	<head>
		<title>Mahadev Sweets and Restaurant</title>
		<link href="index.css" rel="stylesheet" type="text/css"/>
		<script>
		   var img=["img/food.jpg","img/girl.jpg","img/c3.jpg","img/n2.jpg","img/s6.jpg","img/s7.jpg"];
		    var text=["<b><u>Anuj& Misthi</u></b><br/>It is just a year back,when we both met at dream wedding.com .I sent a request and she accepted.we started to chat.chat goes.. we feel that we are made for each other then we decided to marry..after some month we marry and now we live our haapy life ..<br/>Thanks To Dream Wedding ","<b><u>Kunal & Kuhu</u></b><br/>It is just a year back,when we both met at dream wedding.com .I sent a request and she accepted.we started to chat.chat goes.. we feel that we are made for each other then we decided to marry..after some month we marry and now we live our haapy life ..<br/>Thanks To Dream Wedding ","<b><u>Abhishekh & Naira</u></b><br/>It is just a year back,when we both met at dream wedding.com .we started to chat.chat goes.. we feel that we are made for each other then we decided to marry...Thanks To Dream Wedding ","<b><u>sunil & jamine</u></b><br/>It is just a year back,when we both met at dream wedding.com .I sent a request and she accepted.. we feel that we are made for each other then we decided to marry..after some month we marry and now we live our haapy life ..Thanks To Dream Wedding ","<b><u>Maikal & meenu</u></b><br/>It is just a year back,when we both met at dream wedding.com .I sent a request and she accepted.we started to chat.chat goes....<br/>Thanks To Dream Wedding ","<b><u>Salman & Shivani</u></b><br/>It is just a year back,when we both met at dream wedding.com .I sent a request and she accepted.we started to chat.chat goes.. we feel that we are made for each other then we decided to marry..after some month we marry and now we live our haapy life ..<br/>Thanks To Dream Wedding "];
			 
			 
			index=0;
			 
			function slider()
			{
			 var b=document.getElementById("comment");
			 b.src=img[index];
			 var txt=document.getElementById("text");
			// txt.style.textAlign="justify";
			 txt.innerHTML=text[index];
			
				index++;
			 if(img.length==index || txt.length==index)
				{
				index=0;
				}
				
				window.setTimeout("slider()",2500);
			}
			
			function age()
			{
			var age=document.getElementById("age");
			var res="<option>16</option>";
			for(var i=17;i<=30;i++)
			{
			res=res+"<option>"+i+"</option>";
			}
			
			age.innerHTML=res;
			}
		 function to()
			{
			var to=document.getElementById("to");
			var res="<option>23</option>";
			for(var i=23;i<=50;i++)
			{
			res=res+"<option>"+i+"</option>";
			}
			
			to.innerHTML=res;
			}
		</script>

		
	</head>
	<body onload="slider()">
		<div id="outer">
			<header>
			<div id="header">
			
				<div id="logo">
					 <span style="color:#f0910a;font-size:45px;font-family:Alternate gothic;">&nbsp;<b>Mahadev</b></span>&nbsp;&nbsp;<span style="color:white;font-size:30px;font-family:rockwell;"><b><i>Sweets & Restaurant</i></b></span>  
					<!-- <img src="img/logo.jpeg" height="67px" width="90px" border="1px solid" style="border-radius:50px"/> -->
				</div>
				
				<nav><div id="nav">
					<ul>
						<a href="#"><li>Home</li></a>
						<a href="aboutus.html"><li>About Us</li></a>
						<a href="contactus.html"><li>Contact Us</li></a>
						
					</ul>
				</div></nav>
			</div>
			</header>
			
			<main>
			<div id="main">
			
				<div id="slider">

					<!--<img id="box"/>-->
					<div id="s_left"><h2><i>The Secret Of Getting Ahead is getting Started....</i></h2></div>
					<div id="registration">
					<br/>
						<font color="crimson" style="margin-left:60px;"><b>Find Your Matrimony Match Today!</b></font>
						<br/><br/><br/>
						<font color="white">Looking For : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select ><option>Bride</option><option>Bride</option><option>Bride</option></select>
						</font>
						<br/><br/>
						<font color="white">Age : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select id="age" onmouseover="age()"><option>16</option></select> </font>
						<font color="white" style="margin-left:20px;">To&nbsp;&nbsp;&nbsp;&nbsp;
							<select id="to" onmouseover="to()"><option>23</option></select>
						</font>
						<br/><br/>
						<font color="white">Religion : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select ><option>Doesn't matter</option><option>Hindu</option><option>Muslim</option></select>
						</font>
						<br/><br/>
						<font color="white">Mother Tongue : &nbsp;&nbsp;&nbsp;&nbsp;
							<select ><option>Select mother tongue</option><option>Hindi</option><option>malyalam</option><option>bengali</option></select>
						</font>
						<br/><br/>
						<font color="white">Country : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select ><option>India</option><option>USA</option><option>Japan</option></select>
						</font><br/><br/><br/>
						<center><input type="button" style="background-color:crimson;color:white" value="search" /></center>
					</div>
					
					
				</div>
				
				<div id="side">
					<div id="top">
						<div class="c1" style="background-color:#f80b05;"><br/><br/>Register</div>
						<div class="c1" style="background-color:#f0910a;"> <br/><br/>Search</div>
						<div class="c1" style="background-color:#3ce41b;"><br/><br/>Connect</div>
						<div class="c1" style="background-color:#06b7f7;"><br/><br/>Meet</div>

					</div>
					<div id="wlcm" style="height:100px;width:500px;margin-left:110px;">
					<h1 style="text-align:center;color:gray;">Welcome to our Site..</h1>
					<p style="color:dimgray;text-align:justify;">Once again we're thrilled to have the support this week of <span style="color:orange;font-weight:bold;">Wedding web</span>.Once again we're thrilled to have the support this week <span style="color:orange;font-weight:bold;"> sadi.com.</span>Visitors have the oppurtunity of viewing and interacting with some of our emus.</p>
					</div>
					
					<div id="buttom">
					    <div class="b1"><img src="img/plae.jpg"style=" height:150px; width:250px; border-radius:20px ;"/></div>
					    <div class="b1"><img src="img/food.jpg"style=" height:150px; width:250px; border-radius:20px;"/></div>
					</div>
					<div id="buttom2">
					    <div class="b2"><img src="img/sideplate.jpg"style=" height:150px; width:250px; border-radius:20px;"/></div>
					    <div class="b2"><img src="img/girl.jpg"style=" height:150px; width:250px; border-radius:20px;"/></div>
					</div>
			
				</div>
				
				<aside>
					<div id="aside">
						<div id="content">
						<center><h1 style="color:white;font-family:rockwell;font-size:30px;">&hearts;&hearts;&nbsp;&nbsp;<i>Success Story</i>&nbsp;&nbsp;&hearts;&hearts;</h1>
						<img style="box-shadow:0px 5px  7px 0px #e0792c80; height:200px; width:300px; border-radius:5px;" id="comment"/>
					
						<div id="text" style="height:200px;width:280px;color:white;margin-top:50px;"></div>
						<!--<h1 style="color:crimson;">Our content</h1><hr/>
						
						<p>Being Hard to contact</p>
						<hr/>
						<p>Being Hard to contact</p><hr/>
						<p>Being Hard to contact</p><hr/>
						-->
						</center>
						</div>
					</div>
				</aside>
			</div>
			</main>
			<footer><div id="footer" style="text-align:center;"><br/><br/>copyright&copy; and  designed by Rani </div></footer>
			
		</div>
	</body>
</html>
<?php

?>