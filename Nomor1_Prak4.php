<!-- Nama: Widya Sari Wibowo -->
<!-- NIM: 21091397070 -->
<!-- Kelas: 2021 B -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Nomor1_Prak4.css"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No.1</h2>


<?php

    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('Widya', 24, 21091397070); 
    $dosen2 = new Dosen('Sari', 27, 21091397177);
    $dosen3 = new Dosen('Rina', 44, 21091397280);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';

?>

</div>
</body>
</html>