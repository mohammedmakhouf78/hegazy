<?php

class MainShapeFactory
{
    public static function getShape(string $shape, string $type)
    {
        if($type == "3d")
        {
            return ShapeFactory3d::getShape($shape);
        }
        else if($type == "2d")
        {
            return ShapeFactory::getShape($shape);
        }
    }
}