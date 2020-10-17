<?php

$task = [
    'Title' => "PHP Practitioner 3",
    'Due' => "10/11/2020",
    'Assigned To' => 'D Davis',
    'Completed' => true
];

include_once ('header.php');
require "task.view.php";
include_once ('../footer.php');