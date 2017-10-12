<?php 
// setcookie("name","jun",time() + 3600);

// $data = $_COOKIE["count"] + 1;
// setcookie("count",$data);

// session_start();
// $_SESSION["score"] = 80;


 ?>



<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

// class Car{
// 	public $color;
// 	public $tank_capa;
// 	private $oil;

// 	function Run(){
// 		$this->oil--;
// 	}
// 	function setOil($data){
// 		$this->oil = $data;
// 	}
// 	function getOil(){
// 		return $this->oil;
// 		}


// }

// $Car1 = new Car();
// $Car1 ->color = "blue";
// $Car1 ->tank_capa = 50;
// $Car1 ->setOil(5);
// $Car1 ->Run();
// echo $Car1->getOil();




// if (isset($_COOKIE["name"])) {
// 	echo $_COOKIE["name"];
// }else{
// 	echo "送信されてないよ";
// }




$n = 4;
for ($i = 1; $i <= $n ; $i++) { 
	for ($j=1; $j <= $n; $j++) { 
		if ($i == 1 || $i == $n) {
			echo "＊";
		}else{
			if ($j == 1 || $j == $n) {
				echo "＊";
			}else{
				echo "　";
			}
		}
	}
	echo "<br>";
}


// $a = 1;
// $b = 2;
// $c = $a * $b * $b;

// if ($a == 1) {
// 	echo "a";
// }elseif ($a == 2) {
// 	echo "b";
// }else{
// 	echo "c";
// }

// if ($b == 1) {
// 	echo "a";
// }elseif ($b == 2) {
// 	echo "b";
// }else{
// 	echo "c";
// }

// if ($c == 1) {
// 	echo "a";
// }elseif ($c == 2) {
// 	echo "b";
// }else{
// 	echo "c";
// }


// function return_word($data){
// 	if ($data == 1) {
// 		return "a";
// 	}elseif ($data == 2) {
// 		return "b";
// 	}else{
// 		return "c";
// 	}
// }

// $a = 1;
// $b = 2;
// $c = $a * $b * $b;

// echo return_word($a);
// echo return_word($b);
// echo return_word($c);

// $moji = "テスト";
// echo str_replace("テスト","てすと", $moji);

 ?>


</body>
</html>