<head >
    <h6 class="title text-center">Input file format .db3, contoh (NGXDS_20250101.db3)</h6>
</head>

<body>
    <!-- Button untuk input file .db3 dengan browse -->
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="browse_file" accept=".db3" multiple>
    </div>

    <!-- Table untuk menampilkan isi file output -->
    <table class="table table-sm small" id="fileTable">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama File</th>
                <th>Ukuran (kb)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3" class="text-center text-muted"> Belum ada file diinput</td>
            </tr>
        </tbody>
    </table>

    <script>
        const fileInput = document.getElementById('browse_file');
        const tableBody = document.querySelector('#fileTable tbody');

        fileInput.addEventListener('change', () => {
            tableBody.innerHTML = ''; // Mengkosongkan ketika akan input

            const files = fileInput.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const row = document.createElement('tr');

                const cellNo = document.createElement('td');
                cellNo.textContent = i + 1;

                const cellName = document.createElement('td');
                cellName.textContent = file.name;

                const cellSize = document.createElement('td');
                cellSize.textContent = (file.size / 1024).toFixed(2) + ' KB';

                row.appendChild(cellNo);
                row.appendChild(cellName);
                row.appendChild(cellSize);

                tableBody.appendChild(row);
            }
        });
    </script>

    <div style="text-align: center;">
        <button type="button" class="btn btn-success" style="width: 200px;">Proses</button>
    </div>

</body>