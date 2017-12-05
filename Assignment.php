<?php


class Assignment
{
    public $numb1;
    public $numb2;

    public function __construct($n1, $n2)
    {
        $this->numb1 = $n1;
        $this->numb2 = $n2;
    }
    public function add()
    {
        $arith = $this->numb1 + $this->numb2;
		echo $this->numb1.' + '.$this->numb2.' = ';
        echo $arith;
		echo '<br>';
    }
    public function subtract()
    {
        $arith = $this->numb1 - $this->numb2;
		echo $this->numb1.' - '.$this->numb2.' = ';
        echo $arith;
		echo '<br>';
    }
    public function multiply()
    {
        $arith = $this->numb1 * $this->numb2;
		echo $this->numb1.' * '.$this->numb2.' = ';
        echo $arith;
		echo '<br>';
    }
    public function divide()
    {
        $arith = $this->numb1 / $this->numb2;
		echo $this->numb1.' / '.$this->numb2.' = ';
        echo $arith;
		echo '<br>';
    }
	public function factorial()
	{
		$arith = $this->numb1;
		for ($i = 1; $i <= $arith; $i++){
        $factorial = $factorial * $i;
        }
	}
	public function sine()
	{
		$arith = $this->numb1;
		echo sin($arith);
		echo '<br>';
	}
	public function tangent()
	{
		$arith = $this->numb1;
		echo tan($arith);
		echo '<br>';
	}
	public function cosine()
	{
		$arith = $this->numb1;
		echo cos($arith);
		echo '<br>';
	}
	public function logarithm()
	{
		$arith = $this->numb1;
		echo log10($arith);
		echo '<br>';
	}
        public function squareroot()
        {
                
        }
}