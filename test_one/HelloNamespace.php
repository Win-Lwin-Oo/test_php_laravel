<?php

// php is not allow same function and class name even different folder
// eg: add functin in both class A and B and then use 
// include(A.php)
// include(B.php)
// echo add(1, 2) // this can be error
// **** use namespace to fixed this

// include("A.php");
// include("B.php");

// echo A\add(1,3);
// echo B\add(3,5);

// OR

namespace A;

include ('A.php');
include ('B.php');

echo add(5,7);
echo \B\add(2,3);

// can used name space by
// namespace Libs\A;
// namespace Libs\Helper\B;
// not used file name for namespace name
// used CapitalCase for namespace name even folder or file name is Capital or Small