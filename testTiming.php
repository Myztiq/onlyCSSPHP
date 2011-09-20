<thml>
	<body>
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
			.gameBoard{
				width:440px;
				margin: 35px;
				z-index:8;
				height:400px;
				overflow: hidden;
				position: relative;
				background-color:39393B;
			}
			.flash{
				width:1px;
				height:2px;
				background-color: white;
				top:10px;
				position:absolute;
				-webkit-animation: tireAnimation .2s infinite;

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

			.road{
				position: absolute;
				left:30px;
				z-index: -10;
				background-image: -webkit-linear-gradient(#fff 100%, transparent 0%, transparent),
									-webkit-linear-gradient(#A1A1A1 5%, transparent 40%, transparent),
									-webkit-linear-gradient(#A1A1A1 5%, transparent 40%, transparent),
									-webkit-linear-gradient(#A1A1A1 5%, transparent 40%, transparent),
									-webkit-linear-gradient(#A1A1A1 5%, transparent 40%, transparent),
									-webkit-linear-gradient(#fff 100%, transparent 0%, transparent);
				-webkit-background-size: 4px 100px;
				background-repeat: repeat-y;
				background-position: 0px 0px,
									75px 0px,
									150px 0px,
									225px 0px,
									300px 0px,
									375px 0px,
									450px 0px,
									525px 0px,
									600px 0px;
				height:100%;
				width:100%;
				 -webkit-animation-direction: normal ;
				background-position: 0px 0px,
									375px 0px;
				background-image: -webkit-linear-gradient(#fff 100%, transparent 0%, transparent),
									-webkit-linear-gradient(#fff 100%, transparent 0%, transparent);
				/*-webkit-animation: animateRoad .5s linear infinite;*/

			}
			@-webkit-keyframes animateRoad {
				from {
				background-position: 0px 50px,
									75px 0px,
									150px 50px,
									225px 0px,
									300px 50px,
									375px 0px;
				}
				to {
				background-position: 0px 250px,
									75px 200px,
									150px 250px,
									225px 200px,
									300px 250px,
									375px 200px;
				}
			}

			/******************************************************/
			/******************************************************/
			/******************* Taxi Styling**********************/
			/******************************************************/
			/******************************************************/
			.taxi{
				width:46px;
				height:87px;
				left:45px;
				position:absolute;
				top:0px;
				background-color:#fec844;
				-webkit-border-radius: 5px;
				-webkit-border-bottom-left-radius: 7px;
				-webkit-border-bottom-right-radius: 7px;
			}
			.taxi .frontWindshield{
				position:absolute;
				height:12px;
				width:38px;
				left:4px;
				top:23px;
				overflow: hidden;
			}
			.taxi .frontWindshieldMain{
				position:absolute;
				background-color:black;
				width: 38px;
				left: 0px;
				top: 0px;
				height:50px;
				background-color:black;
				-webkit-border-top-left-radius: 14px 3px;
				-webkit-border-top-right-radius: 14px 3px;

			}
			.taxi .rearWindshield{
				position:absolute;
				height:12px;
				width:38px;
				left:4px;
				top:56px;
				overflow: hidden;
			}
			.taxi .roof{
				position:absolute;
				z-index: 2;
				top:33px;
				left:6px;
				width:34px;
				height:24px;
				-webkit-border-radius: 5px;
				background-color:#fec844;

			}
			.taxi .leftWindow{
				z-index:1;
				position:absolute;
				overflow:hidden;
				left:2px;
				width:6px;
				height:35px;
				top:28px;
			}
			.taxi .rightWindow{
				z-index:1;
				position:absolute;
				overflow:hidden;
				left:38px;
				width:6px;
				height:35px;
				top:28px;
				/*background-color:black;*/
			}
			.taxi .frontWindshield .leftBlocking{
				position:absolute;
				background-color:#fec844;
				height:50px;
				width:50px;
				-webkit-transform: rotate(-24deg);
				left:-43px;
			}
			.taxi .frontWindshield .rightBlocking{
				position:absolute;
				background-color:#fec844;
				height:50px;
				width:50px;
				-webkit-transform: rotate(24deg);
				left:31px;

			}
			.taxi .rearWindshieldMain{
				background-color:black;
				position:absolute;
				background-color:black;
				width: 38px;
				left: 0px;
				top: -38px;
				height:50px;
				background-color:black;
				-webkit-border-bottom-left-radius: 14px 3px;
				-webkit-border-bottom-right-radius: 14px 3px;
			}
			.taxi .rearWindshield .leftBlocking{
				position:absolute;
				background-color:#fec844;
				height:50px;
				width:50px;
				-webkit-transform: rotate(24deg);
				left:-51px;
				top:-20px;
			}
			.taxi .rearWindshield .rightBlocking{
				position:absolute;
				background-color:#fec844;
				height:50px;
				-webkit-transform: rotate(-24deg);
				width:50px;
				left:39px;
				top:-20px;
			}
			.taxi .leftWindow .topBlocking{
				position:absolute;
				background-color:black;
				height:50px;
				-webkit-transform: rotate(-24deg);
				width:50px;
				left:-49px;
				top:-18px;
			}
			.taxi .leftWindow .bottomBlocking{
				position: absolute;
				background-color: black;
				height: 50px;
				-webkit-transform: rotate(24deg);
				width: 50px;
				left: -49px;
				top: 3px;
			}
			.taxi .rightWindow .topBlocking{
				position: absolute;
				background-color: black;
				height: 50px;
				-webkit-transform: rotate(24deg);
				width: 50px;
				left: 5px;
				top: -18px;
			}
			.taxi .rightWindow .bottomBlocking{
				position: absolute;
				background-color: black;
				height: 50px;
				width: 50px;
				-webkit-transform: rotate(-24deg);
				left: 5px;
				top: 3px;
			}
			.taxi .trunkLeft{
				position: absolute;
				width: 1px;
				background-color: #B3B3A6;
				height: 18px;
				-webkit-transform: rotate(-16deg);
				top: 67px;
				left: 6px;
				opacity:.5;
			}
			.taxi .trunkRight{
				position: absolute;
				width: 1px;
				background-color: #B3B3A6;
				height: 18px;
				-webkit-transform: rotate(16deg);
				top: 67px;
				left: 39px;
				opacity:.5;
			}
			.taxi .hoodBumpRight{
				position: absolute;
				width: 4px;
				background-color: white;
				height: 18px;
				top: 3px;
				left: 33px;
				overflow: hidden;
				opacity:.3;
				-webkit-transform: rotate(-3deg);
			}
			.taxi .hoodBumpRight .hoodCover{
				position: absolute;
				-webkit-transform: rotate(-8deg);
				height: 30px;
				width: 30px;
				background-color: #FEC844;
				left: 1px;
				top: -10px;
			}
			.taxi .hoodBumpLeft{
				position: absolute;
				width: 4px;
				background-color: white;
				height: 18px;
				top: 3px;
				left: 11px;
				overflow: hidden;
				opacity:.3;
				-webkit-transform: rotate(3deg);
			}
			.taxi .hoodBumpLeft .hoodCover{
				position: absolute;
				-webkit-transform: rotate(8deg);
				height: 30px;
				width: 30px;
				background-color: #FEC844;
				left: -27px;
				top: -10px;
			}
			.taxi .taxiLightContainer{
				position: absolute;
				top: 7px;
				left: 10px;
				height: 10px;
				width: 15px;
			}
			.taxi .taxiLight{
				position: absolute;
				top:3px;
				width:13px;
				left:0px;
				height:3px;
				background-color: white;
				-webkit-border-radius: 2px;
			}
			.taxi .taxiLightInner{
				position: absolute;
				width:11px;
				left:1px;
				height:1px;
				top:1px;
				background-color: #FEC844;
				-webkit-border-radius: 1px;
			}
			.taxi .taxiSign{
				position: absolute;
				top:1px;
				width:5px;
				left:4px;
				height:6px;
				background-color: white;
				z-index:-1;
			}
			.taxi .taxiSignBack{
				position: absolute;
				width: 5px;
				height: 1px;
				top: 5px;
				background-color: #828282;
				z-index: 1;
				left: 4px;
				opacity:.7;
			}
			.taxi .leftMirror{
				position: absolute;
				left: -2px;
				top: 30px;
				height: 2px;
				width: 3px;
				background-color: black;
				-webkit-border-top-left-radius: 4px 1px;
				-webkit-border-bottom-left-radius: 1px 1px;
				-webkit-border-bottom-right-radius: 3px 1px;
			}
			.taxi .rightMirror{
				position: absolute;
				left: 45px;
				top: 30px;
				height: 2px;
				width: 3px;
				background-color: black;
				-webkit-border-top-right-radius: 4px 1px;
				-webkit-border-bottom-left-radius: 1px 1px;
				-webkit-border-bottom-right-radius: 3px 1px;
			}
			.taxi .tire1{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				background-color:black;
				position:absolute;
				left:-2px;
			}
			.taxi .tire2{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
				left:-2px;
			}
			.taxi .tire3{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				left:46px;
				background-color:black;
				position:absolute;
			}
			.taxi .tire4{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				left:46px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
			}

			/******************************************************/
			/******************************************************/
			/***************** Police Styling**********************/
			/******************************************************/
			/******************************************************/
			.police{
				width:46px;
				height:87px;
				left:45px;
				position:absolute;

			}
			.police .body{
				background-color:transparent;
				margin-left:2px;
				margin-right:2px;
				border: 2px solid black;
				-webkit-border-radius:10px;
				width:42px;
				height:87px;
				position:absolute;
			}
			.police .roof{
				position: absolute;
				height: 36px;
				width: 38px;
				background-color: black;
				top: 32px;
				left: 2px;
			}
			.police .roofInner{
				position: absolute;
				height: 36px;
				width: 38px;
				-webkit-border-radius: 5px;
				-webkit-border-top-left-radius: 8px;
				-webkit-border-top-right-radius: 8px;
				background-color: white;
				/*top: 32px;*/
				/*left: 2px;*/
			}
			.police .tire1{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				background-color:black;
				position:absolute;
			}
			.police .tire2{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
			}
			.police .tire3{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				left:48px;
				background-color:black;
				position:absolute;
			}
			.police .tire4{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				left:48px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
			}
			.police .lights{
				/*background-color:red;*/
				width:32px;
				height:5px;
				margin-top:44px;
				margin-left:5px;
				z-index: 50;
				position:absolute;
			}
			.police .lights .red{
				width:8px;
				height:5px;
				background-color:red;
				float:left;
				z-index: 50;
				-webkit-animation: policeLightsRed .5s infinite;

			}
			.police .lights .blue{
				float:left;
				width:8px;
				height:5px;
				background-color:blue;
				z-index: 50;
				-webkit-animation: policeLightsBlue .25s infinite;
			}
			.police .lights .last{
				-webkit-border-bottom-right-radius:5px;
				-webkit-border-top-right-radius: 5px;
			}
			.police .lights .first{
				-webkit-border-bottom-left-radius:5px;
				-webkit-border-top-left-radius: 5px;
			}
			.hood{
				position: absolute;
				background-color:black;
				color:white;
				width:42px;
				height:33px;
				top:-1px;
				font-size:12px;
				text-align: center;
				-webkit-border-bottom-left-radius: 8px;
				-webkit-border-bottom-right-radius: 8px;
				-webkit-transform: rotate(-180deg);
				line-height:42px;

			}
			.trunk{
				position: absolute;
				background-color: black;
				width:42px;
				height:20px;
				top:68px;
				-webkit-border-bottom-left-radius: 8px;
				-webkit-border-bottom-right-radius: 8px;
			}
			@-webkit-keyframes policeLightsRed {
				0% {
					background-color:blue;
				}
				49.9%{
					background-color:blue;
				}
				50%{
					background-color:red;
				}
				100% {
					background-color:red;
				}
			}
			@-webkit-keyframes policeLightsBlue {
				0% {
					background-color:red;
				}
				49.9%{
					background-color:red;
				}
				50%{
					background-color:blue;
				}
				100% {
					background-color:blue;
				}
			}
			.police .leftBlack{
				height:37px;
				width:2px;
				background-color: black;
				position:absolute;
				top:32px;
				left:0px;
				z-index: 1000;
			}
			.police .rightBlack{
				height:37px;
				width:2px;
				background-color: black;
				position:absolute;
				top:32px;
				left:40px;
				z-index: 1000;
			}
		/******************************************************/
			/******************************************************/
			/******************* Minivan Styling*******************/
			/******************************************************/
			/******************************************************/
			.minivan{
				width:46px;
				height:87px;
				left:45px;
				position:absolute;
				top:0px;
				background-color:#566789;
				-webkit-border-radius: 3px;
				-webkit-border-top-left-radius: 7px 5px;
				-webkit-border-top-right-radius: 7px 5px;
			}
			.minivan .frontWindshield{
				position: absolute;
				top:12px;
				left:2px;
				width:42px;
				height:17px;
				overflow: hidden;
				background-color:black;
				-webkit-border-top-left-radius: 20px 5px;
				-webkit-border-top-right-radius: 20px 5px;
				z-index:0;
			}
			.minivan .frontWindshield .leftCover{
				position: absolute;
				background-color: #566789;
				top: 2px;
				left: -34px;
				width: 40px;
				height: 40px;
				-webkit-transform: rotate(-24deg);
			}
			.minivan .frontWindshield .rightCover{
				position: absolute;
				background-color: #566789;
				top: 2px;
				left: 36px;
				width: 40px;
				height: 40px;
				-webkit-transform: rotate(24deg);
			}
			.minivan .roof{
				position: absolute;
				z-index:2;
				height:54px;
				width: 36px;
				left: 5px;
				top:25px;
				-webkit-border-top-left-radius: 20px 5px;
				-webkit-border-top-right-radius: 20px 5px;
				background-color:#566789;
			}
			.minivan .backWindshield{
				position: absolute;
				top:80px;
				height:3px;
				width: 38px;
				left: 4px;
				background-color:black;
				overflow: hidden;
			}
			.minivan .backWindshield .leftCover{
				position: absolute;
				background-color: #566789;
				top: -15px;
				left: -43px;
				width: 40px;
				height: 40px;
				-webkit-transform: rotate(24deg);

			}
			.minivan .backWindshield .rightCover{
				position: absolute;
				background-color: #566789;
				top: -15px;
				left: 41px;
				width: 40px;
				height: 40px;
				-webkit-transform: rotate(-24deg);
			}
			.minivan .leftWindow{
				position: absolute;
				height: 60px;
				width: 7px;
				left: 2px;
				top: 22px;
				overflow: hidden;
			}
			.minivan .leftWindow .topBlack{
				position: absolute;
				background-color: black;
				top: -5px;
				left: -38px;
				width: 40px;
				height: 28px;
				-webkit-transform: rotate(-24deg);
			}

			.minivan .leftWindow .bottomBlack{
				position: absolute;
				background-color: black;
				top: 38px;
				left: -38px;
				width: 40px;
				height: 28px;
				-webkit-transform: rotate(24deg);
			}
			.minivan .leftWindow .middleBlack{
				position: absolute;
				background-color: black;
				top: 13px;
				left: -33px;
				width: 40px;
				height: 33px;
			}
			.minivan .leftWindow .windowSpacerTop{
				position: absolute;
				background-color: #566789;
				top: 17px;
				left: 0px;
				width: 10px;
				height: 2px;
			}
			.minivan .leftWindow .windowSpacerMiddle{
				position: absolute;
				background-color: #566789;
				top: 33px;
				left: 0px;
				width: 10px;
				height: 2px;
			}
			.minivan .leftWindow .windowSpacerBottom{
				position: absolute;
				background-color: #566789;
				top: 47px;
				left: 0px;
				width: 10px;
				height: 1px;
				-webkit-transform: rotate(-12deg);
			}

			.minivan .rightWindow{
				position: absolute;
				height: 60px;
				width: 7px;
				left: 37px;
				top: 22px;
				overflow: hidden;
			}
			.minivan .rightWindow .topBlack{
				position: absolute;
				background-color: black;
				top: -5px;
				left: 5px;
				width: 40px;
				height: 28px;
				-webkit-transform: rotate(24deg);
			}

			.minivan .rightWindow .bottomBlack{
				position: absolute;
				background-color: black;
				top: 38px;
				left: 5px;
				width: 40px;
				height: 28px;
				-webkit-transform: rotate(-24deg);
			}
			.minivan .rightWindow .middleBlack{
				position: absolute;
				background-color: black;
				top: 13px;
				left: -33px;
				width: 40px;
				height: 33px;
			}
			.minivan .rightWindow .windowSpacerTop{
				position: absolute;
				background-color: #566789;
				top: 17px;
				left: 0px;
				width: 10px;
				height: 2px;
			}
			.minivan .rightWindow .windowSpacerMiddle{
				position: absolute;
				background-color: #566789;
				top: 33px;
				left: 0px;
				width: 10px;
				height: 2px;
			}
			.minivan .rightWindow .windowSpacerBottom{
				position: absolute;
				background-color: #566789;
				top: 47px;
				left: 0px;
				width: 10px;
				height: 1px;
				-webkit-transform: rotate(12deg);
			}
			.minivan .hoodBumpLeft{
				position: absolute;
				height: 15px;
				width: 3px;
				top: 0px;
				left: 7px;
				background-color: white;
				-webkit-transform: rotate(16deg);
				overflow: hidden;
				opacity:.3;
			}
			.minivan .hoodBumpLeft .cover{
				position: absolute;
				height: 34px;
				width: 10px;
				top: -5px;
				left: -9px;
				background-color: #566789;
				-webkit-transform: rotate(9deg);
			}
			.minivan .hoodBumpRight{
				position: absolute;
				height: 15px;
				width: 3px;
				top: 0px;
				left: 36px;
				background-color: white;
				-webkit-transform: rotate(-16deg);
				overflow: hidden;
				opacity: .3;
			}
			.minivan .hoodBumpRight .cover{
				position: absolute;
				height: 34px;
				width: 10px;
				top: -5px;
				left: 2px;
				background-color: #566789;
				-webkit-transform: rotate(-9deg);
			}
			.minivan .rack{
				position: absolute;
				height: 40px;
				width: 2px;
				top: 8px;
				left: 5px;
				background-color: black;
				-webkit-border-radius: 5px;
			}
			.minivan .rack1{
				position: absolute;
				height: 40px;
				width: 2px;
				top: 8px;
				left: 29px;
				background-color: black;
				-webkit-border-radius: 5px;
			}
			.minivan .rack2{
				position: absolute;
				height: 40px;
				width: 2px;
				top: 8px;
				left: 17px;
				background-color: black;
				-webkit-border-radius: 5px;
			}
			.minivan .tire1{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				background-color:black;
				position:absolute;
				left:-2px;
			}
			.minivan .tire2{
				-webkit-border-bottom-left-radius: 5px;
				-webkit-border-top-left-radius: 5px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
				left:-2px;
			}
			.minivan .tire3{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				height:15px;
				margin-top:20px;
				width:2px;
				left:46px;
				background-color:black;
				position:absolute;
			}
			.minivan .tire4{
				-webkit-border-bottom-right-radius: 5px;
				-webkit-border-top-right-radius: 5px;
				left:46px;
				height:15px;
				margin-top:63px;
				width:2px;
				background-color:black;
				position:absolute;
			}

		</style>
		<style>
			.car{
				width:75px;
				height:40px;
				position: absolute;
				top:-100px;
			}
			<?
				$game = new Game(202);
				$cars = $game->getCars();
				for($i=1;$i<count($cars);$i++){

					print "#car".$cars[$i]->getID()."{
						-webkit-animation-duration: ".$cars[$i]->maxLength."s;
						-webkit-animation: animation".$cars[$i]->getID()." 3s ".($cars[$i]->activateTime*.7)."s linear;
					}
					@-webkit-keyframes animation".$cars[$i]->getID()." {
						";

					for($x = 1;$x<=$cars[$i]->maxLength;$x++){
						print (round((100/$cars[$i]->maxLength)*$x))."%{
							left: ".($cars[$i]->positionTracker[$x]*75)."px;";
							if($x == 1){
								print "
							top: -100px;";
							}
							if($x == $cars[$i]->maxLength){
								print "
							top: 400px;";
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
		Now with scaling difficulty!
		<div class="gameBoard">
			<div class="road"></div>

			<?
				$taxi = '<div class="taxi">
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
				$police = '<div class="police p2">
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
				$minivan = '<div class="minivan m1">
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
			?>
		</div>

	</body>
</thml>
<?PHP

	class car{

		function __construct($activateTime,$isWinningCar=false) {
			$this->maxLength = 5;
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
				$this->currentLength++;
				$this->isActive = true;
				$this->positionTracker[$this->currentLength]=$this->position;
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

		function __construct($length=800) {
			//200 indexes with arrays of 8 inside them
			$this->timingArray = Array();
			$this->time = 0;
//			$this->maxCars = 5;
			$this->width = 5;
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

			$this->timingArray1 = $this->timingArray;
			$this->timingArray = Array();
			$winCar = $this->cars[0];
			for($i=0;$i<count($winCar->positionTracker);$i++){
				$this->timingArray[$i][$winCar->positionTracker[$i]] = $winCar->getID();
			}
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
			$rtnVar = round($completion*$this->width)+2;
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