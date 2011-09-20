<?
	$width = $_GET['width'];
	if(!$width){
		$width = 5;
	}
	$length = $_GET['length'];
	if(!$length){
		$length = 200;
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="vehicles.css" type="text/css" />
	</head>
	<body>
		<div class="webkitWarning">Webkit only<br/><span style="font-size:20px">Mouseover to begin</span></div>
		<style>
			/******************************************************/
			/******************************************************/
			/******************* World Styling*********************/
			/******************************************************/
			/******************************************************/
			body{
				background-color:#808080;
				color:white;
			}
			.webkitWarning{
				position:absolute;
				width:100%;
				left:0px;
				text-align: center;
				font-size: 65px;
				color:white;
				background-color:black;
				top:50px;
				opacity:.5;
				z-index:400;
			}
			body:hover .webkitWarning{
				-webkit-transition:top 1s linear;
				top:-300px;
			}

			.fullOfWin{
				position:absolute;
				height:100%;
				width:100%;
				text-align: center;
				background-color:green;
				color:black;
				z-index:3000;
				top:-150%;
				font-size:50px;
				-webkit-transition:top 0s 0s linear;
			}
			.gameBoard:hover .fullOfWin{
				/*top:0%;*/
				-webkit-transition:top 10s <? print $length*.7+8;?>s linear;
			}

			.gameBoard{
				min-height:500px;
				<? print "width:".(65+75*$width)."px;" ?>
				margin-left: auto;
				margin-right:auto;
				z-index:8;
				/*height:400px;*/
				overflow: hidden;
				position: relative;
				background-color:39393B;
				height:100%;
				cursor: url('images/car.png');
			}
			body #gameBoard .car:hover{
				height:300%;
				width:300%;
				right:0px;
				bottom:0px;
				margin-left:-100%;
				margin-top:-100%;
				z-index: 4000;
				background-color:black;
				overflow: visible;
				-webkit-animation: carLostAnimation 5s infinite alternate;
				cursor:not-allowed;
			}

			.flash{
				width:1px;
				height:2px;
				background-color: white;
				top:10px;
				position:absolute;
				-webkit-animation: tireAnimation .2s infinite;

			}
			@-webkit-keyframes carLostAnimation{
				from{
					top:0px;
					left:0px;
					background-color:red;
				}
				to{
					top:0px;
					left:0px;
					background-color:orange;
				}
			}
			@-webkit-keyframes tireAnimation {
				0% {
					background-color:white;
					top:8px;
				}
				49.9%{
					background-color:white;
				}
				50%{
					background-color:black;
				}
				100% {
					background-color:black;
					top:1px;
				}
			}

			.gameBoard:hover .road{
				position: absolute;
				left:30px;
				z-index: -10;
				background-image: -webkit-linear-gradient(#fff 100%, transparent 0%, transparent),
					<?
						for($i=0;$i<$width-1;$i++){
							print "-webkit-linear-gradient(#A1A1A1 20%, transparent 10%, transparent),
							";
						}
						print "-webkit-linear-gradient(#fff 100%, transparent 0%, transparent);";
					?>
				-webkit-background-size: 4px 200px;
				background-repeat: repeat-y;
				background-position: 0px 0px,
					<?
						for($i=1;$i<$width+1;$i++){
							print ($i*75)."px 0px,";
						}
						print (($i*75)+75)."px 0px;";
					?>
				height:100%;
				width:100%;
				 -webkit-animation-direction: normal ;
				/*background-position: 0px 0px,*/
									/*375px 0px;*/
				/*background-image: -webkit-linear-gradient(#fff 100%, transparent 0%, transparent),*/
									/*-webkit-linear-gradient(#fff 100%, transparent 0%, transparent);*/
				-webkit-animation: animateRoad .6s linear infinite;

			}
			@-webkit-keyframes animateRoad {
				from {
				background-position: 0px 0px,
									<?
										for($i=1;$i<$width+1;$i++){
											print ($i*75)."px 0px,";
										}
										print (($i*75)+75)."px 0px;";
									?>
				}
				to {
				background-position: 0px 0px,
									<?
										for($i=1;$i<$width+1;$i++){
											print ($i*75)."px 400px,";
										}
										print (($i*75)+75)."px 0px;";
									?>
				}
			}
		</style>
		<style>
			.car{
				width:92px;
				height:174px;
				position: absolute;
				top:-50%;
			}
			<?
				$game = new Game($length,$width);
				$cars = $game->getCars();
				for($i=1;$i<count($cars);$i++){

					print ".gameBoard:hover #car".$cars[$i]->getID()."{
						-webkit-animation: animation".$cars[$i]->getID()." ".$cars[$i]->maxLength."s ".($cars[$i]->activateTime*.7)."s linear;
					}
					@-webkit-keyframes animation".$cars[$i]->getID()." {
						";

					for($x = 1;$x<=$cars[$i]->maxLength;$x++){
						print (round((100/$cars[$i]->maxLength)*$x))."%{
							left: ".($cars[$i]->positionTracker[$x]*75)."px;";
							if($x == 1){
								print "
							top: -50%;";
							}
							if($x == $cars[$i]->maxLength){
								print "
							top: 120%;";
							}
						print "
						}
						";
					}
					print "
					}
					";
				}
			?>
		</style>
		<div class="gameBoard" id="gameBoard">
			<div class="road"></div>

			<?
				$loseText = "";
//				for($i = 0;$i<2000;$i++){
//					$loseText.=" You Lose!";
//				}
				$taxi = '<div class="taxi">
							<div class="lost">'.$loseText.'</div>
							<div class="leftMirror"></div>
							<div class="rightMirror"></div>
							<div class="hoodBumpRight"><div class="hoodCover"></div></div>
							<div class="hoodBumpLeft"><div class="hoodCover"></div></div>
							<div class="frontWindshield">
								<div class="frontWindshieldMain"></div>
								<div class="leftBlocking"></div>
								<div class="rightBlocking"></div>
							</div>
							<div class="leftWindow">
								<div class="topBlocking"></div>
								<div class="bottomBlocking"></div>
							</div>
							<div class="rightWindow">
								<div class="topBlocking"></div>
								<div class="bottomBlocking"></div></div>
							<div class="roof">
								<div class="taxiLightContainer">
									<div class="taxiLight">
										<div class="taxiLightInner"></div>
									</div>
									<div class="taxiSign"></div>
									<div class="taxiSignBack"></div>
								</div>
							</div>
							<div class="rearWindshield">
								<div class="rearWindshieldMain"></div>
								<div class="leftBlocking"></div>
								<div class="rightBlocking"></div>
							</div>
							<div class="trunkLeft"></div>
							<div class="trunkRight"></div>
							<div class="tire1"><div class="flash"></div></div>
							<div class="tire2"><div class="flash"></div></div>
							<div class="tire3"><div class="flash"></div></div>
							<div class="tire4"><div class="flash"></div></div>
						</div>';
				$police = '<div class="police">
								<div class="lost">'.$loseText.'</div>
								<div class="tire1"><div class="flash"></div></div>
								<div class="tire2"><div class="flash"></div></div>
								<div class="body">
									<div class="leftBlack"></div>
									<div class="rightBlack"></div>
									<div class="hood">
										Police
									</div>
									<div class="roof">
										<div class="roofInner"></div>
									</div>
									<div class="lights">
										<div class="red first"></div>
										<div class="blue"></div>
										<div class="red"></div>
										<div class="blue last"></div>
									</div>
									<div class="trunk">
									</div>
								</div>
								<div class="tire3"><div class="flash"></div></div>
								<div class="tire4"><div class="flash"></div></div>
							</div>';
				$minivan = '<div class="minivan">
								<div class="lost">'.$loseText.'</div>
								<div class="hoodBumpLeft"><div class="cover"></div></div>
								<div class="hoodBumpRight"><div class="cover"></div></div>
								<div class="frontWindshield">
									<div class="leftCover"></div>
									<div class="rightCover"></div>
								</div>
								<div class="leftWindow">
									<div class="topBlack"></div>
									<div class="middleBlack"></div>
									<div class="bottomBlack"></div>
									<div class="windowSpacerTop"></div>
									<div class="windowSpacerMiddle"></div>
									<div class="windowSpacerBottom"></div>
								</div>
								<div class="rightWindow">
									<div class="topBlack"></div>
									<div class="middleBlack"></div>
									<div class="bottomBlack"></div>
									<div class="windowSpacerTop"></div>
									<div class="windowSpacerMiddle"></div>
									<div class="windowSpacerBottom"></div>
								</div>
								<div class="roof">
									<div class="rack"></div>
									<div class="rack1"></div>
									<div class="rack2"></div>
								</div>
								<div class="backWindshield">
									<div class="leftCover"></div>
									<div class="rightCover"></div>
								</div>
								<div class="tire1"><div class="flash"></div></div>
								<div class="tire2"><div class="flash"></div></div>
								<div class="tire3"><div class="flash"></div></div>
								<div class="tire4"><div class="flash"></div></div>
							</div>';

				for($i=1;$i<count($cars);$i++){
					print "<div class='car' id='car".$cars[$i]->getID()."'>";
					$carType = round(rand(1,3));
					if($carType == 1){
						print $police;
					}
					if($carType == 2){
						print $taxi;
					}
					if($carType == 3){
						print $minivan;
					}

					print "</div>";
				}
			print "<div class='car' id='car'>".$taxi."</div>";
			?>
			<div class="fullOfWin"><br/><br/><br/>You Just Won! Gratz. Do some stuff with CSS.</div>
		</div>
		<div class="about">
			About
			<div class="aboutDetails">
				<a href="http://ryan-kahn.com" class="title">Ryan Kahn</a>
				<br/>
				I created this demo because of a challenge that was presented to me, enter into a CSS3 animation competition. I am a game developer, I dont make animations, I make games. So I made this.
				<br/><br/>
				This entire game is rendered using only CSS. There is a single image in the game for the mouse pointer, since chrome is not nice enough to let me change the mouse to a div...
				<br/>
				The cars themselves are a series of divs and CSS to get the lines and rounded corners to represent a car. <a href="/onlyCSS/testRoad.html">View</a> the example where there are only 3 cars being animated;
				zoom in your browser to see them in all their glory.
				<br/><br/>
				Thanks to <a href="http://www.kadamwhite.com/">@kadamwhite</a> for making me some sprites to work off of.
			</div>
		</div>
		<script type="text/javascript"> 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21079517-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script> 

	</body>
</html>
<?PHP

	class car{

		function __construct($activateTime,$isWinningCar=false) {
			$this->maxLength = rand(3,7);
			$this->isActive = true;
			$this->isWinningCar = $isWinningCar;
			$this->id = uniqid();
			$this->activateTime = $activateTime;
			$this->currentLength = 0;
			$this->laneChange = false;
			$this->positionTracker = Array();
			$this->position = -1;
		}

		function setPosition($position){
			if($this->positionTracker[$this->currentLength] != null){
				$this->positionTracker[$this->currentLength] = $position;
			}
			$this->position = $position;
		}
		function getPosition(){
			return $this->position;
		}
		function isActive(){
			return $this->isActive;
		}
		function goOneMore(){
			if($this->isWinningCar){
				return true;
			}
			if($this->maxLength > $this->currentLength){
				$this->currentLength++;
				$this->isActive = true;
				$this->positionTracker[$this->currentLength]=$this->position;
			}else{
				$this->isActive = false;
			}
			return $this->isActive();
		}
		function getID(){
			return $this->id;
		}
		function hasLaneChanged($set = false){
			if($set && !$this->isWinningCar){
				$this->laneChange = $set;
			}
			return $this->laneChange;
		}

	}
	class game{

		function __construct($length=800,$width=5) {
			//200 indexes with arrays of 8 inside them
			$this->timingArray = Array();
			$this->time = 0;
//			$this->maxCars = 5;
			$this->width = $width;
			$this->cars = Array();
			$this->length = $length;

			//Add the winning car
			$this->cars[0] = new car(1,true);
			$this->cars[0]->setPosition(round(rand(0,$this->width-1)));


			//Build Game
			for($this->time=1;$this->time<$this->length;$this->time++){
				$this->fillCars();
				$this->processLaneChanges();
				$this->addCars();
			}
			while(count($this->getActiveCars()) > 1){
				$this->fillCars();
				$this->processLaneChanges();
			}
			
		}


		function fillCars(){
			$activeCars = $this->getActiveCars(true);
			for($i=0;$i<count($activeCars);$i++){
				$this->timingArray[$this->time][$activeCars[$i]->getPosition()] = $activeCars[$i]->getID();
			}
		}
		function processLaneChanges(){
			$activeCars = $this->getActiveCars();
			for($i=0;$i<count($activeCars);$i++){
				$laneChangeDirection = round(rand(-1,1));
				if(!$activeCars[$i]->hasLaneChanged() && rand(0,1) < .2){
					//Try to lane change n% of the time until a lane change happens.
					$newPosition = $activeCars[$i]->getPosition()+$laneChangeDirection;

					if($newPosition>=0 && $newPosition<$this->width && $this->timingArray[$this->time][$newPosition] == null){
						$this->timingArray[$this->time][$newPosition] = $activeCars[$i]->getID();
						$activeCars[$i]->setPosition($newPosition);
						$activeCars[$i]->hasLaneChanged(true);
					}
				}

				if($activeCars[$i]->isWinningCar){ //make several lane changes at once to make the game harder
					$newPosition = $activeCars[$i]->getPosition()+$laneChangeDirection;
					if($newPosition>=0 && $newPosition<$this->width && $this->timingArray[$this->time][$newPosition] == null){
						$this->timingArray[$this->time][$newPosition] = $activeCars[$i]->getID();
						$activeCars[$i]->setPosition($newPosition);
						$activeCars[$i]->hasLaneChanged(true);
					}
					$newPosition = $activeCars[$i]->getPosition()+$laneChangeDirection;
					if($newPosition>=0 && $newPosition<$this->width && $this->timingArray[$this->time][$newPosition] == null){
						$this->timingArray[$this->time][$newPosition] = $activeCars[$i]->getID();
						$activeCars[$i]->setPosition($newPosition);
						$activeCars[$i]->hasLaneChanged(true);
					}
				}
			}

		}

		function addCars(){
			$freeSpots = Array();
			for($i=0;$i<$this->width;$i++){
				if($this->timingArray[$this->time][$i] == null){
					$freeSpots[] = $i;
				}
			}
			$addedCars = false;
			while(count($freeSpots) > $this->width-$this->getMaxCars()){
				if($addedCars && rand(0,1) < .2){
					return;
				}
				$addedCars = true;

				$car = new car($this->time);
				$fillSpot = $freeSpots[round(rand(0,count($freeSpots)-1))];
				$car->setPosition($fillSpot);

				if($this->timingArray[$this->time][$fillSpot] == null){
					$this->timingArray[$this->time][$fillSpot] = $car->getID();
					$this->cars[] = $car;
				}

				$freeSpots = Array();
				for($i=0;$i<$this->width;$i++){
					if($this->timingArray[$this->time][$i] == null){
						$freeSpots[] = $i;
					}
				}
			}
		}

		function getCars(){
			return $this->cars;
		}
		
		function getMaxCars(){
			$completion = $this->time/$this->length;
			$rtnVar = round($completion*$this->width)+4;
			if($rtnVar > $this->width){//We cant go over max difficulty...
				$rtnVar = $this->width;
			}
			return $rtnVar;
		}
		
		function getActiveCars($moveCars = false){
			$activeCars = Array();
			for($i=0;$i<count($this->cars);$i++){
				if($this->cars[$i]->isActive()){
					if($moveCars){
						$this->cars[$i]->goOneMore();
					}
					$activeCars[] = $this->cars[$i];
				}
			}
			return $activeCars;
		}

	}
?>