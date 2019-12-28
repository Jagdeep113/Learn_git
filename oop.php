<?php 

/**
 * 
 */
class Ac
{
	public $model;
	public $speed;
	function __construct()
	{
		echo $this->model='voltas';
		echo $this->speed=16;
	}


	 function SpeedUP()
	{
		echo $this->speed+1;
	}
	function SpeedDown()
	{

		echo $this->speed-1;
	}

	

}
	$Ac_one=new Ac;
	