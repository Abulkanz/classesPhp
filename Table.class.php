<?php

class Table {

    function iTabl(){
        echo "<table><tr>";
    }
    
    function iRow(){
        echo "</tr><tr>";
    }
    
    function endRow(){
        echo "</tr>";
    }
    
    function tHead($param) {
        return "<th>" . $param . "<th>";
    }

    function tContent($param) {
        return "<td>" . $param . "<td>";
    }

    
}
?>    

