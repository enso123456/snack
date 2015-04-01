<?php 

	$first = array("vodka","jaegermeister","rum");

	function bartender($mix){
		$other = array("cranberry juice","redbull","coke"); 
		echo "<h2>This is the Bartender </h2>";
		echo "<p>";
		foreach ($mix as $first_ingredient) {
			foreach ($other as $second_ingredient){
				if($first_ingredient == "vodka" && $second_ingredient == "cranberry juice")
				{
					echo "<strong>vodka cranberry</strong> - made using vodka and cranberry <br>"; 
				}
				elseif ($first_ingredient == "vodka" && $second_ingredient == "redbull") {
					echo "<strong>vodka redbull </strong>  - made using “vodka” and “redbull”  <br>";
				}
				elseif ($first_ingredient == "rum" && $second_ingredient == "coke") {
					echo "<strong>rum and coke </strong>  - made using “rum” and “coke”  <br>"; 
				}
				elseif ($first_ingredient =="rum" && $second_ingredient == "redbull") {
					echo "<strong>rum and redbull </strong>  - made using “rum” and “redbull” italic <br>";  
				}
				elseif ($first_ingredient =="jaegermeister" && $second_ingredient == "redbull") {
					echo "<strong>jaeger bomb </strong>  - made of “jaegermeister” and “red bull”  <br>";  
				}
				elseif($second_ingredient == "cranberry juice" && $first_ingredient == "rum"){
					echo "<italic> Cannot mix cranberry juice to rum </italic><br>";
				}
				elseif($second_ingredient == "cranberry juice" && $first_ingredient == "jaegermeister"){
					echo "<italic> Cannot mix cranberry juice to jaegermeister </italic> <br>";
				}
			}
		} 
		echo "</p>";

	}
	
	bartender($first);
	  
?>