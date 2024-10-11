<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function ottioniMedia($lista){
            $somma=0;
            for ($i=0; $i<count($lista);$i++){
                $somma+=$lista[$i];
            }
            return $somma/count($lista);
        }

        function stampaStudente($nome, $cognome, $voti){
            $stampa="<ul><li>nome : $nome</li><li>cognome : $cognome</li><li>ListaVoti : <ol>";
            for($i=0;$i<count($voti);$i++){
                $stampa=$stampa."<li>{$voti[$i]}</li>";
            }
            $stampa=$stampa."</ol></li></ul>";
            return $stampa;
        }
        
        $studente1=array("nome"=>"alessio", "cognome"=>"rossi", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));
        $studente2=array("nome"=>"mario", "cognome"=>"pratesi", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));
        $studente3=array("nome"=>"lorenzo", "cognome"=>"mancini", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));

        $studenti= array($studente1, $studente2, $studente3);
        $stampa="";
        for($i=0;$i<count($studenti);$i++){
            $stampa=$stampa."<h2>{$studenti[$i]['nome']} {$studenti[$i]['cognome']}</h2>".
            stampaStudente($studenti[$i]['nome'],$studenti[$i]['cognome'],$studenti[$i]['voti']);
        }


        


        
        echo $stampa;
    ?>
</body>
</html>