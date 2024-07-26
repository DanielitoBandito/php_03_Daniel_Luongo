<?php

class Company
{
    public $name;
    public $location;
    public $tot_employees;

    public $avg_salary;
    public static $companyCounter = 0;


    public function __construct($name, $location, $tot_employees, $avg_salary)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;

        self::$companyCounter++;

    }

    public function presentation()
    {

        if ($this->tot_employees == 0) {
            echo "La sede $this->name con sede in $this->location non ha dipendenti\n";
        } else {
            echo "L'ufficio $this->name con sede in $this->location conta ben $this->tot_employees lavoratori. \n";

        }
    }

    public function salary($month)
    {
        $calc = $this->avg_salary * $month * $this->tot_employees * 2.2;

        if ($month == null) {
            echo "Errore, inserire un lasso di tempo \n";
        } elseif ($month <= 1) {
            echo "L'azienda $this->name spende in media $calc € in $month mese per i propri dipendenti\n";
        } elseif ($month > 1) {
            echo "L'azienda $this->name spende in media $calc € ogni $month mesi per i propri dipendenti \n";
        } else {
            false;
        }
    }
}

$azienda1 = new Company("Expace", "Bagnolo", "6", 1200);
$azienda2 = new Company("DaGennaro", "Reggio", "8", 1500);
$azienda3 = new Company("Bufala&Caffe", "Reggio", "0", 2500);
$azienda4 = new Company("Aulab", "Italia", "50", 1820);
$azienda5 = new Company("BanditoBurrito", "San.Prospero", "3", 1300);
$count = Company::$companyCounter;


$azienda1->salary(5);
$azienda2->salary(1);
$azienda3->salary(8);
$azienda4->salary(3);
$azienda5->salary(5);
echo "Aziende Elaborate: " . $count . "\n";