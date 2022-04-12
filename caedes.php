<?php
    // Calling caesar function and sending the $argv[1] and $argv[2] as parameters.
    echo caesar($argv[1], $argv[2]);
    function caesar($str, $n)   {
        // Getting the decimal equivalent in the ASCII table of the character with ord function.
        $ret = "";
        for($i = 0, $l = strlen($str); $i < $l; ++$i)
        {
            $c = ord($str[$i]);
            // Checking if the character that we enter is between ASCII decimal 97 and 123 or 65 and 91.
            // 97 and 123 are the lowercase letters and 65 and 91 are the uppercase letters.
            if (97 <= $c && $c < 123) {
                $ret.= chr(($c + $n + 7) % 26 + 97);
            } else if (65 <= $c && $c < 91) {
                $ret.= chr(($c + $n + 13) % 26 + 65);
            } else {
                $ret.= $str[$i];
            }

        }
        // In the conditions, shifting happens and we sum it up with $ret variable.
        echo "Cipher Output: ";
        return $ret.PHP_EOL; //  After the loop, encrypted text returns to us.
    }
    if (CRYPT_STD_DES == 1) {
        echo 'DES Output: '
. crypt($argv[1], $argv[3]) . "\n"; // Encrypting the $argv[1] and $argv[3] via crypt function of PHP.
    }
?>
