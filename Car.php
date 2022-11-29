<?php

class Car{

    public $name;
    public $color;
    const MESSAGE = 'NA YOU KNOW';

  function __construct($name, $color)
  {
    $this->name =$name;
    $this->color =$color;
  }

   function get_name(){
    return $this->name;
  }

  private function get_color(){
    return $this->color;
  }
  protected function show_color()
  {
     return $this ->get_color();
  }
}

class Benz extends Car {
  public $model;
  function __construction($name, $color, $model)
  {
    $this->name = $name;
    $this->color = $color;
    $this->model = $model;
  }
public function print_color()
{
  return $this->show_color();
}
public function get_model()
{
  return $this->model;
}
}
echo Benz:: MESSAGE;
$Benz = new Car('Mercedes', 'Red', '2022');

// echo $benz->print_color();
// $benz->model = '2011';
// echo $benz->get_model();

// $benz = new Car('Mercedes Benz', 'Cream');
// echo 'The name of my favorite car is:'.$benz->get_name() . 'and I love it to be in' . $benz->show_color(). ' color';

?>