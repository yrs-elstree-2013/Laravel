<?php
class PythonLoad {
    public function RunPython($path, $args) {
        $result = exec('python '.app_data().'/lib/python/'.$path.' '.$args);
        //return json_decode($result);
        return $result;
    } 
}
?>
