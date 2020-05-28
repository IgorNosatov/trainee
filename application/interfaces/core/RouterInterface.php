<?php 
namespace application\interfaces\core;

interface RouterInterface
{
    public function add($route, $params);
    public function match();
    public function run();
}