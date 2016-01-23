<?php

abstract class Sex 
{
	const MALE = 'male';
	const FEMALE = 'female';
}

 class Egn 

{
	private $year;
	private $month;
	private $day;
	private $sex;

	public function __construct($year, $month, $day, $sex) {
		$this->year = $year;
		$this->month = $month;
		$this->day = $day;
		$this->sex = $sex;
	}

	public function __toString() {

		return $this->day . '.' . $this->month . '.' . $this->year . ' - ' . $this->sex;
	}
}

class EgnParser 
{

	public static function Parse($egn) {
		$egn = (string) $egn;
		if ( (strlen($egn)) !=10 || !preg_match('/^[0-9]+$/', $egn)) {
			throw new Exception('Invalid EGN');
		}

		$year = substr($egn, 0, 2);
		$month = substr($egn, 2, 2);
		$day = substr($egn, 4, 2);
		$sex = Sex::MALE;

		$sexNumber = (int) substr($egn, 8, 1);
		if ($sexNumber % 2 == 0) {
			$sex = Sex::MALE;
		} else {
			$sex = Sex::FEMALE;
		}

		return new Egn($year, $month, $day, $sex);

	}

}

$egn = EgnParser::Parse(7407046628);
echo $egn;






?>