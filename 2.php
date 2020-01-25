<?php 

function usernameValidity($username){
    $regex = "/^[a-z][a-z\d\._]{8,12}$/";
    if(preg_match($regex, $username)){
        echo "TRUE";
    }else{
        echo "FALSE";
    }
}

usernameValidity("j0hn5m.th");