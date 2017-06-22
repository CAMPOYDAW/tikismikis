<?php
function format_tb($date){
    if($date){
        $date = explode("-", $date);
        return $date = $date[2] . '/' . $date[1] . '/' . $date[0];
    }else
    return '';

}

function format_db($date){
    if($date==null) return "sin fecha";
    $date=explode("/",$date);
    return $date=$date[2].'-'.$date[1].'-'.$date[0];
}
function showFiles($path){

    $dir = opendir($path);
    $files = array();
    while ($current = readdir($dir)){
        if( $current != "." && $current != "..") {
            if(is_dir($path.$current)) {
                showFiles($path.$current.'/');
            }
            else {
                $files[] = $current;
            }
        }
    }
    echo '<h2>'.$path.'</h2>';
    echo '<ul>';
    for($i=0; $i<count( $files ); $i++){
        echo '<li>'.$files[$i]."</li>";
    }
    echo '</ul>';
}

?>