<?php
$data = <<<'EOD'
X, -9\\\10\100\-5\\\0\\\\, A
Y, \\13\\1\, B
Z, \\\5\\\-3\\2\\\800, C
EOD;

$dataLines = explode("\n", $data);
$dataOutput = [];

foreach ($dataLines as $dataLine) {
    $dataParts = array_map('trim', explode(',', $dataLine));

    $dataFirst = $dataParts[0];
    $dataSecond = preg_replace('/\\\\+/', ',', $dataParts[1]);
    $dataThird = $dataParts[2];

    $dataValues = array_values(array_filter(explode(',', $dataSecond), 'is_numeric'));
    sort($dataValues);

    $dataCount = 1;
    foreach ($dataValues as $dataValue) {
        $dataOutput[] = $dataFirst . ', ' . $dataValue . ', ' . $dataThird . ', ' . $dataCount;
        $dataCount++;
    }
}

usort($dataOutput, function ($aData, $bData) {
    $aValue = intval(explode(',', $aData)[1]);
    $bValue = intval(explode(',', $bData)[1]);

    if ($aValue < $bValue) {
        return -1;
    } elseif ($aValue > $bValue) {
        return 1;
    } else {
        return 0;
    }
});

foreach ($dataOutput as $dataLine) {
    echo $dataLine . "<br> <br>";
}
?>
