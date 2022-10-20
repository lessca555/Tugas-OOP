<?php
class BMI {

    public $nama;
    public $berat;
    public $tinggi;

    public function __construct($input1, $input2, $input3) {
        $this->nama = $input1;
        $this->berat = $input2;
        $this->tinggi = $input3/100;
        
    }

    public function calcBMI() {
        $bmi = $this->berat / ($this->tinggi + $this->tinggi);
        
        if(!empty($this->nama && $this->berat && $this->tinggi)){
            echo "<div><h3>Hasil Perhitungan IMT</h3>";
            echo "Nama anda : " . $this->nama;
            echo "<br>";
            echo "Tinggi anda : " . $this->tinggi * 100 ;
            echo " CM<br>";
            echo "Berat anda : $this->berat" ;
            echo " KG<br>";
        }
        
        if($bmi < 17){
            $hasil = "kurus";
        }else if($bmi < 23){
            $hasil = "normal";
        }else if($bmi < 27){
            $hasil = "overweight";
        }else{
            $hasil = "obesitas";
        }

        if(!empty($bmi)){
            return "Anda " . $hasil;
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Index Massa Tubuh</h2>
<br>
  <form action="index.php" method="POST">
      <input type="text" name="nama" placeholder="masukkan nama">
      <br>
      <br>
      <input type="number" name="tinggi" min="1" placeholder="masukkan tinggi"><span> Centimeter</span>
      <br>
      <br>
      <input type="number" name="berat" min="1" placeholder="masukkan berat"><span> Kilogram</span>
      <br>
      <br>
      <button type="submit">Calculate</button>
  </form>
</body>
</html>

<?php
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];

$calc = new BMI($nama, $berat, $tinggi);
echo $calc->calcBMI();
?>