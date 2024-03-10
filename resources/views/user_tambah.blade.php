<body>
    <h1>Form Tambah Data User</h1>
    <a href="{{route('/user')}}">Kembali</a>
    <form method="post" action="{{route('/user/tambah_simpan')}}">
        {{csrf_field()}}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukan Password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id">
        <br>
        <input type="submit" name="btn btn-success" value="Simpan">
    </form>
</body>
