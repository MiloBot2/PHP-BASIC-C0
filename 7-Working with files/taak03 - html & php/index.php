<?php
    $leeftijd = 18;
    $result = -1;

    if(is_int($leeftijd))
    {
        $result = $leeftijd;
    }
?>

<html>
    <head>

    </head>
    <body>
        <div>
            <div id = "isMeerderJarig">
                <?php
                    if($result == -1)
                    {
                        echo "<h6>Je hebt geen geldige leeftijd opgegeven!</h6>";
                    }
                    else if($result < 18)
                    {
                        echo "<h6>Je bent geen 18 jaar of ouder.</h6>";
                    }
                    else
                    {
                        echo "<h6>Je bent 18 jaar of ouder.</h6>"
                    }
                ?>
            </div>
        </div>
    </body>
</html>