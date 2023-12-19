<!-- resources/views/pdf/disposisi.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Disposisi</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Laporan Disposisi</h2>
    <table>
        <thead>
            <tr>
                <th>No Disposisi</th>
                <th>No Agenda</th>
                <th>No Surat</th>
                <th>Kepada</th>
                <th>Keterangan</th>
                <th>Status Surat</th>
                <th>Tanggapan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($disposisi as $key => $value)
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $value->no_agenda }}</td>
                    <td>{{ $value->no_surat }}</td>
                    <td>{{ $value->kepada }}</td>
                    <td>{{ $value->keterangan }}</td>
                    <td>{{ $value->status_surat }}</td>                            
                    <td>{{ $value->tanggapan }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">Data Masih Kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
