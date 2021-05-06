<?php


function getRandom ($arr, $length) {

    if($length > count($arr)) {
        throw new Exception ('Det antalet finns inte, ange ett lägre nummer');
    }

    if($length < 0) {
        throw new Exception ('Det antalet finns inte, ange ett högre nummer');
    }

    $newArr = array();

    while(!empty($arr) && $length != 0){
        $rand = rand(0, count($arr) - 1);
        $value = $arr[$rand]; 
        array_push($newArr, $value);
        array_splice($arr, $rand, 1);
        $length = $length - 1;
    } 
   
    return $newArr;
}

function filterCategory($arr, $category) {
    

    $filteredBooks = array();
    foreach($arr as $key => $book) {
        if($book['category'] == $category) {
            array_push($filteredBooks, $book);
        }
       
    }
    if(empty($filteredBooks)) {
        throw new Exception ('Kategorin finns inte');
    }
    return $filteredBooks;
}
  

?>
