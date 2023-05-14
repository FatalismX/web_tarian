<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tari Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-2">Tari Indonesia</h2>
    <div class="container mt-3">
    <form>
  <div class="mb-3">
    <label for="nama_tari" class="form-label">Nama Tarian</label>
    <input type="text" class="form-control" id="nama_tari" name="nama_tari" value="{{ $TariIndonesia->nama_tari }}" disabled>
  </div>
  <div class="mb-3">
    <label for="asal_daerah" class="form-label">Asal Daerah</label>
    <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" value="{{ $TariIndonesia->asal_daerah }}" disabled>
  </div>
  <a href="/" class="btn btn-primary">Kembali</a>
</form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>