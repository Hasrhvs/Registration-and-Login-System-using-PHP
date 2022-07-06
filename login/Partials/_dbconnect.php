<?php

$conn = mysqli_connect("localhost", "root", "", "user");
if (!$conn) {
    die ("Error".mysqli_connect_error());
}
// else {
//     echo "Success";
// }

?>