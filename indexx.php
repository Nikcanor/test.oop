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
 class Autobus extends Actiune{
    private $autobus = 'Autobus';

    private $oprire = null;
    private $max = 50;
    public function __construct($oprire){
        $this->oprire = $oprire;
    }

    public function persoane(){

    }
    public function oprire(){

    }

    public function move($distanta){
        return $this->autobus . ' ' . $distanta;
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
<?
echo 'buss';

$buss = new Autobus();
echo $buss->move(4);