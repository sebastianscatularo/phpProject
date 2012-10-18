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

interface IWebService {

    function getMethod(); //Read

    function postMethod(); //Create

    function putMethod(); //Update

    function deleteMethod(); //Delete
    /*
      function GET();
      function OPTIONS();
      function HEAD();
      function POST();
      function PUT();
      function DELETE();
      function TRACE(); */
}

?>
