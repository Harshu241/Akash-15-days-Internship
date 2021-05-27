
<?php

$d1=$_POST["d1"];
$d2=$_POST["d2"];
$d3=$_POST["d3"];
$d4=$_POST["d4"];
$d5=$_POST["d5"];
$total=$d1+$d2+$d3+$d4+$d5;
$avg=$total/5;

?>
<html>
    <form>
        <table border=1>
            <tr>
                <td>maths</td>
                <td><?php
                echo "$d1"; 
                ?> </td>
              </tr> 
              <tr>
                <td>Physics</td>
                <td><?php
                echo "$d2"; 
                ?> </td>
              </tr> 
              <tr>
                <td>Chemisrty</td>
                <td><?php
                echo "$d3"; 
                ?> </td>
              </tr> 
              <tr>
                <td>English</td>
                <td><?php
                echo "$d4"; 
                ?> </td>
              </tr> 
              <tr>
                <td>sanskrit</td>
                <td><?php
                echo "$d5"; 
                ?> </td>
              </tr> 
              <tr>
                <td>Total marks</td>
                <td><?php
                echo "$total"; 
                ?> </td>
              </tr> 
              <tr>
                <td>average</td>
                <td><?php
                echo "$avg"; 
                ?> </td>
              </tr> 
</table>
</form>
</html>




