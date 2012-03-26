<?php

	/**
     * @file
     * Simple Download Manager.
     *
     * Manage downloads and collect stats, simply.
     *
     * @license GPLv2 (see LICENCE.txt).
     * @author Marcus Povey <marcus@marcus-povey.co.uk>
     * @copyright Marcus Povey 2012
     * @link http://www.marcus-povey.co.uk
     */

	require_once(dirname(__FILE__) . '/lib/start.php');
	
	DownloadManager::initProducts(dirname(__FILE__) . '/products/');
	
	$product = DownloadManager::getByID($_REQUEST['productid']);
	if (!$product) die("No product found with id: {$_REQUEST['productid']}");
	
?>
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		
		<title><?php echo $product->getName(); ?></title>
		<meta name="keywords" content="<?php echo $product->getTags(); ?>" />
        <meta name="description" content="<?php echo $product->getDescription(); ?>" />
        <meta http-equiv="refresh" content="2;URL=<?php echo $product->getUrl(); ?>" />       
	</head>
	<body class="<?php echo $product->getProductID(); ?>">
	
		<div class="dialog download"  itemscope itemtype="http://schema.org/Product">
		
			<?php if ($icon = $product->getIcon()) {
				?>
				<div class="icon"><img src="<?php echo $icon; ?>" itemprop="image" /></div>
				<?php
			} ?>
		
			<h1 itemprop="name"><?php echo $product->getName(); ?></h1>
			
			<p itemprop="description"><?php echo $product->getDescription(); ?></p>
		
		</div>
		
		<div class="dialog link">
			Your download will begin shortly, if it doesn't please click on the following link: <a href="<?php echo $product->getUrl(); ?>"><?php echo $product->getUrl(); ?></a>
		</div>
	
	</body>
	<?php
		if ($product->getGACode())
		{
			?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $product->getGACode(); ?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
		<?php } ?>
	</script>
</html>
