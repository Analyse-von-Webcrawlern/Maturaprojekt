<?php
	header("HTTP/1.1 200 OK");
	header("Status: 200 OK");
	header("Expires: ".gmdate("D, d M Y H:i:s")." GMT");
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Content-Encoding: iso-8859-1");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="mainStylesheet.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Maturaprojekt</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--Google Analytics-->
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-105169002-1', 'auto');
                 ga('send', 'pageview');

        </script>
	</head>
	<body>
		<?php
		//Stand 19.07.2017

			define('LINKSPERPAGE', 20);
			define('MINPARAGRAPHSPERCOLUMN', 3);
			define('MAXPARAGRAPHSPERCOLUMN', 6);
			define('MINCOLUMNLENGHT', 3000);
			define('MAXCOLUMNLENGHT', 4000);
			
			
			$buchstaben = array(
				"a","a","a","a","a","a","a","a","a","A","A","A","A","A","A","A","A","A",									//a --> 8.167% --> 9x
				"b","b","B","B",																							//b --> 1.492% --> 2x
				"c","c","c","C","C","C",																					//c	2.782%	
				"d","d","d","d","d","D","D","D","D","D",																	//d	4.253%
				"e","e","e","e","e","e","e","e","e","e","e","e","e","E","E","E","E","E","E","E","E","E","E","E","E","E",	//e	12.702%	
				"f","f","f","F","F","F",																					//f	2.228%	
				"g","g","g","G","G","G",																					//g	2.015%	
				"h","h","h","h","h","h","h","H","H","H","H","H","H","H",													//h	6.094%	
				"i","i","i","i","i","i","i","i","i","i","i","i","i","i",													//i	6.966%	
				"j","J",																									//j	0.153%	
				"k","K",																									//k	0.772%
				"l","l","l","l","l","L","L","L","L","L",																	//l	4.025%
				"m","m","m","M","M","M",																					//m	2.406%	
				"n","n","n","n","n","n","n","N","N","N","N","N","N","N",													//n	6.749%	
				"o","o","o","o","o","o","o","o","O","O","O","O","O","O","O","O",											//o	7.507%	
				"p","p","P","P",																							//p	1.929%	
				"q","Q",																									//q	0.095%
				"r","r","r","r","r","r","R","R","R","R","R","R",															//r	5.987%
				"s","s","s","s","s","s","s","S","S","S","S","S","S","S",													//s	6.327%
				"t","t","t","t","t","t","t","t","t","t","T","T","T","T","T","T","T","T","T","T",							//t	9.056%	
				"u","u","u","U","U","U",																					//u	2.758%	
				"v","V",																									//v	0.978%	
				"w","w","w","W","W","W",																					//w	2.360%	
				"x","X",																									//x	0.150%
				"y","y","Y","Y",																							//y	1.974%
				"z","Z"																										//z	0.074%
				);
			for ($i=0; $i < 5 ; $i++) { 
				$buchstaben[] = "the"; 
				$buchstaben[] = "be"; 
				$buchstaben[] = "and"; 
				$buchstaben[] = "or"; 
				$buchstaben[] = "of"; 
				$buchstaben[] = "to"; 
				$buchstaben[] = "into"; 
				$buchstaben[] = "at"; 
				$buchstaben[] = "I"; 
				$buchstaben[] = "you"; 
				$buchstaben[] = "he"; 
				$buchstaben[] = "she"; 
				$buchstaben[] = "it"; 
				$buchstaben[] = "we"; 
				$buchstaben[] = "you"; 
				$buchstaben[] = "they"; 
				$buchstaben[] = "do"; 
				$buchstaben[] = "say"; 
				$buchstaben[] = "think"; 
				$buchstaben[] = "what"; 
				$buchstaben[] = "."; 
				$buchstaben[] = ":"; 
				$buchstaben[] = "\""; 
				$buchstaben[] = "!"; 
				$buchstaben[] = "?"; 
				$buchstaben[] = "+"; 
				$buchstaben[] = "-"; 
				$buchstaben[] = "*"; 
				$buchstaben[] = ";"; 
				//$buchstaben[] = "<br>"; 
			}
			for ($i=0; $i < 50 ; $i++) { 
				$buchstaben[] = " "; 
				//$buchstaben[] = "<br>"; 
			}
			flush();
			echo '<h2 style="text-align: center">';
				for ($i=0; $i < 40; $i++) {
					echo $buchstaben[rand(0,count($buchstaben)-1)];
				}
			echo '</h2>';
			echo '<h3 style="text-align: center">';
				for ($i=0; $i < 20; $i++) {
					echo $buchstaben[rand(0,count($buchstaben)-1)];
				}
			echo '</h3>';

			echo '<div class="container-fluid">';
				echo '<div class="row">';

					for ($i=0; $i < 3; $i++) { 
						echo '<div class="col-sm-4">';
							echo '<h4 style="text-align: center">';
								for ($j=0; $j < 10; $j++) {
									echo $buchstaben[rand(0,count($buchstaben)-1)];
								}
							echo '</h4>';
							echo '<p style="text-align:justify">';
								$lenght = rand(MINCOLUMNLENGHT,MAXCOLUMNLENGHT);
								echo $lenght;
								for ($j=0; $j < $lenght; $j++) {
									if (rand(0,100)==0) {
						 				$link = rand(5,25);
						 				echo '<a href="';
						 				$target = "";
						 				for ($k=0; $k < $link; $k++) { 
						 					$target = $target . $buchstaben[rand(0,count($buchstaben)-1)];
						 				}
						 				$target = str_replace(" ", "-", $target);
						 				echo $target;
						 				$ending = rand(0,4);
						 				if ($ending == 0) {
						 					echo '.htm">';
						 				}elseif ($ending == 1) {
						 					echo '.php">';
						 				}else{
						 					echo '.html">';
						 				}
						 					for ($k=0; $k < $link; $k++) { 
						 						echo $buchstaben[rand(0,count($buchstaben)-1)];
						 					}
						 				echo '</a>';
						 			} 
									echo $buchstaben[rand(0,count($buchstaben)-1)];
								}
							echo '</p>';
						echo '</div>';
					}
				echo '</div>';
			echo '</div>';
		?>
		

		<!--Footer-->
		<footer style="bottom: 0px;" class="container-fluid background-black text-center">
			<br>
  			<br><br>
  			<p>Webpage for my Maturaprojekt 2017/18 - Thanks for your visit - <a href="mailto:reply@maturaprojekt.ddns.net">reply@maturaprojekt.ddns.net</a></p>
		</footer>
	</body>
</html>
