<?php

$value = [];
$student = $_POST['name'];
$table = $_POST['table'];
$minimumValue = $_POST['min'];
$maximumValue = $_POST['max'];
$reqResult = $_POST['reqResult'];

$summedValue = 0;
$finalResult = 0;
$run = true;
$attempt = 0;

if ($minimumValue > $maximumValue || $maximumValue < $minimumValue) {
    $student = "ERROR => ";
    $reqResult = "Nilai Minimum melebihi Maksimum atau sebaliknya";
} else if ($reqResult < $minimumValue || $reqResult > $maximumValue || $reqResult == $minimumValue || $reqResult == $maximumValue) {
    $student = "ERROR => ";
    $reqResult = "Nilai Yang Diminta lebih kecil/samadengan/lebih besar dari nilai min/nilai maks";
} else if ($reqResult == $minimumValue + 1 || $reqResult == $maximumValue + 1) {
    $student = "ERROR => ";
    $reqResult = "Nilai Yang Diminta hanya lebih besar/lebih kecil 1 dari nilai min/nilai maks";
} else if ($table > 10) {
    $student = "ERROR => ";
    $reqResult = "Jumlah nilai lebih dari 10";
} else if (($maximumValue - $minimumValue) < 5) {
    $student = "ERROR => ";
    $reqResult = "Jarak antara nilai minimum dan maksimum terlalu dekat";
} else {
    while ($run === true) {
        for ($i = 0; $i < $table; $i++) {
            $value[$i] = random_int($minimumValue, $maximumValue);
            $summedValue += $value[$i];
        }

        $finalResult = $summedValue / sizeof($value);

        if ($finalResult != $reqResult) {
            $value = [];
            $summedValue = 0;
            $run = true;
            $attempt++;
        } else {
            $run = false;
            $attempt++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>To</title>
</head>

<body style="min-height: 100vh;" class="d-flex align-items-center">
    <div class="container-fluid">
        <h3 class="h3 text-center mb-4">Hasil</h3>
        <div class="container-fluid px-3 px-sm-4">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-sm-12 bg-white shadow-lg p-4 rounded-5 mb-4 table-responsive animate__animated animate__bounceIn">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <?php foreach ($value as $index => $v): ?>
                                    <th scope="col">
                                        <?= "Nilai " . $index + 1 ?>
                                    </th>
                                <?php endforeach; ?>
                                <th scope="col">Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $student ?>
                                </td>
                                <?php foreach ($value as $index => $v): ?>
                                    <td>
                                        <?= $v ?>
                                    </td>
                                <?php endforeach; ?>
                                <td>
                                    <?= $reqResult ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="index.php" class="btn btn-info w-100 rounded-5">
                Back
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>