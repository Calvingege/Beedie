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
<style>
  #navbar{
    background-color: greenyellow;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

ul{
    color: white;
    display: flex;
    height: 10vh;
    /* align-items: center; */
}

li{
    list-style: none;
    margin: 0 30px;
    font-size: 25px;
}

a{
    font-weight: bold;
    color: green;
    text-decoration: none;
    display: flex;
    align-items: center;
}

#hero-section{
    height: 70vh;
    background-color: white;
    background-size: cover;
    /* background-repeat: ; */
    display: flex;  
    justify-content: center;
    flex-direction: column;
    padding-left: 200px;
}

#picture-selection{
    float: right;
    padding: 10px;
    padding-top: 120px;
    padding-right: 250px;
}

#pre-selection{
    padding-left: 88px;
}
</style>
<div id="navbar">
        <ul>
        <a href="/home"><li>Home</li></a>
        <a href=""><li>login</li></a>
        <a href="/create/bid"><li>Buy Item</li></a>
        <a href="/create/adds"><li>Sel Item</li></a>
        <a href="/about"><li>about us</li></a>
        </ul>
      </div>

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

<!-- Input Nama Barangnya -->
<div class="mb-3">
          <label for="NamaBarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="NamaBarang" name="NamaBarang">
</div>

<!-- Bikin harga lelang nya yang bisa di input -->
<div class="mb-3">
          <label for="HargaLelang" class="form-label">Harga Lelang</label>
          <input type="text" class="form-control" id="HargaLelang" name="HargaLelang">
    </div>

<!-- Bikin Button simpan bid -->
    <button type="submit" class="btn btn-primary">Simpan Data Bid</button>
@endforeach    
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>