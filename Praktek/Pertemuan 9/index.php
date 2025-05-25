
<?php

class Book {
    private $code_book;
    private $name;
    private $qty;
    
    public function __construct($code_book, $name, $qty) {
        $this->setCodeBook($code_book);
        $this->name = $name;
        $this->setQty($qty);
    }
    
    private function setCodeBook($code_book) {
        if (preg_match('/^[A-Z]{2}[0-9]{2}$/', $code_book)) {
            $this->code_book = $code_book;
        } else {
            echo "Error: Format kode buku tidak valid. Harus dalam format BB00 (2 huruf besar diikuti 2 angka).\n";
        }
    }
    
    private function setQty($qty) {
        if (is_int($qty) && $qty > 0) {
            $this->qty = $qty;
        } else {
            echo "Error: Jumlah buku harus berupa integer positif.\n";
        }
    }
    
    public function getCodeBook() {
        return $this->code_book;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getQty() {
        return $this->qty;
    }
}

$book1 = new Book("AB12", "PHP Programming", 5);
echo "Kode Buku: " . $book1->getCodeBook() . "\n";
echo "Nama Buku: " . $book1->getName() . "\n";
echo "Jumlah: " . $book1->getQty() . "\n";

$book2 = new Book("ab12", "Invalid Book", 3);
echo "Kode Buku: " . $book2->getCodeBook() . "\n";

$book3 = new Book("A123", "Invalid Book", 3);
echo "Kode Buku: " . $book3->getCodeBook() . "\n";

$book4 = new Book("CD34", "Another Book", -5);
echo "Jumlah: " . $book4->getQty() . "\n";

$book5 = new Book("EF56", "Zero Book", 0);
echo "Jumlah: " . $book5->getQty() . "\n";

?>
