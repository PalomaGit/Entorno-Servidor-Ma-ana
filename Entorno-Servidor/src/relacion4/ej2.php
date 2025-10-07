<?php

function nombre(string $name, string|null $surname): void
 {
    if ($surname === null) {
        print_r($name);
    } else {
        print_r("$surname, $name");
    }
};

print_r(nombre("Paloma", null));