<?php
$a= "2575747899975221";

function lacznie($a)
    {
        $suma=0;

        for ($i= 0; $i< strlen($a); $i++) 
        {
            $suma+=$a[$i];
        }
        return $suma;
    }

$b=lacznie($a);
$c=strval($b);
while($b>=10)
{
    echo $b,"<br>";
    $b=lacznie($c);
    $c=strval($b);
}
echo $b;
