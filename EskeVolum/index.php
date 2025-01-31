<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volum eske</title>
</head>
<body>
    <?php
    function utregningVolum($hoyde) {
        $lengde = 211 - 2 * $hoyde;
        $bredde = 297 - 2 * $hoyde;
        
        if ($lengde > 0 && $bredde > 0) {
            $volum = $hoyde * $lengde * $bredde;
            return $volum;
        } else {
            return 0;
        }
    }

    function OptimalMaks() {
        $maksVolum = 0;
        $optimalHoyde = 0;

        for ($hoyde = 1; $hoyde <= intdiv(211, 2); $hoyde++) {
            $volum = utregningVolum($hoyde);
            if ($volum > $maksVolum) {
                $maksVolum = $volum;
                $optimalHoyde = $hoyde;
            }
        }

        return array($maksVolum, $optimalHoyde);
    }

    list($maksVolum, $optimalHoyde) = OptimalMaks();
    echo "Optimal høyde er: ", $optimalHoyde, " mm<br>";
    echo "Maks volum er: ", $maksVolum / 1000000, " liter";
    ?>
</body>
</html>