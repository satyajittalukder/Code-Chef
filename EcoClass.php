<?php 
fscanf(STDIN, "%d",$t);
while($t--){
fscanf(STDIN, "%d",$n);
$count=0;
$s = explode(" ",trim(fgets(STDIN)));
$s = explode(" ",trim(fgets(STDIN)));
for ($i=0; $i < $n; $i++) { 
    if($s[$i] ==$d[$i]){
        $count++;
    }
}
print $count."\n";
}
