<?php
namespace index;

declare(ticks=1);
error_reporting(E_ALL);

// session_start();
// setcookie('cookie' , 'test' , time()+6000);
// $_SESSION['session'] = 'test_session';

// if (isset($_POST['test'])) {
//     echo strtoupper($_POST['test']) . PHP_EOL;
// }

// echo 'http://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'] . PHP_EOL;

// echo $_SERVER['HTTP_REFERER'];

// echo $_SERVER['HTTP'] . PHP_EOL;

// print_r($_POST['option']) . PHP_EOL;

// echo $_SERVER['PHP_SELF'] . PHP_EOL;
// echo $_SERVER['GATEWAY_INTERFACE'] . PHP_EOL;
// echo $_SERVER['SERVER_ADDR'] . PHP_EOL;
// echo $_SERVER['SERVER_NAME'] . PHP_EOL;
// echo $_SERVER['SERVER_SOFTWARE'] . PHP_EOL;
// echo $_SERVER['SERVER_PROTOCOL'] . PHP_EOL;
// echo $_SERVER['REQUEST_METHOD'] . PHP_EOL;
// echo $_SERVER['REQUEST_TIME'] . PHP_EOL;
// echo $_SERVER['QUERY_STRING'] . PHP_EOL;
// echo $_SERVER['HTTP_ACCEPT'] . PHP_EOL;
// echo $_SERVER['HTTP_ACCEPT_CHARSET'] . PHP_EOL;
// echo $_SERVER['HTTP_HOST'] . PHP_EOL;
// echo $_SERVER['HTTP_REFERER'] . PHP_EOL;
// echo $_SERVER['HTTPS'] . PHP_EOL;
// echo $_SERVER['REMOTE_ADDR'] . PHP_EOL;
// echo $_SERVER['REMOTE_HOST'] . PHP_EOL;
// echo $_SERVER['REMOTE_PORT'] . PHP_EOL;
// echo $_SERVER['SCRIPT_FILENAME'] . PHP_EOL;
// echo $_SERVER['SERVER_ADMIN'] . PHP_EOL;
// echo $_SERVER['SERVER_PORT'] . PHP_EOL;
// echo $_SERVER['SERVER_SIGNATURE'] . PHP_EOL;
// echo $_SERVER['PATH_TRANSLATED'] . PHP_EOL;
// echo $_SERVER['SCRIPT_NAME'] . PHP_EOL;



// echo $_SESSION['session'] . PHP_EOL;

// echo $_COOKIE['cookie'];

// date_default_timezone_set("Asia/Baku");

// $date = strtotime('2022-01-05'); 

// $date2 = strtotime('2021-12-05');

// echo ceil(($date-$date2)/86400); 


// function array_diff_own(array $a , array $b)
// {
// 	$result = [];

// 	foreach($a as &$a_own)
//     {
//         $a_own;
//     }

//     foreach($b as &$b_own)
//     {
//     	$b_own;
//     }

//     if($a_own != $b_own)
//     {
//     	$result[] = $a_own or $b_own;	
//     }

//     return $result;

// }


// $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $b=array("e"=>"red","f"=>"green","g"=>"blue" , "x"=>"dfeeef");

// $a = [1 , 2 , 3, 4];
// $b = [5 , 6 , 7 ,8];
// $result=array_diff_own($a,$b);
// print_r($result);




class test
{
    public $b;
    public $c;
    public $array = [];
    public $v;
    public static $static = null;
    const OPEN = "open";


    static public function ok($val)
    {
        
        // $self = self::ok($val);
        // return $self;

        self::$static = $val+5;
        // return self::$static;

        return new self;

    }

    public function first($b)
    {
        $this->b = $b;
        return $this;
    }


    public function second($c)
    {
        $this->c = $c;
        return $this;
    }

    function get_class()
    {
        return $this->b . '   ' . $this->c . '    ' . self::$static . '   '  .self::OPEN;
    }

    function set_array($arrays)
    {
        foreach ($arrays as $arr) {
            $this->array[] = $arr;
        }

        return $this;
    }

    function get_array()
    {
        foreach ($this->array as $arr) {
            echo $arr . '<br>';
        }
    }
    public function __construct()
    {
        $this->v = function () {
            return 42;
        };
    }
}

echo test::ok(5)->first(4)->second(9)->get_class().'<br>';
// echo $start->first('B').'<br>';
// echo $start->second('C').'<br>';


// echo $start->first('B')->second('C')->get_class();


// $start->set_array([1, 2, 3, 4, 5, 6])->get_array();


// class User
// {
//     public int $id;
//     public string $name;

//     public function __construct(int $id, string $name)
//     {
//         $this->id = $id;
//         $this->name = $name;
//     }
// }

// $user = new User(1234, 22222);

// var_dump($user->id) . '<br>';
// var_dump($user->name) . '<br>';



// $phones = ['samsung', 'apple', 'nokia', 'oppo', 'onePlus'];

// function yields(array $phones)
// {
//     foreach($phones as $item)
//     {
//         yield $item.' by yield';
//     }


// }

// foreach(yields($phones) as $phone)
// {
//     echo $phone.'<br>';
// }


// echo $phone;



// $multis = [
//     'cars' => [
//         'audi',
//         'bmw',
//         'volvo',
//         'mazda',
//         'honda'
//     ],

//     'notebook' => [
//         'asus',
//         'apple',
//         'acer',
//         'dell',
//         'hp'
//     ]
// ];


// foreach ($multis as $key => $val) {
//     echo '<ul>'.PHP_EOL;
//     echo $key.PHP_EOL;


//     foreach ($val as $data => $item) {
//         echo '<li>';
//         echo $item . '<br>'.PHP_EOL;
//         echo '</li>'.PHP_EOL;
//     }
//     echo '</ul>'.PHP_EOL;
// }

// foreach ($multis as $val) {
//     if(!is_array($val))
//     {
//         foreach($val as $item)
//         {
//             echo $item.'<br>';
//         }
//     }
// }

// class foo {
//     var $bar = 'I am bar.';
//     var $arr = array('I am A.', 'I am B.', 'I am C.');
//     var $r   = 'I am r.';
// }

// $foo = new foo();
// $bar = 'bar';
// $baz = array('foo', 'bar', 'baz', 'quux');
// echo $foo->$bar . "\n";
// echo $foo->{$baz[1]} . "\n";

// $start = 'b';
// $end   = 'ar';
// echo $foo->{$start . $end} . "\n";

// $arr = 'arr';
// echo $foo->{$arr[1]} . "\n";

// $hid = function()
// {
//     return 'refef';
// };


// echo $hid();
$uuid = uniqid();
if(!isset($_COOKIE['basket']))
{
    setcookie(name:'basket' , value:$uuid , expires:time()+10 , httponly:httponly);

}
echo $_COOKIE['basket'].'<br>';

// echo $uuid;

?>








































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center; margin-top:200px">
        <form action="local.php" method="Post">
            <label for="">Name_Az</label><input type="text" name="name_az"><br>
            <hr>
            <label for="">Name_En</label><input type="text" name="name_en"><br><br><br>
            <label for="">Text_Az</label><input type="text" name="text_az"><br>
            <hr>
            <label for="">Text_En</label><input type="text" name="text_en"><br><br>

            <button name="submit">Submit</button>

        </form>
    </div>

</body>

</html> -->