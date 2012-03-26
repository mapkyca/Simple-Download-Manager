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

      $include = array();
      
      $include = array (
		'/classes/DownloadManager.class.php',
		'/classes/Product.class.php',
      );
      
      // Boot the engine
      foreach ($include as $file)
		require_once(dirname(__FILE__) . $file);
      
      
      // Initialise the site
      DownloadManager::init();
