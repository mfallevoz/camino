<?php

require_once 'db.php';

function getNames($conn) {
    $sql = "SELECT title, id FROM `items` WHERE toshow = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) { 
        while ($row=mysqli_fetch_assoc($result)) { 
            echo "<div class='item item".$row["id"]."'>" . $row['title'] . "</div>";
        }
    }
}

function getName($conn, $id) {
    $sql = "SELECT title FROM `items` WHERE id=".$id;
    $result = mysqli_query($conn, $sql);
    $i = 1;

    if (mysqli_num_rows($result)>0) { 
        while ($row=mysqli_fetch_assoc($result)) { 
            echo "<h2>" . $row['title'] . "</h2>";
            $i++;
        }
    }
}

function update($conn) {
    
    if (isset($_POST['submit'])) {
        if ($_POST['title1'] != "") {
            $sql = "UPDATE items SET title='" . $_POST['title1'] . "' WHERE id=1";
            $result = mysqli_query($conn, $sql);
        }

        if ($_POST['title2'] != "") {
            $sql = "UPDATE items SET title='" . $_POST['title2'] . "' WHERE id=2";
            $result = mysqli_query($conn, $sql);
        }

        if ($_POST['title3'] != "") {
            $sql = "UPDATE items SET title='" . $_POST['title3'] . "' WHERE id=3";
            $result = mysqli_query($conn, $sql);
        }

        header("Location: dashboard.php");
    }

    if (isset($_POST['state1'])) {
        $sql = "UPDATE items SET toshow=1 WHERE id=1";
        $result = mysqli_query($conn, $sql);
        header("Location: dashboard.php");
    }

    else if (!isset($_POST['state1']) && isset($_POST['title1'])) {
        $sql = "UPDATE items SET toshow=0 WHERE id=1";
        $result = mysqli_query($conn, $sql);
    }

    if (isset($_POST['state2'])) {
        $sql = "UPDATE items SET toshow=1 WHERE id=2";
        $result = mysqli_query($conn, $sql);
        header("Location: dashboard.php");
    }

    else if (!isset($_POST['state2']) && isset($_POST['title2'])) {
        $sql = "UPDATE items SET toshow=0 WHERE id=2";
        $result = mysqli_query($conn, $sql);
    }

    if (isset($_POST['state3'])) {
        $sql = "UPDATE items SET toshow=1 WHERE id=3";
        $result = mysqli_query($conn, $sql);
        header("Location: dashboard.php");
    }

    else if (!isset($_POST['state3']) && isset($_POST['title3'])) {
        $sql = "UPDATE items SET toshow=0 WHERE id=3";
        $result = mysqli_query($conn, $sql);
    }
}

function checkButton($conn, $id) {
    $sql = "SELECT toshow FROM `items` WHERE id = ".$id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['toshow'] == 1) {
        echo "<label class='switch'>
                <input type='checkbox' name='state$id' id='state$id' checked/>
                <span class='slider round'></span>
              </label>";
    }

    else {
        echo "<label class='switch'>
                <input type='checkbox' name='state$id' id='state$id'/>
                <span class='slider round'></span>
              </label>";
    }
}

?>