<?php
class PythonLoad {
    public function RunPython($path, $args) {
        $result = exec('python python/'.$path.' '.$args);
        //return json_decode($result);
        return $result;
    } 
}
$python = new PythonLoad();
$result = $python->RunPython('test.py', '');

echo "<h1>".$result."</h1>";
?>
