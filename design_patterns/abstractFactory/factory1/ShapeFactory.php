<?php

class ShapeFactory
{
    public static function getShape(string $shape)
    {
        if($shape == "circle")
        {
            return new Circle([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
        else if($shape == "square")
        {
            return new Square([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
        else if($shape == "rectangle")
        {
            return new Rectangle([
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
                'name' => 'ahmed',
            ]);
        }
    }
}