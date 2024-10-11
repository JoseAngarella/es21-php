<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        function ottioniMedia($lista){
            $somma=0;
            for ($i=0; $i<count($lista);$i++){
                $somma+=$lista[$i];
            }
            return  number_format(($somma/count($lista)),2) ;
        }
        function ottieniMax($lista){
            $max=$lista[0];
            for($i=1;$i<count($lista);$i++){
                if($lista[$i]>$max){
                    $max=$lista[$i];
                }
            }
            return $max;
        }
        function stampaStudente($nome, $cognome, $voti){
            $stampa="<ul><li>nome : $nome</li><li>cognome : $cognome</li><li>ListaVoti : <ol>";
            for($i=0;$i<count($voti);$i++){
                $stampa=$stampa."<li>{$voti[$i]}</li>";
            }
            $stampa=$stampa."</ol></li></ul>";
            return $stampa;
        }
        function stampaTabellaStudenti($studenti){
            $stampa="<table style='border-collapse:collapse'><tr><th>Nome Studente</th><th>Cognome Studente</th><th>Media Voti</th><th>Voto Massimo</th></tr>";
            foreach($studenti as $studente){
                $stampa=$stampa."<tr><td>{$studente['nome']}</td><td>{$studente['nome']}</td><td>".
                ottioniMedia($studente["voti"])."</td><td>".ottieniMax($studente["voti"])."</td></tr>";
                
            }
            $stampa=$stampa."</table>";
            return $stampa;
        }

        

        $studente1=array("nome"=>"Alessio", "cognome"=>"Rossi", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));
        $studente2=array("nome"=>"Mario", "cognome"=>"Pratesi", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));
        $studente3=array("nome"=>"Lorenzo", "cognome"=>"Mancini", "voti"=> array(rand(2,10),rand(2,10),rand(2,10)));
        $studenti= array($studente1, $studente2, $studente3);
        $stampa="";
        for($i=0;$i<count($studenti);$i++){
            $stampa=$stampa."<h2>{$studenti[$i]['nome']} {$studenti[$i]['cognome']}</h2>".
            stampaStudente($studenti[$i]['nome'],$studenti[$i]['cognome'],$studenti[$i]['voti']);
        }
        $stampa=$stampa."<br>".stampaTabellaStudenti($studenti);
        echo $stampa;
    ?>
</body>
</html>