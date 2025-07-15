<?php
$logins = 4;
if ($logins == 0){
    echo "You're free to login.";
}
else if ($logins == 1){
    echo "You can login two more times.";
}
else if ($logins == 2){
    echo "You have one last attempts.";
}
else if ($logins == 3){
    echo "Your account has been blocked.";
}
else {
    echo "Your account has been blocked already.";
}
?>