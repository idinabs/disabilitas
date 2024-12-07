<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            background-color: #f0f2f5;
        }

        .sidebar {
            width: 250px;
            background-color: #0C356A; /* Updated color */
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            transition: background 0.3s;
            padding: 10px;
            border-radius: 5px;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .submenu {
            display: none;
            margin-left: 20px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
        }

        header {
            margin-bottom: 30px;
        }

        header h1 {
            color: #0C356A; /* Updated color */
        }

        .section {
            margin-bottom: 40px;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .stats {
            display: flex;
            justify-content: space-around;
        }

        .stat-card {
            background-color: #e9f7e9;
            border: 1px solid #d3d3d3;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 30%;
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: scale(1.05);
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 10px;
            background-color: #0C356A; /* Updated color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        form button:hover {
            background-color: #0A2A55; /* Darker shade for hover */
        }

        #prestasi-table, #data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #prestasi-table th, #prestasi-table td, #data-table th, #data-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        #prestasi-table th, #data-table th {
            background-color: #0C356A; /* Updated color */
            color: white;
        }

        canvas {
            margin-top: 20px;
        }

        .prestasi-list {
            margin-top: 10px;
        }

        .prestasi-list ul {
            list-style: none;
            padding: 0;
        }

        .prestasi-list li {
            background: rgba(255, 255, 255, 0.8);
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Button for Add (Tambah) */
        .button-tambah {
            display: inline-block;
            margin-top: 10px;
            padding: 10px;
            background-color: #ff9800; /* Orange color */
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .button-tambah:hover {
            background-color: #fb8c00; /* Slightly darker orange on hover */
        }

        /* Edit Button */
        .button-edit, .button-hapus {
            background-color: #0C356A; /* Blue for edit */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 5px;
            text-decoration: none; /* Remove underline */
        }

        /* Hover effects for both buttons */
        .button-edit:hover {
            background-color: #0A2A55; /* Darker blue for edit hover */
        }

        /* Delete button with red color */
        .button-hapus {
            background-color: #f44336; /* Red for delete */
        }

        .button-hapus:hover {
            background-color: #d32f2f; /* Darker red for delete hover */
        }



        .logout-button {
            background-color: #f44336; /* Red for logout */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        .logout-button:hover {
            background-color: #d32f2f; /* Darker red for logout hover */
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li>
                <a href="#/news" id="news-link">Berita</a>
                <ul class="submenu" id="news-submenu">
                    <li><a href="#" id="daftar-news-link">Daftar Berita</a></li>
                </ul>
            </li>
            <li>
                <a href="#/dosen" id="dosen-link">Dosen</a>
            </li>
            <li>
                <a href="#/mitra" id="mitra-link">Kemitraan</a>
            </li>
            <li>
                <a href="#/akademis" id="akademis-link">Akademis</a>
            </li>
        </ul>
        <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
            @csrf
            <button class="logout-button" type="submit">Logout</button>
        </form>
        
    </div>

    <div class="content">
        <header>
            <h1>Selamat Datang, Admin!</h1>
        </header>

        <div id="news" class="section" style="display: none;">
            <h3>Berita</h3>
            <a href="{{ route('admin.news.create')}}" class="button-tambah">Tambah Data</a>

            <table id="prestasi-table">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               
                @foreach($news as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <!-- Edit Button (without the button wrapper) -->
                            <a href="{{ route('admin.news.edit', $item->id) }}" class="button-edit">Edit</a>

                            <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="button-hapus" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                            </form>
           
                         </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div id="dosen" class="section" style="display: none;">
            <h3>Dosen</h3>
            <a href="{{ route('admin.dosen.create')}}" class="button-tambah">Tambah Data</a>

            <table id="prestasi-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Bidang</th>
                        <th>Pangkat</th>
                        <th></th>
                    </tr>
                </thead>
               
                @foreach($dosen as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->bidang }}</td>
                        <td>{{ $item->pangkat }}</td>
                        <td>
                            <a href="{{ route('admin.dosen.edit', $item->id) }}" class="button-edit">Edit</a>

                            <form action="{{ route('admin.dosen.destroy', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="button-hapus" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                            </form>

                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div id="mitra" class="section" style="display: none;">
            <h3>Mitra</h3>
            <a href="{{ route('admin.mitra.create')}}" class="button-tambah">Tambah Data</a>

            <table id="prestasi-table">
                <thead>
                    <tr>
                        <th>Instansi</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
               
                @foreach($mitra as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->instansi }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="{{ route('admin.mitra.edit', $item->id) }}" class="button-edit">Edit</a>

                            <form action="{{ route('admin.mitra.destroy', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="button-hapus" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
        <div id="akademis" class="section" style="display: none;">
            <h3>Akademis</h3>
            <a href="{{ route('admin.akademisadmin.create')}}" class="button-tambah">Tambah Data</a>

            <table id="prestasi-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th></th>
                    </tr>
                </thead>
               
                @foreach($akademis as $item)
                <tbody>
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.akademisadmin.edit', $item->id) }}" class="button-edit">Edit</a>

                            <form action="{{ route('admin.akademisadmin.destroy', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="button-hapus" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        // Array yang berisi ID dari elemen yang ingin ditampilkan
        const sections = ['news', 'dosen', 'mitra', 'akademis']; // 'statistik' sudah dihapus

        // Fungsi untuk menyembunyikan semua elemen dan menampilkan yang dipilih
        function showSection(sectionId) {
            // Menyembunyikan semua elemen
            sections.forEach(id => {
                document.getElementById(id).style.display = 'none';
            });
            
            // Menampilkan elemen yang dipilih
            document.getElementById(sectionId).style.display = 'block';
        }

        
        document.getElementById('news-link').addEventListener('click', function() {
            showSection('news');
        });

        document.getElementById('dosen-link').addEventListener('click', function() {
            showSection('dosen');
        });

        document.getElementById('mitra-link').addEventListener('click', function() {
            showSection('mitra');
        });

        document.getElementById('akademis-link').addEventListener('click', function() {
            showSection('akademis');
        });
    </script>
    <script>
    function confirmDelete(newsId) {
        const confirmAction = confirm("Apakah Anda yakin ingin menghapus berita ini?");
        if (confirmAction) {
            // Submit form jika konfirmasi benar
            document.getElementById('delete-form-' + newsId).submit();
        }
    }
</script>
</body>
</html>
