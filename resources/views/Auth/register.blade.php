<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content=""/>
    <title></title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>


    <section class="container">
      <header>Registrasi</header>
      <form action="{{route('storeRegist')}}" method="POST" class="form">
        @csrf
        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" placeholder="Masukkan Nama Lengkap" name="name" id="name" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="email" placeholder="Masukkan Email" name="email" id="email" required autocomplete="off" />
        </div>

        <div class="input-box">
          <div class="input-box">
            <label>Password</label>
            <input type="password" placeholder="Masukkan Nomor password" name="password" required autocomplete="off" />
          </div>
        </div>

        <div class="input-box">
          <div class="input-box">
            <label>Nomer Telepon</label>
            <input type="number" placeholder="Masukkan no hp" name="no_hp" required />
          </div>
        </div>
        
        <div class="input-box">
          <div class="input-box">
            <label>Alamat</label>
            <input type="text" placeholder="Masukkan alamat" name="addres" required />
          </div>
        </div>

        <button type="submit" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;" >Submit</button>
        <br>      
        <a href="/" class="button" style="height: 45px; padding: 0 16px; border-radius: 36px; background:#1C4670; color: #FFFF; display: flex;
			  justify-content: center; align-items: center; grid-gap: 10px; font-weight: 500;">Kembali</a>
        
      </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </script> 



    
  </body>
</html>


 
