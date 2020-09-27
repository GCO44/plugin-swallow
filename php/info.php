<?php

//var_dump(ini_get_all());
//print_r(ini_get_all());

try
{
//custom configuration
    $obj = ini_get_all();
    echo json_encode(array(
        'upload_max_filesize' => $obj['upload_max_filesize']['global_value']*1000000,
        'max_file_uploads' => $obj['max_file_uploads']['global_value']*1,        
        'post_max_size' => $obj['post_max_size']['global_value']*1000000,
        'tag_swallow' => time()
    ));
} catch (Exception $e) {
//basic configuration
    echo json_encode(array(
        'upload_max_filesize' => '2000000',
        'max_file_uploads' => '20',        
        'post_max_size' => '8000000',
        'tag_swallow' => time()
    ));
}


?>