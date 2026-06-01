<h1>Tambah Client</h1>

<form action="/clients" method="POST">
    @csrf

    <input type="text" name="client_name" placeholder="Nama Client">
    <br><br>

    <input type="text" name="company_type" placeholder="Jenis Perusahaan">
    <br><br>

    <input type="text" name="phone" placeholder="Phone">
    <br><br>

    <textarea name="address"></textarea>
    <br><br>

    <button type="submit">Simpan</button>
</form>