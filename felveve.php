<meta charset="UTF-8">
<html><!--Fejlesztői napló, március 28. 17:49. A fejlesztés zavartalan. A két tulajdonos mellett egy meg nem nevezett hölgy is.. segíti munkánkkat. A hölgy sír, mert itt vagyok. Azt a konklúziót vontam le, hogy a programozó és egy nő nem kompatibilisek egymással, ergó.. hát.. a mindent eldöntő konklúzióm várat magára (Szándékosan ide írom a megjegyzést. A megjegyzést az utókornak szánom. Legyen itt példaként a jövő programozóinak, mikor én már nem leszek) Az utolsó szavaim ezek voltak: "Jaj de meghaltam én most."--></html>
<?php

if ($_POST['knev'] == NULL || $_POST['vnev'] == NULL || $_POST['hajszin'] == NULL)
{
    header('Location: rendeles.php?error');
}
else
{
    $gugijavan = $_POST['gugijavan'];
    $vnev = $_POST['vnev'];
    $knev = $_POST['knev'];
    $magassag;
    if ($_POST['magassag'] == NULL)
    {
        $magassag = rand(150, 200);
    }
    $suly;
    if ($_POST['suly'] == NULL)
    {
        $suly = rand(40, 80);
    }
    $hajszin = $_POST['hajszin'];
}

?>