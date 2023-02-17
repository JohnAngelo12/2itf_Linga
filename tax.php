<?php

include ('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title> TAXXY: A TAX CALCULATOR WEB APP </title>
    <link rel="stylesheet" type="text/css" href="style.css">

        
    </style>
</head>

<body>


        <h1>TAXXY: A TAX CALCULATOR WEB APP</h1>
        <form method="post">

            <center> <img src="https://bizone.files.wordpress.com/2018/07/train21.png" ; width="450" height="250" ; border="5" id="img"> </center>

            <p>Salary:
                <input type="text" id="salary" name="salary" size="20">
            </p>

            <p>Type:
                <input type="Radio" id="bi-monthly" name="type" value="bi-Monthly">
                <label for="bi-monthly">Bi-Monthly</label>
                <input type="Radio" id="monthly" name="type" value="monthly">
                <label for="monthly">Monthly</label>
            </p>
            <div class="btn-layer">
            <input type="submit" value="Compute" name="submit">
            </div>
            


        </form>
        </table>
</div>

</body>

</html>
   