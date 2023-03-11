<?php

class MyException extends Exception{}
class NetworkException extends Exception{}

function textException()
{
    throw new NetworkException();
}


try {
    textException();
} catch (MyException $e) {
    echo "MyException Caught";
} catch (NetworkException $e) {
    echo "NetworkException Caught";
} catch (Exception $e) {
    echo "Exception Caught";
} finally{
    echo " Cleared Up";
}