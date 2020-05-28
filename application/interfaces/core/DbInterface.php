<?php

namespace application\interfaces\core;

interface DbInterface
{
    public function query($sql, $params = []);
    public function row($sql, $params = []);
    public function column($sql, $params = []);
}
