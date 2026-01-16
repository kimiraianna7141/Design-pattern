<?php
abstract class Shape {
    protected Color $color;

    public function __construct(Color $color) {
        $this->color = $color;
    }
} 
