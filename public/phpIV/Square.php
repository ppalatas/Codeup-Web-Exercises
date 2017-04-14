<?php


 class Square extends Rectangle
 {
 	public function __construct($height)
	{
		parent::__construct($height, $height);
		$this->height = $height;
	}

	public function area()
	{

		$area = $this->height * $this->height;

		return $area;
	}

 	public function perimeter()
 	{
 		return $this->height * 4;
 	}

 }