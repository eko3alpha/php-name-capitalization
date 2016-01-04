<?php
class CapsTest extends PHPUnit_Framework_TestCase
{
    protected $names = [
        " TRIM " => "Trim",
        "ALL UPPERCASE" => "All Uppercase",
        "JOE THE PLUMBER" => "Joe the Plumber",

        "BRI'ANNA" => "Bri'Anna",

        "D'AGOSTINO" => "D'Agostino",
        "DA'KIA" => "Da'Kia",
        "DASH-NAME" => "Dash-Name",
        "D'LAN" => "D'Lan",

        "JA'FRANCES" => "Ja'Frances",
        "JAYNE'" => "Jayne'",
        "JA'FRANCES" => "Ja'Frances",
        "JEA'NAY" => "Jea'Nay",
        "J'ANN" => "J'Ann",


        "LA'TASHA" => "La'Tasha",
        "LE'KONDUA" => "Le'Kondua",
        "LABBE'-AUZENNE" => "Labbe'-Auzenne",

        "O'TOOLE-MILLER" => "O'Toole-Miller",
        "O'DONNELL" => "O'Donnell",

        "R'RIELLE" => "R'Rielle",

        "SHA'KITA" => "Sha'Kita",

        "T'NESHA" => "T'Nesha",

        "WILLIAM JR" => "William Jr",

        // Unsure how to handle
        //"RAE'VAN" => "Rae'Van",
        //"DE'LONYA" => "De'Lonya",
        //"DEVONTA'" => "DeVonta'",
        //"MS.JAYADE'LET" => "Ms.JayaDe'let",
        //"Devynn-chere'e" => "Devynn-chere'e"
    ];

    public function __construct()
    {

    }

    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function test_names()
    {
        foreach($this->names as $key => $val)
        {
            $this->assertEquals($val, titleCase($key));
            $this->assertEquals($val, titleCase(strtolower($key)));
            $this->assertEquals($val, titleCase(strtoupper($key)));
        }
    }

}
