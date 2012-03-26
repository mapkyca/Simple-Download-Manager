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
	if (!$product) die("No product ID");
	
	DownloadManager::manageDownload($product);
