<?php
if (isset($_POST['studentname']))
    echo 'You entered
'.htmlspecialchars($_POST['studentname']).' into the
text field';
?>