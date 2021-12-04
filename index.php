<?php
   define( 'DB_NAME', 'Infrapa9' );
   define( 'DB_USER', 'Infrapa9' );
   define( 'DB_PASSWORD', '' );
   define( 'DB_HOST', '103.31.38.73' );
   $host = '103.31.38.73';
   $user = 'Infrapa9';
   $pass = '';
   $db_name = 'Infrapa9';

   $conn = mysqli_connect($host,$user,$pass,$db_name);

   $sql = 'select*from mahasiswa';

   $query = mysqli_query($conn,$sql);
?>
<html>
   <head>
      <title>Infrapakeix</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="icon" href="https://yt3.ggpht.com/yti/APfAmoHhzrymgsY9dPTwxZoO9u8KLdgBGfSEr3L5tbNi8Q=s88-c-k-c0x00ffffff-no-rj-mo">
   </head>
   <body>
      <main class="text-center">
         <div class="container marketing">
            <h1>Infrastuktur Pendukung Aplikasi</h1>
            <h3>Kelompok 9</h3>
            <div class="row mt-5">
               <?php 
               while ($row = mysqli_fetch_array($query))
               {
               ?>
               <div class="col-lg-3 mt-2">
                  <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="anam.jpg" alt="Khoerul Anam">
                  <h2><?= $row['npm'] ?></h2><h4><?= $row['nama'] ?></h4>
               </div>
               <?php } ?>
            </div>
         </div>
      </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   </body>
</html>