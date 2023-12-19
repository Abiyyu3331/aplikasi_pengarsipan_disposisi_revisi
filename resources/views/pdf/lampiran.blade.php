<body>
    <h2>Laporan Disposisi</h2>
    <table>
    <thead>Lampiran Disposisi</thead>
    <tbody>
            <tr>
                <td>No Surat       :</td>
                <td>{{ $value->no_surat }}</td>
            </tr>
            <tr>
                <td>Keterangan     :</td>
                <td>{{ $value->keterangan }}</td>
            </tr>
            <tr>
                <td>Status Surat   :</td>
                <td>{{ $value->status_surat }}</td>
                <td>No Agenda   :</td>
                <td>{{ $value->no_agenda }}</td>
            </tr>
            <tr>
                <td>Tanggapan      :</td>
                <td>{{ $value->tanggapan }}</td>
                <td>Kepada      :</td>
                <td>{{ $value->kepada }}</td>
            </tr>
    </tbody>
</table>