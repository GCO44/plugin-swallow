<?php

//print_r($_FILES);
//print_r($_POST);

$target = '../'.$_POST['target'];

// Target by defaut
if(is_dir($target)){}else{mkdir($target);}

if(isset($_POST['targetTag'])){
    $personnalTarget = $_POST['targetTag'];
    if(is_dir($target.$personnalTarget)){}else{mkdir($target.$personnalTarget);}
}
    
//
$userFile = explode(',',$_POST['userFile']);

if(is_array($_FILES["swallow"]["name"])){

    for( $i = 0; $i < count( $_FILES['swallow']['name'] ); $i++ ) {

        $name = $_FILES['swallow']['name'][$i];
        $type = $_FILES['swallow']['type'][$i];
        $size = $_FILES['swallow']['size'][$i];
        $temp = $_FILES['swallow']['tmp_name'][$i];

        $pathFile = time().'_'.$name;

    //
        for( $k = 0; $k < count( $userFile); $k++ ) {
            if($userFile[$k] === $name){
                move_uploaded_file($temp,$target.$pathFile);
                $callback[] = $pathFile;
            } 
        }       

    }

    echo json_encode($callback);

}

?>