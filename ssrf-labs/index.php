<html>
<head>
<style>
/* ----- GENERAL ----- */

html {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}

*, *:before, *:after {
	-webkit-box-sizing:inherit;
	-moz-box-sizing:inherit;
	box-sizing:inherit;
}

html, body {
	width:100%;
	height:100%;
	margin:0;
	padding:0;
	font-size:1em;
}



/* ----- CONTAINERS ----- */

#master-cont {
	position:relative;
	width:100%;
	height:100%;
	background-color:#FFFFFF;
	overflow:hidden;
}

.cont {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	padding:50px 100px;
	-webkit-transition-duration:0.4s;
	-moz-transition-duration:0.4s;
	-o-transition-duration:0.4s;
	transition-duration:0.4s;
}

.inner {
	position:relative;
	width:100%;
	height:100%;
	color:#FFFFFF;
	text-align:center;
	border-radius:20px;
}

.inner p {
	position:relative;
	top:50%;
	margin:0;
	font-family:'Abril Fatface', cursive;
	font-size:10em;
	-webkit-transform:translateY(-50%);
	-moz-transform:translateY(-50%);
	-ms-transform:translateY(-50%);
	-o-transform:translateY(-50%);
	transform:translateY(-50%);
}



/* ----- PANEL COLORS ----- */

#cont1 .inner {background-color:#1A334C;}
#cont2 .inner {background-color:#1F3D5C;}
#cont3 .inner {background-color:#24476B;}
#cont4 .inner {background-color:#29527A;}
#cont5 .inner {background-color:#2E5C8A;}
#cont6 .inner {background-color:#336699;}
#cont7 .inner {background-color:#4775A3;}
#cont8 .inner {background-color:#5C85AD;}



/* ----- INITIAL ROTATIONS ----- */
/* (to avoid awkward animation on load) */

.cont {
	-webkit-transform:rotate(180deg);
	-moz-transform:rotate(180deg);
	-ms-transform:rotate(180deg);
	-o-transform:rotate(180deg);
	transform:rotate(180deg);
}

#cont1 {
	-webkit-transform:rotate(0deg);
	-moz-transform:rotate(0deg);
	-ms-transform:rotate(0deg);
	-o-transform:rotate(0deg);
	transform:rotate(0deg);
}



/* ----- SWITCH BUTTONS ----- */

.switch {
	position:absolute;
	top:50%;
	width:60px;
	height:60px;
	border-radius:50%;
	background-color:#FF3300;
	z-index:89;
	cursor:pointer;
	opacity:0.5;
	-webkit-transform:translateY(-50%);
	-moz-transform:translateY(-50%);
	-ms-transform:translateY(-50%);
	-o-transform:translateY(-50%);
	transform:translateY(-50%);
	-webkit-transition-duration:0.3s;
	-moz-transition-duration:0.3s;
	-o-transition-duration:0.3s;
	transition-duration:0.3s;
}

.switch.prev {left:20px;}
.switch.next {right:20px;}

.switch:before, .switch:after {
	content:"";
	position:absolute;
	display:block;
	top:27px;
	left:50%;
	height:6px;
	width:26px;
	background-color:#FFFFFF;
	border-radius:3px;
	-webkit-transition-duration:inherit;
	-moz-transition-duration:inherit;
	-o-transition-duration:inherit;
	transition-duration:inherit;
}

.switch:before {
	-webkit-transform:translateX(-50%) rotate(45deg);
	-moz-transform:translateX(-50%) rotate(45deg);
	-ms-transform:translateX(-50%) rotate(45deg);
	-o-transform:translateX(-50%) rotate(45deg);
	transform:translateX(-50%) rotate(45deg);
}
.switch:after {
	-webkit-transform:translateX(-50%) rotate(-45deg);
	-moz-transform:translateX(-50%) rotate(-45deg);
	-ms-transform:translateX(-50%) rotate(-45deg);
	-o-transform:translateX(-50%) rotate(-45deg);
	transform:translateX(-50%) rotate(-45deg);
}

.switch.prev:before, .switch.prev:after {
	-webkit-transform-origin:3px center;
	-moz-transform-origin:3px center;
	-ms-transform-origin:3px center;
	-o-transform-origin:3px center;
	transform-origin:3px center;
}
.switch.next:before, .switch.next:after {
	-webkit-transform-origin:23px center;
	-moz-transform-origin:23px center;
	-ms-transform-origin:23px center;
	-o-transform-origin:23px center;
	transform-origin:23px center;
}

.switch:hover {
	opacity:1;
}



/* ----- LOGO / LINK ----- */

#thalogo {
	position:fixed;
	width:100px;
	height:100px;
	top:15px;
	left:0;
	cursor:pointer;
	z-index:99;
}

#thalogo path {
	fill:#AAAAAA;
	opacity:0.5;
	-webkit-transition-duration:0.3s;
	-moz-transition-duration:0.3s;
	-o-transition-duration:0.3s;
	transition-duration:0.3s;
}

#thalogo:hover path {
	opacity:1;
}



/* ----- MEDIA QUERIES ----- */

@media (max-width:600px) {

	.cont {padding:40px;}
	.inner p {font-size:8em;}
	.switch.prev {left:10px;}
	.switch.next {right:10px;}
	#thalogo {top:50px;left:35px;}

}
</style>
</head>
<body>
<center>
<h1> THE FLAG IS IN /flag/flag.php </h1>
</center>
<div id="master-cont">
		<div id="cont1" class="cont">
				<div class="inner">
						<p>1<br><a href='/ssrf-labs/Level1/'>LEVEL1</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>
		<div id="cont2" class="cont">
				<div class="inner">
						<p>2<br><a href='/ssrf-labs/Level2/'>LEVEL2</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>
		<div id="cont3" class="cont">
				<div class="inner">
						<p>3<br><a href='/ssrf-labs/Level3/'>LEVEL3</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>
		<div id="cont4" class="cont">
				<div class="inner">
						<p>4<br><a href='/ssrf-labs/Level4/'>LEVEL4</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>
		<div id="cont5" class="cont">
				<div class="inner">
						<p>5<br><a href='/ssrf-labs/Level5/'>LEVEL5</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>
		<div id="cont6" class="cont">
				<div class="inner">
						<p>6<br><a href='/ssrf-labs/Level6/'>LEVEL6</a> </p>
				</div>
				<div class="switch prev"></div>
				<div class="switch next"></div>
		</div>

		<a id="thalogo-link" href="#" target="_blank">
				<svg id="thalogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="1600px" height="1600px" viewBox="0 0 1600 1600" enable-background="new 0 0 1600 1600" xml:space="preserve">
						<g>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#FF3300" d="M411.367 377.826c259.938-28.359 201.469-15.812 204 397.4 c1.578 247.219-23.391 432.9 65.4 428.672c-260.656 30.016-221.156-16.531-213.547-442.766 C472.836 441 480.2 418.3 411.4 377.8" />
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#FF3300" d="M595.57 101.888C885.477 85.7 807.1 68.3 820.1 775.3 c4.531 247.157-11.219 434.5 77.5 430.282c-272.172 34.312-220.094 5.703-225.75-444.375 C665.945 293.8 693.4 148.9 595.6 101.9" />
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#FF3300" d="M818.695 668.935c202.984-21.922 221.984-69.359 214.5 290.5 c-8.031 385-217.062 565.719-352.391 573.547c103.531-59.578 194.25-119.469 203.922-585.062 C889.32 722.3 868.6 688.8 818.7 668.9"
								/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#FF3300" d="M1072.914 731.06c24.031 477.11-3 500.3 257.6 470.3 c-88.734 4.266-99.516-209.188-109.328-456.204c-18.281-457.25 1.312-484.125-265.578-460.406 c-61.625 12.609-84.281 60.484-90.734 126.875c-18.781 193.734-16.703 221.1 132.8 202.2 c-9.422-60.516-11.484-269.062 35.344-278.531C1069.367 377.9 1063 430.5 1072.9 731.1"
								/>
								<path fill-rule="evenodd" clip-rule="evenodd" fill="#FF3300" d="M269.477 720.326c150.641-126.047 123.828-30.109 191.4 40.8 C328.555 886.5 344.4 769.6 269.5 720.3" />
						</g>
				</svg>
		</a>
</div>
<script >
function pareArray(clsNm) {
	var aAll = document.getElementsByClassName(clsNm);
	var aAbbr = [];
	for(var i = 0; i < aAll.length; i++) {
		if(aAll[i].nodeType == 1) {aAbbr.push(aAll[i]);}
	}
	return aAbbr;
}

function setPrefixes(ele, property, value) {
	ele.style["webkit" + property] = value;
	ele.style["moz" + property] = value;
	ele.style["ms" + property] = value;
	ele.style["o" + property] = value;
}

var containers = pareArray("cont"),
	prevs = pareArray("prev"),
	nexts = pareArray("next"),
	rotationIncrement = 360 / containers.length,
	dpn = 0;

function setTO(array) {
	var toVert = (0.5 * window.innerWidth / Math.tan((rotationIncrement / 2) * Math.PI/180)) + window.innerHeight;
	for(var i = 0; i < array.length; i++) {
		setPrefixes(array[i], "TransformOrigin", "center " + toVert + "px");
		array[i].style.transformOrigin = "center " + toVert + "px";
	}
}
setTO(containers);

function setRotation(array, dpn) {
	for(var i = 0; i < array.length; i++) {
		var r = (i - dpn) * rotationIncrement;
		setPrefixes(array[i], "Transform", "rotate(" + r + "deg)");
		array[i].style.transform = "rotate(" + r + "deg)";
	}
}
setRotation(containers, dpn);

function addRotateELs(array, change) {
	for(var i = 0; i < array.length; i++) {
		(function(j){
			array[j].addEventListener("click", function(){
				dpn += change;
				setRotation(containers, dpn);
			});
		})(i);
	}
}
addRotateELs(prevs, -1);
addRotateELs(nexts, 1);


// on window resize, reset transform-origin

if(window.attachEvent) {
    window.attachEvent('onresize', function() {
        setTO(containers);
    });
}
else if(window.addEventListener) {
    window.addEventListener('resize', function() {
        setTO(containers);
    }, false);
}
</script>
</body>
</html>