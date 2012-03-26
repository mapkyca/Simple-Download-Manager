<?php
	
	/**
     * @file
     * Simple Download Manager.
     *
     * The product class.
     *
     * @license GPLv2 (see LICENCE.txt).
     * @author Marcus Povey <marcus@marcus-povey.co.uk>
     * @copyright Marcus Povey 2012
     * @link http://www.marcus-povey.co.uk
     */


	class Product
	{
		private $product;
		
		public function __construct(array $details = null )
		{
			$this->product = $details;
		}
		
		public function getName()
		{
			if ($this->product['name'])
				return $this->product['name'];
		}
		
		public function getDescription()
		{
			if ($this->product['description'])
				return $this->product['description'];
		}
		
		public function getTags()
		{
			if ($this->product['tags'])
				return $this->product['tags'];
		}
		
		public function getProductID()
		{
			if ($this->product['productid'])
				return $this->product['productid'];
		}
		
		public function getIcon()
		{
			if ($this->product['icon'])
				return $this->product['icon'];
				
			return 'gfx/download.gif';
		}
		
		public function getUrl()
		{
			if ($this->product['file'])
				return $this->product['file'];
		}
		
		public function getGACode() 
		{
			if ($this->product['gacode'])
				return $this->product['gacode'];
		}
	}
