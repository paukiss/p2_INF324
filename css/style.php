<?php header("Content-type: text/css"); 

session_start();
if (isset($_GET["color"]))
{
    $_SESSION["color"] = ($_GET["color"] - 1) * 6;
}

$x = ($_SESSION["color"] - 1) * 6;
// echo $x;
$color1 = [
    1 => "#2e577e",
    2 => "rgb(19, 23, 73)",
    3 => "#4ea1c7",
    4 => "#004871",
    5 => "#a2cdf5",
    6 =>  "fondo.jpg",

    7 => "#e468e5",
    8 => "#ca4ecb",
    9 => "#ff81ff",
    10 => "#ffafff",
    11 => "#ffd9ff",
    12 =>  "fondo2.png",


    13 => "#c94637",
    14 => "#ad2c23",
    15 => "#e55e4c",
    16 => "#f48972",
    17 => "#ffb299",
    18 => "fondo3.png"
    
];
?>

*{
	margin: 0px;
	padding: 0px;
    text-decoration: none;
}

body{
	font-family: 'comicsans', cursive;
    background-color: #a1b4bd;  
    background: url(../img/<?php echo $color1[6 + $x] ?>);
}

header{
    background-color: <?php echo $color1[2 + $x] ?>;
}

footer{
	background-color: <?php echo $color1[1 + $x] ?>;
	height: 50px;
	text-align: center;
	line-height: 50px;
	color: #f7f7f7;
	font-size: 0.8em;
    display: block;
    position: relative;
}



a, input[type=submit]{
	background: <?php echo $color1[3 + $x] ?>;
	font-size: 1.3em;
	text-decoration: none;
	margin-right: 30px;
	color: white;
	border-radius: 10px;
    padding: 5px;
}

header nav.seleccion a:hover{
	background: <?php echo $color1[4 + $x] ?>;
	color: white;
	box-shadow: 0px 0px 15px 5px  white;
}

div.cuadro{
	border-radius: 10%;
	display: inline-block;
	width: 26%;
	margin: 5% 1% 5% 5%;
	position: relative;
	font-size: 1.05em;
    background-color: <?php echo $color1[5 + $x] ?>;
}

div.cuadro figure{
	float: left;
    margin: -50px 0px 0px -30px;
}

 div.cuadro figure img{
	border-radius: 50%;
	width: 150px;
	height: 140px;
}

 div.cuadro h2{
	text-align: center;
}

 div.cuadro p{
	padding: 5%;
    text-align: justify;
}
 
div.cuadro div{
	margin: 5%;
    padding: 2%;
	position: relative;
	border-radius: 15px;
}
