

<?php

class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;


    // Method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Instance Object
$persegi_panjang1 = new PersegiPanjang(10,5);
echo "Luas Persegi Panjang =" . $persegi_panjang1->getLuas();

<?php

class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;


    // Method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Instance Object
$persegi_panjang1 = new PersegiPanjang(10,5);
echo "Luas Persegi Panjang =" . $persegi_panjang1->getLuas();
<?php

class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;


    // Method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Instance Object
$persegi_panjang1 = new PersegiPanjang(10,5);
echo "Luas Persegi Panjang =" . $persegi_panjang1->getLuas();
>>>>>>> f216185dd3c1d907508fa382ffce0b747da71452
echo "<br>Kelling Persegi Panjang =" . $persegi_panjang1->getKeliling();