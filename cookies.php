<?php

setcookie("lgpd", "aceito");
setcookie("lgpd", null);

echo "<pre>";
print_r($_COOKIE);