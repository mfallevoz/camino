<?php

require_once 'db.php';

function getName($conn) {
    $sql = "SELECT title FROM `items` WHERE toshow = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) { 
        while ($row=mysqli_fetch_assoc($result)) { 
            echo "<div class='item ".$row['title']."'>" . $row['title'] . "</div>";
        }
    }
}

?>