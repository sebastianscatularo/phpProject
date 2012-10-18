<?php

namespace Libs\MVC\Model;

interface IModel {
    function read();
    function create();
    function update();
    function delete();
}

?>
