<!DOCTYPE html>
<html>
<head>
    <title>ЕГН</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="Vladimir Kirov">
    <style type="text/css">
        <!--
        body {
            background: #A3CEE7;
            font: 11pt Verdana, Arial, Helvetica, sans-serif;
        }
        a {
            color: #2020E0;
            text-decoration: underline;
            padding: 3px;
            border: 1px solid #A3CEE7;
        }
        a:hover {
            background: #cdcdff;
            text-decoration: underline;
            border: 1px solid blue;
        }
        h2 {
            margin: 0px;
        }
        h3 {
            margin-bottom: 0px;
        }
        .result {
            background: #be93d7;
            padding: 4px;
        }
        li.result {
            background: #be93d7;
        }
        form {
            margin: 0px;
        }
        -->
    </style>
</head>

<body>
<h2><b>Информация, проверка за единни граждански номера (ЕГН)</b></h2>
<p><b>Генерирай ЕГН</b></p>


<?php
if ( isset($_GET["egn"])) {
    $bulgariaEGN = new BulgarianEGN($_GET['egn']);
    print "<p class=\"result\"><b><em>Информация за ЕГН:</em></b> ";
    print $bulgariaEGN->__toString() . ' gender: '.$bulgariaEGN->getGender();
    print "</p>\n";
}
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
    <input type="hidden" name="a" value="check">
    ЕГН <input type="text" size="10" maxlength="10" name="egn"
               value="<?= isset( $_GET["egn"] ) ? htmlspecialchars($_GET["egn"]) : '' ?>">
    <input type="submit" value=" Информация за ЕГН ">
</form>


<?php
class BulgarianEGN
{
    CONST FEMALE_GENDER = 'female';
    CONST MALE_GENDER = 'male';
    public $egn;
    public $birthday;
    public $gender;
    /* @var array */
    private $parity_weights = array( 2, 4, 8, 5, 10, 9, 7, 3, 6 );
    
    /**
     * @param string $egn_string
     *
     * @throws Exception
     */
    public function __construct ($egn_string)
    {
        // must be 10-digit number:
        if ( !preg_match('/^[0-9]{10}$/', $egn_string) ) {
            throw new Exception('Invalid $egn_string');
        }
        // parity digit must be correct:
        if ( !self::isValid($egn_string) ) {
            throw new Exception('Parity check failed - invalid $egn_string');
        }
        $this->egn = $egn_string;
        $year = substr($egn_string, 0, 2);
        $month = substr($egn_string, 2, 2);
        $day = substr($egn_string, 4, 2);
        /* Month:
         1-12 means year 19xx,
         21-32 means year 18xx,
         41-52 means year 20xx */
        switch ( TRUE ) {
            case $month >= 1 and $month <= 12:
                $year += 1900;
                break;
            case $month >= 21 and $month <= 32:
                $year += 1800;
                $month -= 20;
                break;
            case $month >= 41 and $month <= 52:
                $year += 2000;
                $month -= 40;
                break;
            default:
                throw new Exception('Invalid month');
        }
        // must be valid date (i.e. not 30/Feb)
        if ( !checkdate($month, $day, $year) ) {
            throw new Exception('Invalid birth date');
        }
        $ymd = $year . '-' . $month . '-' . $day;
        $this->birthday = DateTime::createFromFormat('Y-m-d', $ymd);
        // digit 9 (which translates to index 8) is even for males, odd for females
        // Gender equality rulez, but is_male is assigned first! ;)
        $this->gender = $egn_string{8} % 2 == 0 ? self::MALE_GENDER : self::FEMALE_GENDER;
    }
    public function __toString ()
    {
        return $this->birthday->format('Y-m-d');
    }
    public function getGender ()
    {
        return $this->gender;
    }
    /* Performs the parity check - we expect a 10-digit number!
    @param string $egn_string
    @return boolean */
    public function isValid ($egn_string)
    {
        return self::getParityDigit($egn_string) == $egn_string{9};
    }
    /* Computes the parity digit based on the first 9 digits
    @param string $egn_string
    @return integer */
    public function getParityDigit ($egn_string)
    {
        $sum = 0;
        foreach ( $this->parity_weights as $k => $weight ) {
            $sum += $egn_string{$k} * $weight;
        }
        return ( $sum % 11 ) % 10;
    }
}

?>


</body>
</html>