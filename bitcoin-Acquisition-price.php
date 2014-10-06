<?php
function bitcoinwatch(){
	$markets=array("bitstampUSD","bitfinexUSD","rippleXRP");
	$data = file_get_contents("http://api.bitcoincharts.com/v1/markets.json");
	$btcarr=$data;
    $de_json = json_decode($btcarr,TRUE);
      $count_json = count($de_json);
      $count_markets=count($markets);
	for ($k = 0; $k < $count_markets; $k++){		      
		for ($i = 0; $i < $count_json; $i++)
          	 {    
			if($de_json[$i]['symbol']==$markets[$k]){
				echo "<a href='http://bitcoincharts.com/markets/".$markets[$k].".html'>".$markets[$k].":".$de_json[$i]['bid']."</a> <br>"	
			}
		}
	}
}		   
	      
bitcoinwatch();		
?>