<?php


class Cylinder extends Circle
{
    protected $height;

    public function __contruct($height){
        $this->height = $height;
    }

    function thetich(){
        return $this->area() * $this->area() * $this->height;
    }
    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

}