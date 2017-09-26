<?php
/**
 * Created by PhpStorm.
 * User: Jeka
 * Date: 26.09.2017
 * Time: 14:11
 */

class poka {

	private $poka;

	function get(){
		return $this->poka;
	}
	function set( $poka ){
		$this->poka = $poka;
	}

	function double (){
		$this->poka *= 2;
	}

	function triple (){
		$this->poka *= 3;
	}
}