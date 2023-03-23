<?php
function sessionMessage(){
  if(session()->getFlashdata("message")){
    echo session()->getFlashdata("message");
  }
}
