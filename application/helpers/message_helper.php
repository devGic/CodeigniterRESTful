<?php

/**
 * used to return the message when missing parameter
 * @param  [array] $param [description]
 * @return [array] array of obejct{code,data,message} for missing parameer
 */

if (!function_exists('msg_missingParameter')) {
    function msg_missingParameter($param) {
        $error = array(
            'code' => PROCESS_FAILS_CODE,
            'data' => '',
            'message' => array('code' => MISSING_PARAM_CODE,'description' => 'Missing parameter '.  implode(',', $param))
        );
        return $error;
    }
}

/**
* used to return the message when success
* @param  [array] $return_result 
* @return [array] array of obejct{code,data,message} for success message
*/
if (!function_exists('msg_success')) {
    function msg_success($return_result) {
        $response = array(
            'code' => SUCCESS_CODE,
            'data' => $return_result,
            'message' =>array('code' => SUCCESS_CODE,'description' => 'success')
        );
        return $response;
    }
}

