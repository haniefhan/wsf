<?php
/*
 * Copyright 2005,2006 WSO2, Inc. http://wso2.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

function GetPriceFunction($arg1, $arg2) {
    
    $return_value = array("Price" => 234.431);
    return $return_value;
}

$operations = array("GetPrice" => "GetPriceFunction");
$opParams = array("GetPriceFunction"=>"MIXED");

$svr = new WSService(array("wsdl"=>"sample.wsdl", 
                           "operations" => $operations,
                           "opParams"=>$opParams));
        
$svr->reply();

?>
