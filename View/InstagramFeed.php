<?php 
/********************** variaveis padrão de acesso *******************************/
//var_dump($BDToken);
$campos = "caption,media_type,media_url,permalink,timestamp,username";
$token = "$BDToken";
$limitItens = 6;
// https://www.instagram.com/yes.we.teach/
/*********************** pedido via api do instagram formato Json ***********************************/



$stringApiCompleto = "https://graph.instagram.com/me/media?fields={$campos}&access_token=$token&limit={$limitItens}";
//var_dump($stringApiCompleto);

$converterJsonPHP = @file_get_contents($stringApiCompleto);
$resultadodapesquisa = json_decode($converterJsonPHP, true, 512, JSON_BIGINT_AS_STRING);
//var_dump($resultadodapesquisa['data']);

?>
<div style="backgroud:white;">

<div class="row">
<?php 

//echo($stringApiCompleto);
foreach($resultadodapesquisa['data'] as $key => $value){
	$caption = $value["caption"];
	$media_type = $value["media_type"];
	$permalink	 	= $value["permalink"];
	$media_url = $value["media_url"];
	$timestamp = $value["timestamp"];
?>
<div class="imagenFeed">
	<?php if($media_type=="CAROUSEL_ALBUM"){ ?>
	<a href="<?php echo $permalink; ?>" class="" alt="<?php echo $caption; ?>">
		<img src="<?php echo $media_url; ?>" class="" alt="<?php echo $caption; ?>">
	</a>
	<?php 
	}
	?>
	
	<?php if($media_type=="IMAGE"){ ?>
	<a href="<?php echo $permalink; ?>" class="" alt="<?php echo $caption; ?>">
		<img src="<?php echo $media_url; ?>" class="" alt="<?php echo $caption; ?>">
	</a>
	<?php 
	}
	?>
	
	
	<?php if($media_type=="VIDEO"){ ?>
	<a href="<?php echo $permalink; ?>" class="" alt="<?php echo $caption; ?>">
		<video  class="VideoBody" controls  alt="<?php echo $caption; ?>">
			<source src="<?php echo $media_url; ?>" type="video/mp4">
			<source src="<?php echo $media_url; ?>" type="video/ogg">
			Your browser does not support the video tag.
		</video> 
	</a>
	<?php 
	}
	?>
</div>
<?php 
}
?>
</div>
</div>
