<?php

// $arr = ['Anar', 'Manaf', 'Ilham', 'Gülarə'];

// function filter($item)
// {
//     if ($item == "Gülarə") {
//         return $item . ' Cəfərova';
//     }
//     return $item . ' Cəfərov';
// }


// $map = array_map('filter', $arr);

// print_r($map);


/////////////////////////////////////////////////////////////////////////

// $arr = ['Anar', 'Manaf', 'Ilham', 'Gülarə'];


// $family = ['Cəfərova', 'Cəfərov'];

// $map = array_map(function ($item) use ($family){

//     global $family;

//     if ($item == "Gülarə") {
//         return $item . ' ' . $family[0];
//     }
//     return $item . ' ' . $family[1];
// }, $arr);

// print_r($map);

/////////////////////////////////////////////////////////////////////////

// $sum = function ($a, $b) {
//     return $a + $b;
// };


// $test = function ($a, $b) use ($sum) {
//     return $sum($a, $b);
// };


// echo $test(5, 6);


/////////////////////////////////////////////////////////////////////////


// $arr = ['a' , 'n'];

// $a = 'Anar';

// foreach(str_split($a) as $i){
//     if(in_array($i , $arr)){
//         echo 'var';

//         break;
//     }
// }


/////////////////////////////////////////////////////////////////////////



// function own_array_reverse(array $array)
// {

//     $result = [];


//     foreach ($array as $arr) {

//         $result[] = end($array);
//         array_pop($array);
//     }

//     return $result;
// }



// $arr = [1, 2, 3, 4, 5, 6];

// print_r(own_array_reverse($arr));


/////////////////////////////////////////////////////////////////////////


// function own_end(array $array)
// {
//     $i = 0;
//     foreach ($array as $arr) {
//         $i++;
//         if ($i == count($array)) {
//             return $arr;
//             die();
//         }
//     }
// }


// $arr = [1, 2, 3, 4, 5, 6];


// echo own_end($arr);


/////////////////////////////////////////////////////////////////////////


// function own_count(array $array)
// {
//     $i = 0;
//     foreach($array as $arr)
//     {
//         $i++;
//     }

//     return $i;
// }

// $arr = [1, 2, 3, 4, 5, 6];


// echo own_count($arr);


/////////////////////////////////////////////////////////////////////////



// function own_array_pop(array $array)
// {

//     $result = [];

//     $i = 0;

//     foreach ($array as $arr) {
//         $i++;

//         if($i == count($array)){
//             break;
//         }
//         $result[] = $arr;
//     }

//     return $result;
// }


// $arr = [1, 2, 3, 4, 5, 6];



// print_r(own_array_pop($arr));



/////////////////////////////////////////////////////////////////////////


// function own_array_flip(array $array)
// {
//     $result = [];

//     foreach ($array as $key => $val) {
//         if(!is_array($val))
//         {
//             $result["$val"] = $key;
//         }
//     }

//     return $result;
// }


// print_r(own_array_flip($arr));


/////////////////////////////////////////////////////////////////////////


// function own_array_sum(array $array)
// {

//     $i = 0;
//     foreach ($array as $arr) {
//         if (!is_array($arr)) {
//             $i += $arr;
//         }
//     }
//     return $i;
// }



// $arrs = [1, 2, 3, 4];

// echo own_array_sum($arrs);


/////////////////////////////////////////////////////////////////////////


// function own_array_unique(array $array)
// {
//     $result = [];

//     foreach ($array as $item) {
//         if(!is_array($item))
//         {
//             if(in_array($item , $result))
//             {
//                 continue;
//             }
//             $result[] = $item;
//         }
//     }

//     return $result;
// }



// $arrs = [1, 2, 3, 4 , 10 , -10 , -10 , 1 , 'a'=>['wew' , 'wewd']];

// print_r(own_array_unique($arrs));


/////////////////////////////////////////////////////////////////////////



// function own_array_count_values(array $array)
// {
//     $result = [];
//     foreach ($array as $item) {
//         if (!is_array($item)) {
//             if (array_key_exists($item, $result)) {
//                 $result["$item"]++;
//             } else {
//                 $result["$item"] = 1;
//             }
//         }
//     }

//     return $result;
// }


// print_r(own_array_count_values($arr));


/////////////////////////////////////////////////////////////////////////


// function own_array_search(mixed $item, array $array)
// {

//     foreach ($array as $key => $arr) {
        // $arr = strtolower($arr);
        // $item = strtolower($item);

//         if ($arr == $item) {
//             return $key;
//         }

//         if (is_array($arr)) {
//             echo own_array_search($item, $arr);
//         }
//     }

//     return false;
// }


// echo own_array_search(item: 'a', array: $arr);


/////////////////////////////////////////////////////////////////////////


// function own_in_array($item, $array)
// {
//     foreach ($array as $val) {
        //    if(is_string($val)){
        //         $val = strtolower($val);
        //    }

        //    if(is_string($val)){
//         $item = strtolower($item);
        // }

//         if ($item == $val) {
//             return true;
//             exit;
//         }

//         if (is_array($val)) {
//             echo own_in_array($item, $val);
//         }
//     }

//     return false;
// }


// echo own_in_array('Anar', $arr);


/////////////////////////////////////////////////////////////////////////


// function own_array_search($item, array $array)
// {

//     foreach ($array as $key => $arr) {
//         if (is_string($item)) {
//             $item = strtolower($item);
//         }

//         if (is_string($arr)) {
//             $arr  = strtolower($arr);
//         }

//         if ($arr == $item) {
//             return $key;
//             exit;
//         }

//         if (is_array($arr)) {
//             echo own_array_search($item, $arr);
//         }
//     }

//     return false;
// }


// echo own_array_search('D', $arr);


/////////////////////////////////////////////////////////////////////////


// $a = [1, 2, 3, 4, 5, 6];
// $b = [10, 11, 12, 'a' => ['c', 'd']];

// function own_array_merge(array $array1, array $array2)
// {

//     foreach ($array2 as $key => $arr) {
//         if (is_array($arr)) {
//             $array1["$key"] = $arr;
//         } else {
//             $array1[] = $arr;
//         }
//     }
//     return $array1;
// }


/////////////////////////////////////////////////////////////////////////


// $a = [1, 2, 3, 4, 5, 6];
// $b = [10, 11, 12, 'a' => ['c', 'd']];

// function own_array_push(array $array , ...$item)
// {

//     foreach($item as $val)
//     {
//         $array[] = $val;
//     }

//     return $array;

// }

// print_r(own_array_push($a , 'ada' , 'dwdwdw' , 'fefrefer'));


/////////////////////////////////////////////////////////////////////////


// $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];


// function own_array_unshift(array $array)
// {
//     $result = [];

//     $i = 1;
//     $arrC =  func_num_args(); // 3
//     $count = count($array);
//     $arr = func_get_args();
//     $sum = $count + $arrC;
//     $b = 0;

//     for ($a = 0; $a < $sum - 1; $a++) {
//         if ($i < $arrC) {
//             $result[] = $arr[$i];
//             $i += 1;
//         } else {
//             $result[] = $array[$b++];
//         }
//     }

//     return $result;
// }


// print_r(own_array_unshift($a, 'bir', 'iki', 'uc', 'dord'));


/////////////////////////////////////////////////////////////////////////
