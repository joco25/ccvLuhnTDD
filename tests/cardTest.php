<?php

require './app/card.php';

class CardTest extends PHPUnit_Framework_TestCase {


	/**
	 * Return true for successfully validated credit cards
	 */
	public function testShouldReturnTrue()
	{
		$card1 = new Card("4012888888881881");
		$this->assertTrue($card1->is_valid());
	}
	
	/**
	 * Return false for unsuccessfully validated credit cards
	 */
	public function testShouldReturnFalse()
	{
		$card2= new Card("4012888888881882");
		$this->assertFalse($card2->is_valid());
	}
	
	/**
	 * Return false for null credit cards
	 */
	public function testShouldReturnFalseForBlankStrings()
	{
		$card3 = new Card('');
		$this->assertFalse($card3->is_valid());
	}

	/**
	 * Return false for incomplete credit card numbers
	 */
	public function testShouldReturnFalseForIncompleteCreditCardNumbers()
	{
		$card4 = new Card('3728371827');
		$this->assertFalse($card4->is_valid());
	}
}