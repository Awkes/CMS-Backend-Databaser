<?php
  class A {
    public $p1 = 'P1';
    protected $p2 = 'P2';
    private $p3 = 'P3';
  }
  class B extends A {
    public function whatWillHappen() {
      echo $this->p1;  // 1
      echo $this->p2;  // 2
      echo $this->p3;  // 3
    }
  }
  
  $b = new B;
  $b->whatWillHappen();

?>