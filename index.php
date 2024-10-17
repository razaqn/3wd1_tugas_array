<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    $kelas = [
        [
            "nim" => 1,
            "nama" => "abdullah palmer",
            "jenis kelamin" => "lanang",
            "kelas" => "3wd1",
            "kota asal" => "jakarta"
        ],
        [
            "nim" => 2,
            "nama" => "muhammad nkuku",
            "jenis kelamin" => "lanang",
            "kelas" => "3wd1",
            "kota asal" => "bekasi"
        ],
        [
            "nim" => 3,
            "nama" => "muhammad sancho",
            "jenis kelamin" => "lanang",
            "kelas" => "3wd1",
            "kota asal" => "bogor"
        ],
        [
            "nim" => 4,
            "nama" => "ahmad mudryk",
            "jenis kelamin" => "lanang",
            "kelas" => "3wd1",
            "kota asal" => "depok"
        ]
    ];

    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">nim</th>
                <th scope="col">nama</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">kelas</th>
                <th scope="col">kota asal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($kelas as $key => $value){
                echo "<tr>
                    <th scope='row'>" . $value['nim'] . "</th>
                    <td>" . $value['nama'] . "</td>
                    <td>" . $value['jenis kelamin'] . "</td>
                    <td>" . $value['kelas'] . "</td>
                    <td>" . $value['kota asal'] . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="row">
    <?php
    foreach ($kelas as $key => $value){
        echo "
        <div class='col-3'>
            <div class='card' style='width: 18rem;'>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'>nim : " . $value['nim'] . "</li>
                    <li class='list-group-item'>nama : " . $value['nama'] . "</li>
                    <li class='list-group-item'>jenis kelamin : " . $value['jenis kelamin'] . "</li>
                    <li class='list-group-item'>kelas : " . $value['kelas'] . "</li>
                    <li class='list-group-item'>kota asal : " . $value['kota asal'] . "</li>
                </ul>
            </div>
        </div>
        ";
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>