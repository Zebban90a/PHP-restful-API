<?php require_once('../data.php') ?>
<?php require_once('../functions.php'); ?>

<?php

$show = $_GET['show'] ?? null;
$category = $_GET['category'] ?? null;


$result = $arr;

try{
    if(isset($category)){
        $result = filterCategory($result, $category);
    }
    
    if(isset($show)){
        $result = getRandom($result, $show);
    }
    if(!isset($category) && !isset($show)){
        throw new Exception ('Ange category eller show');
    }
    $json = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo $json;
} catch (Exception $e) {
    $obj -> Error = $e->getMessage();
    $json = json_encode($obj, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo $json;
}

?>
