<?php 
namespace application\interfaces\core;

interface ViewInterface
{
    public function render($title, $vars = []);
    public function redirect($url);
    public function message($status, $message);
    public function location($url);
}