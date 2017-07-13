<?php
$org =$_POST['org'] ? urlencode($_POST['org']) : null;
$des =$_POST['des']? urlencode($_POST['des']) : null;
if(isset($_POST['org']) && isset($_POST['des']))
$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$org."&destinations=".$des."&language=pt-BR"."&key=AIzaSyBlkUMmijowJcO-1ropgfriCYXRPj7ESrA&mode=bicycling";
$result = file_get_contents($urlApi);
$data 	= json_decode($result, true);
{
	
}
?>
<iframe
	width="700"
	height="550"
	frameborder="0" style="border:0"
	src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBlkUMmijowJcO-1ropgfriCYXRPj7ESrA&origin=<?php echo $org; ?>&destination=<?php echo $des; ?>&mode=bicycling&zoom=14" allowfullscreen>
	
</iframe>

<p>
Origem:
<strong><?php echo $data ['origin_addresses'][0]?></strong>

</p>
<p>
Destino:
<strong><?php echo $data ['destination_addresses'][0]?></strong>

</p>
<p>
Distância:
<strong><?php echo $data ['rows'][0]['elements'][0]['distance']['text']?></strong>

</p>
<p>
Preço entrega:
<strong>
R$
<?php 
$km = $data ['rows'][0]['elements'][0]['distance']['text'] ;
$preco = 2;
$num = floatval(str_replace(",",".", $km));
$calculo = $num*$preco;
echo number_format($calculo,2,'.',"");
?>
</strong>
</p>
<p>
Tempo estimado:
<strong><?php echo $data ['rows'][0]['elements'][0]['duration']['text']?></strong>

</p>
