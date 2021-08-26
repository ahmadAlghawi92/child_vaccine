<!DOCTYPE html>
<html>
<body>
<!--Name = ahmad nasser alghawi
num=201720390-->
<?php
class books {
    public $title;
    public $id;
    public $author;
    public $ownership = "Ajloun National University";
    public $publisher;
    public $year_of_publication;
    public $location;
    public $borrowed = false;


    public function set_title($title){
        $this->title =$title;
    }
    public function set_id($id){
        $this->id=$id;
    }
    public function set_author($author){
        $this->author=$author;
    }
    public function set_ownership($ownership){
        $this->ownership=$ownership;
    }
    public function set_publisher($publisher){
        $this->publisher=$publisher;
    }
    public function set_year_of_publication($year_of_publication){
        $this->year_of_publication=$year_of_publication;
    }
    public function set_location($location){
        $this->location=$location;
    }
    public function set_borrowed($borrowed){
        $this->borrowed=$borrowed;
    }



    public function get_book() {
        echo "<div    style=' width: 90%;
             position: absolute;
            top: 10%;
            right: 50%;
            transform: translate(50%,30%);
            text-align: center;
            border: 1px solid #fff;
'>"."<h1  >" . "ID => ". $this->id . "</h1>" ."<br>" . "<h1  >" . "Title =>"
           .$this->title. "</h1>" ."<br>"  ."<h1 >" ."author=>". $this->author . "</h1>" ."<br>" ."<h1 >" ."Ownership=>".  $this->ownership .
            "<h1 >" . "Publisher=>". $this->publisher. "</h1>" ."<br>"
            ."<h1 >" ."Year of publication =>".  $this->year_of_publication . "</h1>" ."<br>" ."<h1 >" ."Location =>". $this->location . "</h1>" ."<br>"."<h1 >" ."borrowed =>".   $this->borrowed  . "</h1>" ."<br>" . "</div>" ;

    }
}

$bookNumOne = new books;

 $bookNumOne->set_id(1);
$bookNumOne->set_title('Do Androids Dream of Electric Sheep');
$bookNumOne->set_author('ahmad alghawi');
$bookNumOne->set_publisher('laith');
$bookNumOne->set_year_of_publication(2020);
$bookNumOne->set_location('irbid');
$bookNumOne->set_borrowed(true);

 $bookNumOne->get_book();

?>

</body>
</html>
