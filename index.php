<?php
	include('inc/header.php');
	$fiveStar = '<div class="float-right">
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<i class="fa fa-star-o" aria-hidden="true"></i>
					</div>';
					 
		 
					 
?>

<main>

	<div class="container-fluid">
	
		<article id="about" class="newPageSection">
			<h2>About</h2>

<?php 
include('welcome.php');

if (!empty($_POST)){
	
	$wMessage = "I have been writing websites since 2012 and have developed a range of different styles. ";
	
	$hello = new welcome();
	
	$user = htmlspecialchars($_POST["name"]);
	
	$hello->setNewUser($user);
	
	$hello->setWelcomeMessage($wMessage);	
	
	echo "<div class=\"pMessage\">". $hello->getWelcomeMessage() ."</div>";
	
} 
else{ 
	echo '
			<div id="wBox" class="col-sm-6">
			<form name="welcome" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'"  method="post" >
				<div class="form-group">
					<label for="name" >Hello, what\'s your name?</label>
					<input type="text" id="name" class="form-control" name="name" />
				</div>
				<div class="form-group">
					<input type="submit" class="form-control" name="submitName" value="Submit" />
				</div>			
			</form>
			</div>';
} ?>			
			
			<button id="viewCode" data-toggle="collapse" data-target="#classWelcome" class="btn btn-primary mt-5 mb-5">View Source</button>
			
			<div class="CodeBox collapse" id="classWelcome">
			<pre class="LineNumbers">1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51</pre>
			<pre class="Source"><span class="cl">class</span> <span class="clnm">welcome {</span> 

	<span class="cl">private</span> <span class="var">$newUser</span> ;
	<span class="cl">private</span> <span class="var">$welcomeMessage</span> ;

	<span class="cl">public function</span> <span class="fun">__construct</span>(
	 
		<span class="var">$newUser </span>       = <span class="str">"You"</span> ,
	 	
		<span class="var">$welcomeMessage</span> = <span class="str">"&lsaquo;p&rsaquo;Hello, I welcome you &lsaquo;big&rsaquo;"</span> 
	 	
		){
	 	
			<span class="var">$this</span> -> <span class="clnm">newUser</span>        = <span class="var">$newUser</span> ;
	 	
			<span class="var">$this</span> -> <span class="clnm">welcomeMessage</span> = <span class="var">$welcomeMessage</span> ;
	 	
	}
	
	
	<span class="cl"> public function</span> <span class="fun">setNewUser</span>(<span class="var">$aNewUser</span>) {
		
		<span class="var">$this</span> -> <span class="clnm">newUser</span> = <span class="var">$aNewUser</span> ;			
	}
	
	
	<span class="cl">public function</span> <span class="fun">getNewUser</span>() {
		
		<span class="cl">return</span> <span class="var">$this</span> -> <span class="clnm">newUser</span> ;
    
	}
	
	
	<span class="cl">public function</span> <span class="fun">setWelcomeMessage</span>(<span class="var">$aWelcomeMessage</span>){
		
		<span class="var">$this</span> -> <span class="clnm">welcomeMessage</span> = <span class="var">$aWelcomeMessage</span> ;	
	
	}
	
	
	<span class="cl">public function</span> <span class="fun">getWelcomeMessage</span>(){
		
		<span class="var">$this</span> -> <span class="clnm">welcomeMessage</span> .= <span class="var">$this</span> -> <span class="clnm">newUser</span> ;

		<span class="var">$this</span> -> <span class="clnm">welcomeMessage</span> .= <span class="str">"&lsaquo;/big&rsaquo;. Feel free to have a look around.&lsaquo;/p&rsaquo;"</span> ;		
				
		<span class="cl">return</span> <span class="var">$this</span> -> <span class="clnm">welcomeMessage</span> ;	
    
	}	
	
}</pre>
	</div>  <!-- END div.codebox -->

		</article>

		<?php 
			
			include('portfolio.php');			
					
		?>
		
		<article id="skills" class="newPageSection">
			<h2>Skills</h2>
			<div class="row">
				<ul class="list-group col-xs-12 col-sm-6 col-md-4 clear-fix">
					<h3 class="list-group-item darkBk" >Languages</h3>
					<li class="list-group-item darkBk" id="html5">HTML5 <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="css">CSS <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="javascript">javaScript <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="cms">CMS <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="bootstrap">Bootstrap <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk"id="php">PHP <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="mysql">MySQL<?php echo $fiveStar; ?></li>	
				</ul>
				
				<ul class="list-group col-xs-12 col-sm-6 col-md-4 clear-fix darkBacking">
					<h3 class="list-group-item darkBk">Software</h3>
					<li class="list-group-item darkBk" id="gimp">GIMP <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="inkscape">Inkscape <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="mypait">MyPaint <?php echo $fiveStar; ?></li>	
					<li class="list-group-item darkBk" id="photoshop">Adobe Photoshop <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="dreamweaver">Adobe Dreamweaver <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="illustator">Adobe Illustrator <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="autocad">Autodesk AutoCAD <?php echo $fiveStar; ?></li>
				</ul>
				
				<ul class="list-group col-xs-12 col-sm-6 col-md-4 clear-fix darkBacking">
					<h3 class="list-group-item darkBk">Systems</h3>
					<li class="list-group-item darkBk" id="linux">Linux <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="windows">MS Windows <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="android">Android<?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="macos">macOS <?php echo $fiveStar; ?></li>	
					<li class="list-group-item darkBk" id="ios">IOs <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="wiserver">MS Windows Server <?php echo $fiveStar; ?></li>
					<li class="list-group-item darkBk" id="winmob">MS Windows Mobile <?php echo $fiveStar; ?></li>
				</ul>
			</div> <!-- END div.row -->
			<?php 
	if (!empty($_POST)){ 
	
		echo "<div class=\"pMessage\" style=\"margin-top:50px;\">
					<p>". $hello -> getNewUser() .", do you like what you see?</p>
					
		</div>";			
	
	}		
			?>
			
		</article>
		
		<article id="apps" >
		
			<h2>Applications</h2>
			
			<h3>STB Type</h3>
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-lg-3">
					<img class="img-fluid" src="img/apps/STBType.png" alt="STB Type image of main screen" />				
				</div>
				
				<div class="col-xs-12 col-sm-6 col-lg-6">
					<p>
						I created this application whilst working for QubeGB. I found it time consuming to continue looking through 
						the vast table on paper to find the specific type of equipment by looking for a bar-code pattern.
					</p>
					
					<p>
						What you do is to simply scan the bar-code and it will search it's database, returning the type of STB for my 
						paperwork. This has vastly improved my productivity.
					</p>
									
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-3">
				
					<ul class="list-group">
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> MIT App Inventor</li>
						<li class="list-group-item"><i class="fa fa-check-square-o" aria-hidden="true"></i> Java</li>
					</ul>

				</div>
				
			</div> <!-- END div.row -->
			
		</article>
		
		<article id="artwork" >
			<h2>Artwork</h2>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-offset-sm-0 offset-md-2">
				
					<div id="art-carousel" class="carousel slide" data-ride="carousel">
					
						<div class="carousel-inner" role="listbox">
						
							<div class="carousel-item active">
								<!--<a href="http://img05.deviantart.net/5289/i/2015/115/f/b/natural_healing_logo_by_abateman1982-d4m6nhj.jpg" 
									title="Natural Healing Logo" 
									target="_blank">-->
									<img src="http://img05.deviantart.net/5289/i/2015/115/f/b/natural_healing_logo_by_abateman1982-d4m6nhj.jpg" 
											alt="Natural Healing Logo"
											class="img-fluid animated bounceInRight" 
											style="max-height:450px;"
											>
								<!--</a>-->
							</div>
				    		
							<div class="carousel-item">			
								<!--<a href="http://img05.deviantart.net/09da/i/2015/115/c/e/corvette_z06_line_art_by_abateman1982-d4mospm.png" 
									title="Corvette Z06"
									target="_blank">-->
									<img src="http://img05.deviantart.net/09da/i/2015/115/c/e/corvette_z06_line_art_by_abateman1982-d4mospm.png" 
										alt="Corvette Z06"
										class="img-fluid animated bounceInRight"
										style="max-height:450px;"
										>
								<!--</a>-->			
							</div>
							
							<div class="carousel-item">			
								<!--<a href="http://img05.deviantart.net/9c0c/i/2015/115/a/e/houses_come_in_two_by_abateman1982-d4m6okl.jpg" 
									title="Houses come in two"
									target="_blank">-->
									<img src="http://img05.deviantart.net/9c0c/i/2015/115/a/e/houses_come_in_two_by_abateman1982-d4m6okl.jpg" 
										alt="Houses come in two"
										class="img-fluid animated bounceInRight" 
										style="max-height:450px;"
										>
								<!--</a>-->
							</div>
							
							<div class="carousel-item">			
								<!--<a href="http://img03.deviantart.net/3d59/i/2015/115/0/8/mugen_civic_typer_by_abateman1982-d4mos95.png" 
									title="Mugen Civic TypeR" 
									target="_blank">-->
									<img src="http://img03.deviantart.net/3d59/i/2015/115/0/8/mugen_civic_typer_by_abateman1982-d4mos95.png" 
										alt="Mugen Civic TypeR"
										class="img-fluid animated bounceInRight"
										style="max-height:450px;"
										>
							<!--	</a>	-->
						
							</div>
							
							<div class="carousel-item">
								<img src="img/art/AlphaCleanLogo.svg" 
								
									alt="Mugen Civic TypeR"
										class="img-fluid animated bounceInRight"
										style="max-height:450px;"
										/>
							</div>
							
						</div>  <!--  END carousel-inner-->	
						
						<a class="carousel-control-prev" href="#art-carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
		  				
						<a class="carousel-control-next" href="#art-carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
		  				
					</div>  <!-- END carousel slide -->
					
				</div> <!-- END col-sm-12 col-md-8 col-offset-sm-0 offset-md-2 -->
				
			</div> <!--END row -->
			
		</article>
		
		<article id="contactMe">
			<h2>Contact Me</h2>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				
					<form method="post" action="mail.php" id="contact-form">
					
						<div class="form-group">
							<label for="formName">Name</label>
							<input class="form-control" 
									 type="text"
									 name="formName" 
									 id="formName" 
									 <?php 
										if (!empty($_POST)){ 
											echo 'value="'.$hello->getNewUser().'"';
										}		
									?> required />
						</div>	

						<div class="form-group">
							<label for="formEmail">E-Mail</label>
							<input class="form-control" type="email" name="formEmail" id="formEmail" required />
						</div>
						
						<div class="form-group" style="display:none;">
							<label for="formEmail2">E-Mail 2</label>
							<input class="form-control" type="text" name="formEmail2" id="formEmail2" />
						</div>
						
						<div class="form-group">
							<label for="formMessage">Message</label>
							<textarea class="form-control" name="formMessage" id="formMessage" required ></textarea>
						</div>	
						
						<div class="form-group">
								<button
									class="g-recaptcha form-control"
									data-sitekey="6LfHLT8UAAAAACEEKxUdPsTqD--gyR6UuhwY1oJj"
									data-badge="inline"
									data-callback="onSubmit">
									Submit
								</button>				
						</div>
					</form>
				</div>
				
				<div class="col-xs-12 col-sm-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d319383.03778349806!2d-1.0313606168764633!3d51.289411838292565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48742b3c16b6efd9%3A0xe5e0c8482549d0ba!2sKeith+Lucas+Rd%2C+Farnborough+GU14+0DL!5e0!3m2!1sen!2suk!4v1514992846557" 
								
								frameborder="0" 
								style="border:0;width:100%;height:450px;" allowfullscreen></iframe>
				</div>			
			</div>		
		</article>
	</div> <!-- END div.container -->

</main>

<?php
	include('inc/footer.php');
?>


