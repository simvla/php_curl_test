<?php 
  $base_url="enter_url";  //192.168.43.138
  $PAR1="toff";
  
  function send_req($url){
    $ch = curl_init();
  
    curl_setopt($ch,CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $result=curl_exec($ch);
    curl_close($ch);
    return $result;
  }

  if(empty($_GET) /*!$_GET*/){
    $html=send_req($base_url);
    echo $html;
    //echo "<h1>Hello World!</h1>";
  }

  if(isset($_GET[$PAR1])){
    echo $_GET[$PAR1];
  }

  //var_dump($_GET);
?>