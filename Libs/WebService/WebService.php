<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author sebastian
 */
namespace Libs\WebService;

interface WebService {
    function GET();
    function PUT();
    function POST();
    function DELETE();
}

?>
