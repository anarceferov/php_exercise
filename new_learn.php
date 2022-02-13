<?php

declare(ticks=1);

// $rt = myfunction(
//     bar_bar: 10,
//     foo_foo: 5
// );

// var_dump($rt);

// function myfunction($bar_bar, $foo_foo): int
// {
//     return $bar_bar + $foo_foo;
// }


// function myName1($b,...$a)
// {
//     print_r($a);//Array ( [0] => Bar [1] => Baz )
//     echo "<br>";
//     echo $b;//Foo

// }

//     $x = "Foo";
//     $y = "Bar";
//     $z = "Baz";
//     myName1($x,$y,$z,'test');
//     echo "<br>";


//     function myName2($b="John",...$a)
//     {
//         print_r($a);//Array ( [0] => Bar [1] => Baz )
//         echo "<br>";
//         echo $b;//Foo
//     }

//     $x = "Foo";
//     $y = "Bar";
//     $z = "Baz";
//     myName2('',$x,$y,$z);
//     echo "<br>";

// function sum(...$numbers) {
//     $acc = 0;
//     foreach ($numbers as $n) {
//         $acc += $n;
//     }
//     return $acc;
// }

// echo sum(1, 2, 3, 4).'<br>';


// function sum2(...$numbers) {
//     $acc = [];
//     foreach ($numbers as $n) {
//         $acc[] = $n;
//     }
//     return $acc;
// }

// print_r(sum2(1, 2, 3, 4));



// function add_some_extra(&$string)
// {
//     $string .= 'and something extra.';
// }
// $str = 'This is a string, ';
// add_some_extra($str);
// echo $str;    // outputs 'This is a string, and something extra.'

// $data = [
//     ["id" => 1, "name" => 'Tom'],
//     ["id" => 2, "name" => 'Fred'],
// ];
// foreach ($data as ["id" => $id, "name" => $name]) {
//     echo "id: $id, name: $name\n";
// }
// echo PHP_EOL;
// list(1 => $second, 3 => $fourth , 2=>$first) = [1, 2, 3, 4];
// echo "$second, $fourth , $first\n";




// func_num_args() gelen parametr sayini tapir
// func_get_arg()  istediyimiz indexdeki deyiri almaq ucundur.
// func_get_args() gelen deyerleri array edir


// function test()
// {
//     echo func_num_args().'<br>';

//     print_r(func_get_args()).'<br>';

//     echo func_get_arg(2);
// }

// test('a' , 'b' , 'c');




// function sum($a)
// {

//     echo $a . '<br>';

//     if ($a < 15) {
//         sum($a + 1); // recursive function 
//     }
// }

// sum(1);



// $categories = [

//     [
//         'id' => 1,
//         'parent' => 0,
//         'ad' => 'Dersler'
//     ],

//     [
//         'id' => 2,
//         'parent' => 0,
//         'ad' => 'Guncel'
//     ],

//     [
//         'id' => 3,
//         'parent' => 0,
//         'ad' => 'Blog'
//     ],

//     [
//         'id' => 4,
//         'parent' => 1,
//         'ad' => 'Php Dersleri'
//     ],

//     [
//         'id' => 5,
//         'parent' => 1,
//         'ad' => 'Css Dersleri'
//     ],

//     [
//         'id' => 6,
//         'parent' => 4,
//         'ad' => 'Function'
//     ],

//     [
//         'id' => 7,
//         'parent' => 4,
//         'ad' => 'Oop'
//     ],
// ];


// function category_list($categories , $parent = 0)
// {
//     echo '<ul>';
//     foreach($categories as $category)
//     {
//         if($category['parent'] == $parent){
//             echo '<li>'.$category['ad'];
//             echo category_list($categories , $category['id']);
//             echo '</li>';
//         }


//     }
//     echo '</ul>';

// }

// category_list($categories);

// function category_list($categories , $parent = 0)
// {
//     $html = '';
//     $html .= '<ul>';
//     foreach($categories as $category)
//     {
//         if($category['parent'] == $parent){
//             $html .= '<li>'.$category['ad'];
//             $html .= category_list($categories , $category['id']);
//             $html .= '</li>';
//         }


//     }
//     $html .= '</ul>';

//     return $html;

// }

// echo category_list($categories);



$arr = [
    'ad' => 'Anar',
    'soyad' => 'Ceferov',
    'idman' => [
        'uzmek' => 'yox',
        'qacmaq' => 'yox',
        'doyus' => [
            'boks' => 'yox',
            'cudo' => 'he'
        ]
    ],
    'a' => [
        'b' => [
            'c' => 'd',
            'f' => 'efefeferf'
        ]
    ]

];

// function find($arr, $val)
// {

//     foreach ($arr as $key => $item) {

//         if ($key == $val) {
//             return $item;
//         }

//         if (is_array($item)) {

//             $result = find($item , $val);

//             if ($result) {
//                 return $result;
//             }
//         }
//     }
//     return false;
// }


// echo find($arr, 'boks').'<br>';

// echo array_search('c', $arr);


