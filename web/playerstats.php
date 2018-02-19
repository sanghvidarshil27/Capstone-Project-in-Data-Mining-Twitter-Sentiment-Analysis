<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php 
					$player1 = $_POST['player'];
					$file = "playername.txt";
					$fh = fopen($file, 'w') or die("can't open file");
					fwrite($fh, $player1);
					fclose($fh);
					exec("java PlayerStats", $output); ?>
<html style="background: #282A2E;">
<head>
<style type="text/css">

th
{
	text-align: center;
	border-width: 5px;
	border-style: solid;
	border-color: white;
	color: #25BEA0;
	background:black;
	
}

tr
{
	text-align: center;
	box-shadow: 1px 2px 4px 1px white;
	border-width: 5px;
	border-style: solid;
	border-color: white;-
	
}

</style>
 <link rel="stylesheet" type="text/css" href="c3.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/magnific-popup1.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<!--  jquery plguin -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
	<!--end slider -->
	 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- Add fancyBox light-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
		</script>
		<!-- //End fancyBox light-box -->
</head>
<body style="background: #282A2E;"> 
  
  
 
  		<div id="cbp-so-scroller" class="cbp-so-scroller">
        <!--Portfolio-->
        <div id="portfolio" class="clearfix">
            <div class="portfolio-bg"> </div>
            <div class="typo1">
                <div class="wrapper clearfix">
                 <div class="h_right">
			<ul class="menu">		
				<li><a  href="index.html">Home</a></li>
				<li><a href="services.html" >Services</a></li>
				<li class="active"><a href="portfolio.html" >Portfolio</a></li>
				<li><a href="pricing.html" >Pricing</a></li>
				<li><a href="#about" class="scroll">Predictor</a></li>
				<li class="last"><a href="aboutUs.html"  class="scroll">About Us</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.html">Home</a></li>
	                <li class="nav-item"><a href="services.html" class="scroll">Services</a></li>
	                <li class="nav-item"><a href="portfolio.html" class="scroll">Portfolio</a></li>
	                <li class="nav-item"><a href="pricing.html" class="scroll">Pricing</a></li>
	                <li class="nav-item"><a href="#about" class="scroll">About</a></li>
	                <li class="nav-item"><a href="#contact"  class="scroll">Contact</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
                    <div class="section-title">
                       <h3 class="heading">Portfolio</h3>					  
					   <h6> </h6>
                    </div><!--end:section-title-->
					
					<?php 
					if($player1 == "Aditya Tare") { ?>
					<form><input type="hidden" value="1" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" name="1"> Aditya Tare </h2>
					<img src="images/1.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Ambati Rayudu") { ?>
					<form><input type="hidden" value="2" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="2"> Ambati Rayudu </h2>
					<img src="images/2.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Harbhajan Singh") { ?>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="3"> Harbhajan Singh </h2>
					<img src="images/3.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					
					<?php 
					if($player1 == "Pawan Suyal") { ?>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="4"> Pawan Suyal </h2>
					<img src="images/4.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Rohit Sharma") { ?>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="5"> Rohit Sharma </h2>
					<img src="images/5.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Marchant De Lange") { ?>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="6"> Marchant De Lange </h2>
					<img src="images/6.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
					<?php 
					if($player1 == "Keiron Pollard") { ?>
					<form><input type="hidden" value="7" id="pl"/><form>
					<h1 style="color:#25BEA0; padding:15px;" id="pl" name="7"> Keiron Pollard </h2>
					<img src="images/7.jpg" align="left" style="padding: 15px;"/>
					<?php }?>
					
                   
					<div>
					
					
		</br></br></br>
<table style="width: 70%; height: 20%; border: 1px solid white; float: centre; padding: 20px; box-shadow: 2px 2px 8px 2px gray;">
					<tr style="border: 1px solid white; color: white;">
					<th style="border: 1px solid white;"> Year </th>
					<th style="border: 1px solid white;"> Matches </th>
					<th style="border: 1px solid white;"> Runs </th>
					<th style="border: 1px solid white; "> Average </th>
					<th style="border: 1px solid white;"> SR </th>
					<th style="border: 1px solid white;"> BF </th>
					</tr>
					

		<?php for($i=0;$i<count($output);$i++)
					{
						$record = explode("	",$output[$i]);
					
					
					?>
					
					<tr style="border: 1px solid white; color: white;">
					<td style="border: 1px solid white; color:white;"><?= $record[0]?></td>
					<td style="border: 1px solid white; "><?= $record[1]?></td>
					<td style="border: 1px solid white; "><?= $record[2]?></td>
					<td style="border: 1px solid white; "><?= $record[3]?></td>
					<td style="border: 1px solid white; "><?= $record[4]?></td>
					<td style="border: 1px solid white;"><?= $record[5]?></td>
					</tr>
					
					</div>
					
					<?php
					} ?>
					</table>
					</br>
					</br></br></br></br></br></br></br>
					<fieldset style="border: 1px solid white; width:790px; height: 500px; float:center; padding: 20px; box-shadow: 1px 2px 7px 2px  gray;" ><legend style="color: white; text-align: center;">Graphical Representation of Statistics</legend>			
					 <div id="chart" style="width: 740px; height: 420px; float:center; padding: 20px;" ></div>

    <script src="d3.min.js" charset="utf-8"></script>
    <script src="c3.js"></script>
    <script>
    var imgid = document.getElementById("pl").value;
    
    if(imgid == "1")
    {
      var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993'],
            ['matches', 10, 2, 5],
			['average', 12, 20, 10],
			['balls_faced', 70, 66, 23],
			['runs', 87, 22, 40],
			['strike_rate', 111, 145, 100]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10],
	    ['average', 46, 66, 20]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33, 100, 10],
			['runs', 34, 11, 67],
			['strike_rate', 110, 34, 88]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2010'],
            ['matches', 15, 5, 7],
			['average', 15.75, 24.6, 12.5],
			['balls_faced', 98, 84, 36],
			['runs', 126, 123, 50],
			['strike_rate', 128.57, 146.42, 138.88]
          ]
        })
      }, 1000);
    }
    
    else if(imgid == "2")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993','1990','1998'],
            ['matches', 10, 2, 5,20,33],
			['average', 12, 20, 10,10,4],
			['balls_faced', 70, 66, 23,89,100],
			['runs', 87, 22, 40,45,88],
			['strike_rate', 111, 145, 100,122,45]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10,12,33],
	    ['average', 46, 66, 20,32,70]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33,45, 100, 10,23],
			['runs', 34, 11, 67,12,56],
			['strike_rate', 110, 34, 88,121,67]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2012','2011','2010'],
            ['matches', 15,19,17,16,14],
			['average', 25.78,18.92,37,28.21,27.38],
			['balls_faced',287,231,252,350,246],
			['runs', 361,265,333,395,356],
			['strike_rate', 125.78,114.71,132.14,112.85,144.71]
          ]
        })
      }, 1000);
    }      
    
    else if(imgid == "7")
    {
	 var chart = c3.generate({
	  bindto: '#chart',
        data: {
		x : 'x',
          columns: [
		  ['x', '2011', '2000', '1993','1990','1998'],
            ['matches', 10, 2, 5,20,33],
			['average', 12, 20, 10,10,4],
			['balls_faced', 70, 66, 23,89,100],
			['runs', 87, 22, 40,45,88],
			['strike_rate', 111, 145, 100,122,45]
          ],
	  selection: {
            enabled: true
          },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
          
        },
		 
      });
      setTimeout(function () {
        chart.load({
          columns: [
            ['matches', 15, 39, 10,12,33],
	    ['average', 46, 66, 20,32,70]
          ]
        });
      }, 500);
       setTimeout(function () {
        chart.x(['2015', '2003', '1999']);
      }, 600);

      setTimeout(function () {
        chart.load({
          columns: [
            
	    ['balls_faced', 33,45, 100, 10,23],
			['runs', 34, 11, 67,12,56],
			['strike_rate', 110, 34, 88,121,67]
          ]
        });
      }, 700);
       setTimeout(function () {
        chart.load({
          columns: [
            ['x', '2014', '2013', '2012','2011','2010'],
            ['matches', 15,18,14,16,14],
			['average', 34.12,42,24.44,14.6,22.75],
			['balls_faced',203,281,159,133,147],
			['runs', 273,420,220,146,273],
			['strike_rate', 134.48,149.46,138.36,109.77,185.71]
          ]
        })
      }, 1000);
    }      
    </script>
			</fieldset>		
					
				</body>
				</html>