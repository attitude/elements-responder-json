<?php

namespace attitude\Elements;

class ResponderJSON_Element extends Singleton_Prototype implements Responder_Interface
{
    private $request = null;

    public function respond($data)
    {
        header('Content-Type: text/json');
        echo json_encode($data, JSON_PRETTY_PRINT);

        return;
    }
}
