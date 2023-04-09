<?php
    try {
        echo ".php"; 
    } catch (DivisionByZeroError $e) {
        echo "Oops I divided by zero!";
    } catch (Exception $e) { //Throwable
        echo $e->getMessage();
    } finally {
        echo "...done!";
    }
?>

