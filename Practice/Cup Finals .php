<?php

/** Cup Finals */
fscanf(STDIN, "%d", $t);
while ($t--) {
    fscanf(STDIN, "%d %d %d", $x, $y, $d);
    abs($x - $y) <= $d ? print "Yes" : print "No";
}
