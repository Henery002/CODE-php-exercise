<?php 
    // 
    for($xx=0;$xx<=1000;++$xx) { 
        $i = 0; 

        //a: 
        $z = microtime(1); 
        while($i <= 10000) { 
             //print "xx"; 
             ++$i; 
        } 
        $q = microtime(1); 

        $i = 0; 

        $$z = microtime(1); 
        a: 
             if ( $i >= 10000 ) goto z; 
             
             ++$i; goto a; 
        z: 
        $$q = microtime(1); 
        ($t = $q - $z) && ( $$t = $$q - $$z ) &&  $p = ( ($t / $$t) * 100 ); 
        //print "\r\n" . ($t = $q - $z) . " <---> " . ( $$t = $$q - $$z ) . " ~ " . $p; 
        //goto a; 
        //print "\r\n"; 
    } 
    print "Average: " . $p . "\r\n"; 
?> 
 
<?PHP // Code originally written by (tweston AT coldsteelstudios DOT com) on 06-OCT-2010 
    $start = microtime(true); 
    $i = 0; 
    StartOfLoop: 
    ++$i; 
    if($i < 10000000) goto StartOfLoop; 
    $start = microtime(true) - $start; 

    $$start = microtime(true); 
    $i = 0; 
    while($i < 10000000){ 
        ++$i; 
    } 
    $$start = microtime(true) - $$start; 

    print "\r\n"; 
    print ( ( $$start / $start ) * 100 ); 
?> 