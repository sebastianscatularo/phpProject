<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Sebastian
 */

namespace Libs\WebService\REST;

interface IREST {
    function getMethod();
    function putMethod();
    function postMethod();
    function deleteMethod();
}

?>
