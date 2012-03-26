<?php

	/**
     * @file
     * Simple Download Manager.
     *
     * Main download manager class, utilities and methods for managing the download
     * and collecting stats.
     *
     * @license GPLv2 (see LICENCE.txt).
     * @author Marcus Povey <marcus@marcus-povey.co.uk>
     * @copyright Marcus Povey 2012
     * @link http://www.marcus-povey.co.uk
     */
    
    /**
     * Main download manager class.
     */
    class DownloadManager {
		
		/**
		 * Available products.
		 */
		private static $products = array();
		
		/**
		 * Retister a new product.
		 */
		public static function registerProduct(Product $product)
		{
			self::$products[] = $product;
		}
		
		/**
		 * Load product manifests from the product description directory.
		 */
		public static function initProducts($product_directory)
		{
			if ($handle = opendir($product_directory)) 
			{
				while ($file = readdir($handle)) 
				{
					if (strpos($file, '.php')!==false)
					{
						include_once($product_directory . $file);
					}
				}
			}
			
		}
		
		/**
		 * Boot the system.
		 */
		public static function init()
		{
		}

		/**
		 * Manage a download.
		 */
		public static function manageDownload(Product $product)
		{
		}

		/**
		 * Retrieve a product by it's ID.
		 */
		public static function getByID($productID)
		{
			foreach (self::$products as $product) {
				if ($productID == $product->getProductID()) return $product;
			}
		}
		
	}


	class DownloadManagerException extends Exception {}
