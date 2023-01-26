<?php

class ShapeFactory3d
{
    public static function getShape(string $shape)
    {
        if($shape == "circle3d")
        {
            return new Circle([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
        else if($shape == "square3d")
        {
            return new Square3d([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
        else if($shape == "rectangle3d")
        {
            return new Rectangle3d([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
    }
}