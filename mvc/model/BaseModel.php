<?php

class BaseModel{

    public function all()
    {
        return "Sacando todos los ".get_called_class()."s <br/>";
    }
}