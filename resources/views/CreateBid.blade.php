<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bikin merjinnya -->
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
<form action="{{route('StoreBid')}}" method="POST" enctype="multipart/form-data">
@csrf
<h1>Menu Lelang</h1>
<!-- Bikin View lelang -->

@foreach ($Adds as $Adds)
<!-- Show nama barang nya disini -->
<!-- <th scope="row"><a href="{{route('ShowAdds', $Adds->id)}}">{{$Adds->KategoriBarang}}</a></th> -->
<a><img src="{{asset('storage/image/'.$Adds->FotoBarang)}}" alt="FotoBarang" width="300" 
     height="200"></a>
<br>
<a>Nama: {{$Adds->NamaBarang}}</a>
<br>
<a>Harga Limit: {{$Adds->HargaLimit}}</a>
@endforeach

<!-- Bikin harga lelang nya yang bisa di input -->
    <div class="mb-3">
          <label for="HargaLelang" class="form-label">Harga Lelang</label>
          <input type="text" class="form-control" id="HargaLelang" name="HargaLelang">
    </div>

<!-- Bikin Button simpan bid -->
        <button type="submit" class="btn btn-primary">Simpan Data Bid</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>