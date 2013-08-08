<?php
class PythonLoad {
    public function RunPython($path, $args) {
        $result = exec('python/'.$path.' '.$args);
        //return json_decode($result);
        return $result;
    } 
}
?>
