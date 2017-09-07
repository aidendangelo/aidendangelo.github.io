<?php
    header("Content-type: text/css; charset: UTF-8");
?>


<?php
    
    $min = 1;
    $max = 5;
    
    $num = rand ($min ,$max);
    /*
    mysql_select_db("dnd", NULL);
    
    $query = "SELECT * FROM background_img WHERE id =$num LIMIT 0 , 11";
    $data = mysql_query($query);
    
    $row = mysql_fetch_array($data,MYSQL_ASSOC); 
    
    $background_img = $data['url'];
    */
    
    $bg = array('dnd_1.jpg', 'dnd_2.jpg', 'dnd_3.jpg', 'dnd_4.jpg', 'dnd_5.jpg');
    
    $i = rand(1, count($bg) - 1);
    $selectedBg = $bg[$i];
    $bg_test = 'dnd_' . $num . 'jpg';
    
    
    
?>

body {
    

    background-image: url(<?php echo "/img" . "/" . /*$bg_test*/ "{$selectedBg}" /*"$background_img"*/ ?>);
    height:1920px;
    width:1080px;
    background-repeat: no-repeat;
    background-attachment: fixed;

    margin-right:auto;
    margin-left:auto;
}