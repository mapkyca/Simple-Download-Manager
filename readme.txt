Simple Download Manager - Manage file downloads
by Marcus Povey <marcus@marcus-povey.co.uk>
================================================================================

Introduction:
-------------

This is a simple file download manager for serving downloadable files and
collecting some access stats.

I needed something simple to do this for a couple of my own projects, hopefully
some of you might find a use for it.

Usage:
------

- Unpack the git repo into a web visible folder.
- Put the files you want to make available for download in downloads/
- Create a manifest for it in products/

Example Manifest:
-----------------

<?php

DownloadManager::registerProduct(
	new Product(array (
		'productid' => 'ExampleProduct12345', // The product code to identify the download
		'name' => 'Example', // Example product
		'description' => 'An example download', // Some description
		'file' => 'downloads/example.zip', // File to serve
		'tags' => 'download, example', // Optional tags identifying the download (later, this could linke to searches)
		
		'gacode' => 'GA-12345', // Google analytics tracking code for product
		'icon' => 'gfx/download.gif', // Icon to display
	))
);

?>

Triggering a download:
----------------------

- Pass your product id as a variable ?productid=xxxxx

You can mask this with modrewrite.

Happy downloads!
