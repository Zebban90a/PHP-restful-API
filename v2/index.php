<?php require_once('../data.php') ?>
<?php require_once('../functions.php'); ?>

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");
header("Content-Type: application/json; charset=UTF-8");

$show = $_GET['show'] ?? false;
$category = $_GET['category'] ?? false;


$result = $arr;
$errors = array();

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
    //$obj -> Error = $e->getMessage();
    array_push($errors, ['fel' => $e->getMessage()]);
}

if(!empty($errors)) {
    $json = json_encode($errors, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo $json;
}

?>
