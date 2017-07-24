<?php

function checkNum($number){
    if($number>1){
        throw new Exception("Value must be 1 or below");
    }
    return true;
  }

  try{
    checkNum(2);
    // echo 1;
  }catch(Exception $e){
    echo "Message:".$e->getMessage()."<br>".$e->getCode()."<br>".$e->getFile()."<br>".$e->getLine();
    
  }

 ?>