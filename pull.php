<?php
function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "<br>");
    }
}
// Print the exec output inside of a pre element
print("<pre>" . execPrint("git pull https://satyabss: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@github.com/satyabss/jquery_public.git main") . "</pre>");
?> 