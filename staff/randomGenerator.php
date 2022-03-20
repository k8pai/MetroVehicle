<?php 
    session_start();
    include('../dbcon.php');
    $db=new dbcon;

    $stationName=$_POST['stationName'];
    $transMode=$_POST['transMode'];


    $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function randomName() {
    $firstname = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
    );

    $lastname = array(
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );


    $name = $firstname[rand ( 0 , count($firstname) -1)];
    $name .= ' ';
    $name .= $lastname[rand ( 0 , count($lastname) -1)];

    return $name;
    }

    function randomCarName() {

    $carname = array(
        'Maruti Suzuki Dzire',
        'Hyundai Santro',
        'Mahindra Marazzo',
        'Toyota Innova',
        'Maruti Suzuki Wagon R',
        'Maruti Suzuki Ertiga',
        'Honda Amaze',
        'Maruti Suzuki Swift',
    );

    $name = $carname[rand ( 0 , count($carname) -1)];

    return $name;
    }

?>
<br><br>
<?php 
$rideName=randomCarName();
$rideNumber="KL ".mt_rand(01,79)." ".substr(str_shuffle($permitted_chars), 0, 2)." ".mt_rand(0000,9999);
$driverName=randomName();
$driverNumber="9".mt_rand(1000,9999)." ".mt_rand(10000,99999);
$availability="available";
$rideAutoName="Maruti alto";
echo $rideName;
echo $rideNumber;
echo $driverName;
echo $driverNumber;
echo $availability;

$insquery="INSERT INTO `driverdetails`(`sName`, `rideName`, `rideNumber`, `transMode`, `driverName`, `driverNumber`, `availbility`) VALUES ('$stationName','$rideName','$rideNumber','$transMode','$driverName','$driverNumber','$availability')";
$row=$db->insertQuery($insquery);


echo"<script>window.location='insertDrivers.php';</script>";
?>

