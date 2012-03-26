<?php

DownloadManager::registerProduct(
	new Product(array (
		'productid' => 'ExampleProduct12345',
		'name' => 'Example',
		'description' => 'An example download',
		'file' => 'downloads/example.zip',
		'tags' => 'download, example',
		
		'gacode' => 'GA-12345',
		'icon' => 'gfx/download.gif',
	))
);
