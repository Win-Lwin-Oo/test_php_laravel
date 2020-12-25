<?php

// interface
// အမျိူးအစားမတူပေမယ့် အလုပ်လုပ်ပုံတူတဲ့
// Object တွေကို ဖလှယ်အသုံးပြ ုနိုင်ဖို့ Interface ကို အသုံးပြ ုရ

interface Animal
{
    public function run();
}

class Fox implements Animal
{
    public function run()
    {
        return "This fox is running.";
    }
}

class Wolf implements Animal
{
    public function run()
    {
        return "This wolf is running.";
    }
}

function app(Animal $Animal)
{
    # code...
    echo $Animal->run();
}

app(new Fox);
app(new Wolf);
