<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>From</title>
</head>

<body class="py-5">
    <div class="container-fluid text-center">
        <h2 class="h2">APLIKASI NGARANG NILAI</h2>
        <h6 class="h6">by Dymas Arya</h6>
        <h6 class="h6 fst-italic mb-4">terinspirasi karna pusing mengarang nilai 😁😁</h6>
    </div>
    <div class="container">
        <div class="container-fluid px-3 px-sm-0">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 bg-white shadow-lg p-4 rounded-5 mb-4  animate__animated animate__zoomInDown">
                    <form action="hasil.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control rounded-4" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="name">
                            <div id="emailHelp" class="form-text">contoh : Nizam</div>
                        </div>
                        <div class="mb-3">
                            <div class="row row-cols-2">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nilai Minimum</label>
                                    <input type="number" class="form-control rounded-4" aria-describedby="emailHelp"
                                        name="min" id="limitedInput">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nilai Maksimum</label>
                                    <input type="number" class="form-control rounded-4" aria-describedby="emailHelp"
                                        name="max" id="limitedInput">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Nilai</label>
                                <input type="number" class="form-control rounded-4" aria-describedby="emailHelp"
                                    name="table" id="limitedInput">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nilai Yang Diminta</label>
                                <input type="number" class="form-control rounded-4" aria-describedby="emailHelp"
                                    name="reqResult" id="limitedInput">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-5">GAS</button>
                    </form>
                </div>
                <!-- <p>12</p>
                <div class="col-12 col-sm-8 bg-white shadow-lg p-4 rounded-5 mb-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>