<?php

    try{
        $param = $argv[1];

        if(!0 < $param  || !$param >= 100) {
            throw new Exception("Out of range");
        }
        else if(!is_numeric($param)) {
            throw new Exception("Not an integer");
        }
        for($i = 0; $i<$param; $i++){
            echo getFizzBuzz($i);
        }
    }
    catch(Exception $e){
        echo "error:". $e->getMessage()."\n";
        var_dump($e);
    }
    /**
     * fizzubuzz
     */
    function getFizzBuzz($i):string
    {
        if($i%15 ==0) return "Fizz Buzz"."\n";
        else if($i%3 == 0) return "Fizz"."\n";
        else if($i%5 == 0) return "Buzz"."\n";
        else return $i."\n"; 
    }

?>
