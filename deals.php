<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1-transitional">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
BODY {
	background-image: url("Background.jpg")
	background-position: top, center;
	background-repeat: repeat-x;
	background-size: 2600px 200px;
	background-color: #FFFFFFFF;
	margin-left: 10px;
	margin-right: 10px;
	background-attachment: scroll;
	background-position: left top;
}

#logo div img {
	margin-top: -27px;
	margin-right: -27px;
	margin-bottom: -27px;
	margin-left: -27px;
}
body,td,th {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #000000;
	background-repeat: no-repeat;
	}
.button {
   border: 3px solid #0a3c59;
   background: #5389ad;
   background: -webkit-gradient(linear, left top, left bottom, from(#79aed1), to(#5389ad));
   background: -webkit-linear-gradient(top, #79aed1, #5389ad);
   background: -moz-linear-gradient(top, #79aed1, #5389ad);
   background: -ms-linear-gradient(top, #79aed1, #5389ad);
   background: -o-linear-gradient(top, #79aed1, #5389ad);
   background-image: -ms-linear-gradient(top, #79aed1 0%, #5389ad 100%);
   padding: 11px 22px;
   -webkit-border-radius: 11px;
   -moz-border-radius: 11px;
   border-radius: 11px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #94a5b0 0 1px 0;
   color: #033a5e;
   font-size: 24px;
   font-family: helvetica, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border: 3px solid #0a3c59;
   text-shadow: #1e4158 0 1px 0;
   background: #3e779d;
   background: -webkit-gradient(linear, left top, left bottom, from(#65a9d7), to(#3e779d));
   background: -webkit-linear-gradient(top, #65a9d7, #3e779d);
   background: -moz-linear-gradient(top, #65a9d7, #3e779d);
   background: -ms-linear-gradient(top, #65a9d7, #3e779d);
   background: -o-linear-gradient(top, #65a9d7, #3e779d);
   background-image: -ms-linear-gradient(top, #65a9d7 0%, #3e779d 100%);
   color: #fff;
   }
.button:active {
   text-shadow: #1e4158 0 1px 0;
   border: 3px solid #0a3c59;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#3e779d));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   background-image: -ms-linear-gradient(top, #3e779d 0%, #65a9d7 100%);
   color: #fff;
   }
#pricing-table {
	margin: 100px auto;
	text-align: center;
	width: 892px; /* total computed width = 222 x 3 + 226 */
}

#pricing-table .plan {
	font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;
	text-shadow: 0 1px rgba(255,255,255,.8);        
	background: #fff;      
	border: 1px solid #ddd;
	color: #333;
	padding: 20px;
	width: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px */      
	float: left;
	position: relative;
}

#pricing-table #most-popular {
	z-index: 2;
	top: -13px;
	border-width: 3px;
	padding: 30px 20px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
	-webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
	box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);    
}

#pricing-table .plan:nth-child(1) {
	-moz-border-radius: 5px 0 0 5px;
	-webkit-border-radius: 5px 0 0 5px;
	border-radius: 5px 0 0 5px;        
}

#pricing-table .plan:nth-child(4) {
	-moz-border-radius: 0 5px 5px 0;
	-webkit-border-radius: 0 5px 5px 0;
	border-radius: 0 5px 5px 0;        
}

/* --------------- */	

#pricing-table h3 {
	font-size: 20px;
	font-weight: normal;
	padding: 20px;
	margin: -20px -20px 50px -20px;
	background-color: #eee;
	background-image: -moz-linear-gradient(#fff,#eee);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));    
	background-image: -webkit-linear-gradient(#fff, #eee);
	background-image: -o-linear-gradient(#fff, #eee);
	background-image: -ms-linear-gradient(#fff, #eee);
	background-image: linear-gradient(#fff, #eee);
}

#pricing-table #most-popular h3 {
	background-color: #ddd;
	background-image: -moz-linear-gradient(#eee,#ddd);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));    
	background-image: -webkit-linear-gradient(#eee, #ddd);
	background-image: -o-linear-gradient(#eee, #ddd);
	background-image: -ms-linear-gradient(#eee, #ddd);
	background-image: linear-gradient(#eee, #ddd);
	margin-top: -30px;
	padding-top: 30px;
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0; 		
}

#pricing-table .plan:nth-child(1) h3 {
	-moz-border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	border-radius: 5px 0 0 0;       
}

#pricing-table .plan:nth-child(4) h3 {
	-moz-border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	border-radius: 0 5px 0 0;       
}	

#pricing-table h3 span {
	display: block;
	font: bold 25px/100px Georgia, Serif;
	color: #777;
	background: #fff;
	border: 5px solid #fff;
	height: 100px;
	width: 100px;
	margin: 10px auto -65px;
	-moz-border-radius: 100px;
	-webkit-border-radius: 100px;
	border-radius: 100px;
	-moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
	-webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
	box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
}

/* --------------- */

#pricing-table ul {
	margin: 20px 0 0 0;
	padding: 0;
	list-style: none;
}

#pricing-table li {
	border-top: 1px solid #ddd;
	padding: 10px 0;
}

/* --------------- */
	
#pricing-table .signup {
	position: relative;
	padding: 8px 20px;
	margin: 20px 0 0 0;  
	color: #fff;
	font: bold 14px Arial, Helvetica;
	text-transform: uppercase;
	text-decoration: none;
	display: inline-block;       
	background-color: #72ce3f;
	background-image: -moz-linear-gradient(#72ce3f, #62bc30);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#72ce3f), to(#62bc30));    
	background-image: -webkit-linear-gradient(#72ce3f, #62bc30);
	background-image: -o-linear-gradient(#72ce3f, #62bc30);
	background-image: -ms-linear-gradient(#72ce3f, #62bc30);
	background-image: linear-gradient(#72ce3f, #62bc30);
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;     
	text-shadow: 0 1px 0 rgba(0,0,0,.3);        
	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
	box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
}

#pricing-table .signup:hover {
	background-color: #62bc30;
	background-image: -moz-linear-gradient(#62bc30, #72ce3f);
	background-image: -webkit-gradient(linear, left top, left bottom, from(#62bc30), to(#72ce3f));      
	background-image: -webkit-linear-gradient(#62bc30, #72ce3f);
	background-image: -o-linear-gradient(#62bc30, #72ce3f);
	background-image: -ms-linear-gradient(#62bc30, #72ce3f);
	background-image: linear-gradient(#62bc30, #72ce3f); 
}

#pricing-table .signup:active, #pricing-table .signup:focus {
	background: #62bc30;       
	top: 2px;
	-moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
	-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
	box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset; 
}

/* --------------- */

.clear:before, .clear:after {
  content:"";
  display:table
}

.clear:after {
  clear:both
}

.clear {
  zoom:1
}
-->
</style> 
<link rel="shortcut icon" href="favicon.ico.png" />
<meta http-equiv="Content-Type" content="text/html; charset= utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="styles.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
<link rel='stylesheet' id='camera-css'  href='camera.css' type='text/css' media='all' /> 
\
	<!-- Style for camera-->
    <style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: #FF00FF;
		}
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
		
		h1
		{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			font-color: black;
		}
		h6
		{
			font-family: "Trebuchet MS", Helvetica, sans-serif;
			font-color: grey;
			font-size: 1em;
			
		}
	</style>
    <script type='text/javascript' src='jquery.min.js'></script>
    <script type='text/javascript' src='jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='camera.min.js'></script>
    <!-- Style for camera-->
	
	<script src="jquery.js"></script>
    <script src="amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="amazingslider-1.css">
    <script src="initslider-1.js"></script>
    <script type="text/javascript">
	<!-- Style for slider -->
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
 
<title>Affinity Travel Agency</title>
</head>
<body background="Background.jpg" bgcolor="#f2f5fa" >
<!-- Logo -->
<TABLE WIDTH="100%" ALIGN="LEFT">
	<TR>
		<TD ALIGN="LEFT">
			<a href="Affinity.html">  <img src="Logo2.png" width="360px" height="180px" alt=""/></A>
		</TD>
	</TR>
</TABLE>

<br />
<!--Navigation bar-->
<TABLE WIDTH="100%" BACKGROUND="opaque_drk.png" ALIGN="CENTER" bgcolor="#515151">
	<TR>
		<td width="20%">
		</td>
		<TD ALign="Center" width="60%">
			<div id='cssmenu'>
				<ul>
				   <li class='last'><a href='Affinity.html'><span>Home</span></a></li>
				   <li class='last'><a href='PlanYourVacation.html'><span>Plan Your Vacation</span></a></li>
				   <li><a href='travelInfo.html'><span>Travel Info</span></a></li>
				   <li class='last'><a href='Activities.html'><span>Activities</span></a></li>
				   <li class='active'><a href='deals.html'><span>Deals</span></a></li>
				   
				</ul>
			</div>
		</TD>
		<td width="20%">
		</td>
	</TR>
</TABLE>
<br />

<div id="pricing-table" class="clear">
    <div class="plan" id "Mountainside Suite">
        <h3>Fairmont Mountainside Suite<span>$500</span></h3>         
        <ul>
        <li><b>Luxury Suite Amenities</b>$100</li>
		<li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Dining</b>$100 for All Dining</li>
            <li><b>Price (Per Day)</b>$700</li>
        </ul> 
    </div>
    <div class="plan" id="Regular Suite">
        <h3>Regular Suite<span>$550</span></h3>       
        <ul>
            <li><b>Luxury Suite Amenities</b>$100</li>
            <li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Dinner Included in Price</b>$50</li>
	    <li><b>Price (Per Day)</b>$700</li>			
        </ul>    
    </div>
    <div class="plan">
        <h3>Oceanfront 2 Bedroom Villa<span>$350</span></h3>
        <ul>
            <li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast</b></li>
	    <li><b>Price (Per Day)</b>$350</li>			
        </ul>
    </div>
    <div class="plan">
        <h3>Oceanfront 3 Bedroom Villa<span>$450</span></h3>	
        <ul>
            <li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast</b></li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div> 	
	 </div>
    <div class="plan">
        <h3>Oceanview 2 Bedroom Villa<span>$400</span></h3>	
        <ul>
            <li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast</b></li>
            <li><b>Price (Per Day)</b>$400</li>			
        </ul>
    </div>
 </div>
    <div class="plan">
        <h3>Oceanview 3 Bedroom Villa<span>$500</span></h3>	
        <ul>
            <li><b>All Rooms Include all the activities the resort has to offer</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast</b></li>
            <li><b>Price (Per Day)</b>$500</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Premium Suite<span>$5000</span></h3>	
        <ul>
		    <li><b>Luxury Suite Amenities</b>$400</li>
            <li><b>All Rooms include all the cruise has to offer (Some activites require an extra fee)</b>(Some activities require an extra fee)</li>
            <li><b>All Luxury Dining Included in Price</b>$600</li>
            <li><b>Price (Per Trip)</b>$6,000</li>			
        </ul>
    </div> 	
	<div class="plan">
        <h3>Regular Suite<span>$3,500</span></h3>	
        <ul>
		    <li><b>Regular Suite Amenities</b>$250</li>
            <li><b>All Rooms include all the cruise has to offer (Some activites require an extra fee)</b>(Some activities require an extra fee)</li>
            <li><b>Luxury Dinner Included in Price</b>$450</li>
            <li><b>Price (Per Trip)</b>$4,200</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Regular Suite<span>$3,500</span></h3>	
        <ul>
		    <li><b>Regular Suite Amenities</b>$250</li>
            <li><b>All Rooms include all the cruise has to offer (Some activities require an extra fee)</b>(Some activities require an extra fee)</li>
            <li><b>Luxury Dinner Included in Price</b>$450</li>
            <li><b>Price (Per Trip)</b>$4,200</li>			
        </ul>
    </div>
	
	<div class="plan">
        <h3>Mini-Suite<span>$3,000</span></h3>	
        <ul>
		    <li><b>Mini-Suite Amenities</b>$150</li>
            <li><b>All Rooms include all the cruise has to offer (Some activities require an extra fee)</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast, Lunch, and Dinner</b>$150</li>
            <li><b>Price (Per Trip)</b>$3,300</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Balcony<span>$2,500</span></h3>	
        <ul>
		    <li><b>Basic Amenities</b>$100</li>
            <li><b>All Rooms include all the cruise has to offer (Some activities require an extra fee)</b>(Some activities require an extra fee)</li>
            <li><b>Complementary Breakfast, Lunch, and Dinner</b>$150</li>
            <li><b>Price (Per Trip)</b>$2,750</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Oceanview<span>$2,000</span></h3>	
        <ul>
		    <li><b>Basic Amenities</b>$100</li>
            <li><b>All Rooms include all the cruise has to offer (Some activities require an extra fee)</b></li>
            <li><b>Complementary Breakfast, Lunch, and Dinner</b>$150</li>
            <li><b>Price (Per Trip)</b>$2,250</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Inside<span>$1,500</span></h3>	
        <ul>
		    <li><b>Basic Amenities</b>$100</li>
            <li><b>All Rooms include all the cruise has to offer (Some activities require an extra fee)</b></li>
            <li><b>Complementary Breakfast, Lunch, and Dinner</b>$150</li>
            <li><b>Price (Per Trip)</b>$1,750</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Polynesian Village Resort (Magic Kingdom)<span>$430</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$530</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Grand Floridian Resort and Spa(Magic Kingdom)<span>$525</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$625</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Wilderness Lodge (Magic Kingdom)<span>$430</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$400</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Contemporary Resort (Magic Kingdom)<span>$350</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Caribbean Beach Resort (Epcot)<span>$170</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$270</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Beach Club Resort (Epcot)<span>$350</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney'sYacht Club Resort (Epcot)<span>$350</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Boardwalk Inn (Epcot)<span>$375</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$475</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Dolphin Hotel (Epcot)<span>$200</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$300</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Swan Hotel (Epcot)<span>$200</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$300</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Animal Kingdom Lodge (Animal Kingdom)<span>$300</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$400</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's All-Star Music Resort (Animal Kingdom)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$185</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's All-Star Movies Resort (Animal Kingdom)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$185</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's All-Star Sports Resort (Animal Kingdom)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$185</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Pop Century (Animal Kingdom)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$185</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Art of Animation Resort (Animal Kingdom)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$185</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Saratoga Springs Resort & Spa (Downtown Disney)<span>$85</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Old Key West Resort (Downtown Disney)<span>$450</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$450</li>			
        </ul>
    </div>
	<div class="plan">
        <h3>Disney's Port Orleans Resort - Riverside (Downtown Disney)<span>$170</span></h3>	
        <ul>
		    <li><b>All Rooms include Park Passes (Some activities require an extra fee).</b></li>
            <li><b>All Dining Included in Price</b>$100</li>
            <li><b>Price (Per Day)</b>$270</li>			
        </ul>
    </div>
</div>
</body>
</html>
