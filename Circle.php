<?php


class Circle
{
    protected $radius;
    protected $color;

    public function __construct($radius, $color){
        $this->radius = $radius;
        $this->color = $color;
    }
    function area(){
        echo $this->radius * $this->radius * 3.14 . ' mau ' . $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}