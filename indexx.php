<?
abstract class Actiune{

    public function move(){
        return 'merge';
    }   
    
    function rotateLeft(){
        return ' rotateLeft';
    }

    function rotateRight(){
        return ' rotateRighy';
    }

    function stop(){
        return ' stop';
    }
 }

// --------------------------------------- Massina
 class Automobil extends Actiune{
    private $masina = 'BMW';

    public function move($marsrut){
        return $this->masina . ' ' . $marsrut;
    }
 }


// --------------------------------------- Autobus
class Bus extends Actiune{ 

    private $nrpasageri = NULL;   
    private $maxpasageri = NULL;   
    private $incarcat = FALSE;   

    public function __construct($maxpasageri){
		$this->maxpasageri = $maxpasageri;
    }

    public function stop($pasageri = NULL){
        if(empty($pasageri)){
            return 'Stop ';
        }
        
        if($this->incarcat){
            return 'Busul este incarcat';
        }

        $incarcaPasageri .= '<br>' . $this->incarca($pasageri); 
        
        return $incarcaPasageri;
    }


    public function incarca($pasageri){
        if(($this->nrpasageri + $pasageri) <= $this->maxpasageri){
            $this->nrpasageri =  $this->nrpasageri + $pasageri;
            return 'Pasageri in bus: ' . $this->pasageriBus;
        }

        $pasageriRamasi = $this->maxpasageri - ($this->nrpasageri + $pasageri);
        $this->incarcat = TRUE;
        
        return 'Busul este incarcat ' . $pasageriRamasi;
    }
}

//----------------------------------------- Conditii

$bmw = new Automobil();
echo $bmw->move(8); 
echo $bmw->rotateRight();
?>
<br>
<?
echo $bmw->move(10);
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(10);
echo $bmw->rotateRight();
?>
<br>
<?
echo $bmw->move(0);
echo $bmw->stop();
?>
<?
echo $bmw->move(0); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateRight();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->rotateLeft();
?>
<br>
<?
echo $bmw->move(8); 
echo $bmw->stop();
?>
<br>
<br>
<br>
<br>
<?php
$buss = new Bus(30);
echo($buss->move(2));
    echo('<br>');

    echo($buss->rotateRight());
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->stop(10));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(10));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(2));
    echo('<br>');

    echo($buss->stop(15));
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(2));
    echo('<br>');

    echo($buss->rotateRight());
    echo('<br>');

    echo($buss->move(1));
    echo('<br>');

    echo($buss->rotateLeft());
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(3));
    echo('<br>');

    echo($buss->move(5));
    echo('<br>');

    echo($buss->stop(2));
    echo('<br>');

    echo($buss->move(10));
    echo('<br>');

    echo($buss->stop());
    echo('<br>');
?>
