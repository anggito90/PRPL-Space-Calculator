<!-- Anggito Setiawan Ardiansyah
PRPL 2021 | Assignment 12
Space Calculator with SOLID Principle -->

<?php
//define basic shape
interface Shape{
    public function area();
    public function perimeter();
}

//extend basic shape to allow 3d shapes for ball
interface Shape3D extends Shape{
    public function volume();
}

//implement basic shape as a rectangle
class Rectangle implements Shape{
    private $width, $height;
        
        //constructor
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
        
        
    public function area(){
        return $this->width * $this->height;
    }

    public function perimeter(){
        return 2 *($this->width + $this->height);
    }
}

//implement basic shape as a circle
class Circle implements Shape{
    private $radius;
        
        //constructor
    public function __construct($radius){
        $this->radius = $radius;
    }

        
    public function area(){
        return M_PI * pow($this->radius, 2);
    }

    public function perimeter(){
        return 2 * M_PI * $this->radius;
    }
}

//implement 3d shape as a ball
class Ball implements Shape3D{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area(){     
                return 4 * M_PI * pow($this->radius, 2);
        }
    public function perimeter(){        
                return 2 * M_PI * $this->radius;
        }
    public function volume(){   
                return (4/3 * M_PI) * pow($this->radius, 3);
    }
}

//implement 3d shape as a cone
class Cone implements Shape3D{
    private $radius, $height;

    public function __construct($radius, $height){
        $this->radius = $radius;
                $this->height = $height;
    }
    public function area(){     
                $r = $this->radius;
                $h = $this->height;
                M_PI * $r * ($r + sqrt(($h*$h)+($r*$r)));
        }
    public function perimeter(){         
                return 2 * M_PI * $this->radius;
        }
    public function volume(){    
                return (M_PI  * pow($this->radius, 2) * $this->height) / 3;
    }
}

//implement 3d shape as a cube
class Cube implements Shape3D{
    private $side;

    public function __construct($side){
        $this->side = $side;
    }
    public function area(){     
                return 6 * pow($this->side, 2);
        }
    public function perimeter(){
                return  12 * $this->side;
        }
    public function volume(){
                return pow($this->side, 3);
    }
}

//declaring the objects
$rec = new Rectangle(4, 8);
$circle = new Circle(3);
$cube = new Cube(2);
$cone = new Cone(4, 8);
$ball = new Ball(10);

//creating the array of all types
$shapes =  array($rec, $circle, $cube, $cone, $ball);


// calling the function
echo 'The circumference of the circle is: ' . $shapes[1]->perimeter() .'<br />';
echo '<br>';
echo 'The volume of the cube is: ' . $shapes[2]->volume() .'<br />';
echo '<br>';
echo 'The volume of the cone is: ' . $shapes[3]->volume() .'<br />';
echo '<br>';
echo 'The area of ​​the rectangle is: ' . $shapes[0]->area() .'<br />';
echo '<br>';
echo 'The volume of the ball is: ' . $shapes[4]->volume() .'<br />';
?>