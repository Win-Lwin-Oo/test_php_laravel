<?php
// trait
// ထပ်ခါထပ်ခါ ပြန်ရေးရလေ ့ရှိတဲ့  code တွေကို ရေးစရာမလိုတေ ာ့ပဲ ခေါ်သုံးနိုင်စေတဲ့ ရေးနည်း

trait BasicCalculation
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

class Math
{
    use BasicCalculation;

    public $PI = 3.14;

    public function calculateArea($r)
    {
        return $this->PI * $r * $r;
    }
}

$math = new Math;
echo $math->add(1, 2);
