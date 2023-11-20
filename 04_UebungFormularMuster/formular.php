<?php
print ("<table>");
foreach ($_POST as $key => $value) {
    print ("<tr><td>$key</td><td>$value</td></tr>");
}
print ("</table>");