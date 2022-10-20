<?php

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }

}

$num1 = $_POST['num1Inserted'];
$num2 = $_POST['num2Inserted'];
$cal = $_POST['calInserted'];

$calculator = new Calc($num1, $num2, $cal);
echo $calculator->calcMethod();
 ?>