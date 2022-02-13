<?php

include 'index.php';
include 'Traits/file.php';

use index\test;
use Traits\upload;


class locals extends test
{
    use upload;

    
}

$echo = new locals;
$echo->dd();
// echo $echo->ff();
// $echo = new locals;

// echo $echo->lo();
/*
    id
    foreign_id
    local - az , en , ru
    local field
*/
