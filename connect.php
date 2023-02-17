<?php
session_start();



    if (isset($_POST['submit'])) {
        $salary = $_POST['salary'];
        $type = $_POST['type'];
       
    
            if ($_POST['type'] == "bi-Monthly") {
                $Bisalary = $salary  * 2;
                $Biannual  = $Bisalary *12;
                
                if ($Biannual <= 250000){
                    $Bisalary = 0;
                    $Bimonthlytax = 0;
                }
                else if ($Biannual<= 400000 && $Biannual > 250000) {
                    $Biannualtax = ($Biannual-250000)*.2;
                    $Bimonthlytax = $Biannualtax/12;
                }
                else if ($Biannual <= 800000 && $Biannual > 400000) {
                    $Biannualtax = 30000+($Biannual-400000)*.25;
                    $Bimonthlytax = $Biannualtax/12;
                }
                else if ($Biannual <= 2000000 && $Biannual > 800000) {
                    $Biannualtax = 130000+($Biannual-800000)*.3;
                    $Bimonthlytax = $Biannualtax/12;
                }
                else if ($Biannual <= 8000000 && $Biannual > 2000000) {
                    $Biannualtax = 490000+($Biannual-2000000)*.32;
                    $Bimonthlytax = $Biannualtax/12;
                }
                else if ($Biannual > 8000000) {
                    $Biannualtax = 2410000+($Biannual-8000000)*.35;
                    $Bimonthlytax = $Biannualtax/12;
                }  

                echo "Annual Salary: " . $Biannual;echo "</br>";
                
                echo "Est. Annual Tax: " . $Biannualtax;echo "</br>";
                
                echo "Est. Monthly Tax: " . $Bimonthlytax; echo "</br>";
                

            } else if ($_POST['type'] == "monthly") {
                $annual = $salary *12;

                if ($annual <= 250000){
                    $salary = 0;
                    $monthlytax = 0;
                }
                else if ($annual<= 400000 && $annual > 250000) {
                    $annualtax = ($annual-250000)*.2;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 800000 && $annual > 400000) {
                    $annualtax = 30000+($annual-400000)*.25;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 2000000 && $annual > 800000) {
                    $annualtax = 130000+($annual-800000)*.3;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 8000000 && $annual > 2000000) {
                    $annualtax = 490000+($annual-2000000)*.32;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual > 8000000) {
                    $annualtax = 2410000+($annual-8000000)*.35;
                    $monthlytax = $annualtax/12;
                }  

                echo "Annual Salary: " . $annual; echo "</br>";
                
                echo "Est. Annual Tax: " . $annualtax; echo "</br>";
               
                echo "Est. Monthly Tax: " . $monthlytax; echo "</br>";
               
            }
        }