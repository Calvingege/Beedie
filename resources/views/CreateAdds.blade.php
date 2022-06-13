<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    div {
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 20px;
  margin-left: 20px;
    }
    </style>

</head>
<body>

<form action="{{route('StoreAdds')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Pasang iklan</h1>
        <div class="mb-3">
          <label for="NamaBarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
        </div>

        <div class="mb-3">
          <label for="HargaLimit" class="form-label">Harga Limit</label>
          <input type="text" class="form-control" id="HargaLimit" name="HargaLimit">
        </div>

        <div class="mb-3">
            <label for="FotoBarang" class="form-label">Foto Barang</label>
            <input type="file" class="form-control" id="picture" name="FotoBarang">
            @error('FotoBarang')
                <label for="">{{$message}}</label>
            @enderror
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-primary">Simpan Data iklan</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>