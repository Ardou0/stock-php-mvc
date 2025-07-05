<?php
require_once 'TestModel.php';

function runTest($testName, $testFunction) {
    echo "Running test: $testName...";
    if ($testFunction()) {
        echo "OK\n";
    } else {
        echo "Failed\n";
    }
}


$testModel = new TestModel();

runTest('Test Database Connection', function() use ($testModel) {
    return $testModel->testConnection();
});
?>
