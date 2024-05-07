
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makatete Hills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="min-height: 800px; background-color: #fbfada;">
    <?php
      include('dbhelper.php');
    ?>
    <main class="container mb-5">

      <!-- BACK BUTTON -->
      <a class="fixed-top btn btn-sm fw-bold m-2 px-3" href="#" style="background-color: #436850;color: #fbfada; width: fit-content;">Kembali</a>

      <!-- TITLE ARTICLE -->
      <h1 class="text-center mt-5 fw-bold" style="color: #12372a;">Makatete Hills</h1>

      <!-- THREE DOTS -->
      <p class="text-center my-5">
          <i class="bi bi-record-fill mx-1"></i>
          <i class="bi bi-record-fill mx-1"></i>
          <i class="bi bi-record-fill mx-1"></i>
      </p>
      
      <!-- MAIN ARTICLE -->
      <article class="text-center my-5">
          Terletak di Desa Warembungan, Kecamatan Pineleng, Kabupaten Minahasa, Sulawesi Utara, Makatete Hills menawarkan panorama alam yang menakjubkan dan menjadi salah satu destinasi wisata alam yang populer di Sulawesi Utara. Dahulu, kawasan ini merupakan kebun cengkeh dan kelapa, namun kini telah disulap menjadi tempat wisata yang memikat para pengunjung.
          <br><br>
          Daya tarik utama Makatete Hills adalah pemandangannya yang luar biasa. Dari puncak bukit, pengunjung dapat menikmati panorama Kota Manado yang terhampar luas, Teluk Manado yang berkilauan, dan pulau-pulau kecil yang menghiasi lautan. Pemandangan matahari terbit dan terbenam di sini pun tak kalah memukau, menjadikannya momen yang tak terlupakan.
      </article>

      <!-- TABLE AND IMAGE -->
      <div class="row my-5">
          <div class="col-4 me-5">
          <img class="col-4 me-5 rounded-3" src="https://lensautara.id/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-12-at-6.10.13-PM-1.jpeg" alt="makatete-hills" style="object-fit: cover; width: 100%; height: 100%;">
          </div>

          <table class="col">
              <tbody class="fw-bold text-center">
                <tr style="background-color: #12372a;color: #fbfada;">
                  <th class="w-50 p-2">Harga Masuk : </th>
                  <td class="text-start"> Rp. 10.000</td>
                </tr>
                <tr style="background-color: #436850;color: #fbfada;">
                  <th class="p-2 ">Makanan : </th>
                  <td class="text-start"> Rp. 22.000 - Rp. 45.000</td>
                </tr>
                <tr style="background-color: #12372a;color: #fbfada;">
                  <th class="p-2">Minuman : </th>
                  <td class="text-start">Rp. 10.000 - Rp. 25.000</td>
                </tr>
                <tr style="background-color: #436850;color: #fbfada;">
                  <th class="p-2">Snack : </th>
                  <td class="text-start">Rp. 8.000 - Rp. 15.000</td>
                </tr>
              </tbody>
          </table>
      </div>

      <br><br>

      <!-- REVIEWS -->
      <h3 class="mt-5 mb-3 fw-bold text-center">RATING</h3>

      <div class="d-flex justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="gold" class="bi bi-star-fill" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" stroke="black" stroke-width="1"/>
          </svg>
      </div>

      <h4 class="fw-bold text-center mt-3 mb-5" id="rating"><?php echo get_makatete_hills_reviews(); ?></h4>

      <br><br>
      
      <!-- MAKE OWN REVIEWS -->
      <h3 class="my-5 fw-bold text-center ">Berikan Penilayan Anda</h3>

      <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="stars_review" class="container d-flex justify-content-center">
        
        <label for="sub-btn-s1">
          <input type="submit" id="sub-btn-s1" name="stars" value="1" style="display: none;">
          <svg id="s-1" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        </label>

        <label for="sub-btn-s2">
          <input type="submit" id="sub-btn-s2" name="stars" value="2" style="display: none;">
          <svg id="s-2" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        </label>

        <label for="sub-btn-s3">
          <input type="submit" id="sub-btn-s3" name="stars" value="3" style="display: none;">
          <svg id="s-3" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        </label>

        <label for="sub-btn-s4">
          <input type="submit" id="sub-btn-s4" name="stars" value="4" style="display: none;">
          <svg id="s-4" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        </label>

        <label for="sub-btn-s5">
          <input type="submit" id="sub-btn-s5" name="stars" value="5" style="display: none;">
          <svg id="s-5" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
        </label>


        <!-- <svg id="s-2" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
        <svg id="s-3" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
        <svg id="s-4" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
        <svg id="s-5" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="none" stroke="black" stroke-width="0.7" viewBox="-1 -1 18 18">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg> -->

      </form>

      <br><br><br>
    </main>
    
    <footer class="w-100" style="max-height: 300px; background-color: #12372a; color: #fbfada;">
      <div class="container">
        <div class="row py-4">
          <iframe class="col-1 rounded-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5772583782295!2d124.82268647472476!3d1.4291211985574106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x328773cc8928b291%3A0x2ac5486753a63e31!2sMakatete%20Hills!5e0!3m2!1sid!2sid!4v1714439269891!5m2!1sid!2sid" style="width: 230px; height: 200px;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <div class="col-2 mt-4">
            <div class="row">
                <p class="col"><i class="bi bi-map">&#160;&#160; Kec. pineleng, kabupaten minahasa,sulawesi utara</i></p>
            </div>

            
            <div class="row">
                <p class="col"><i class="bi bi-compass">&#160;&#160; 1° 25' 27" North, 124° 50' 4" East</i></p>
            </div>
          </div>
          
          <div class="col-4 my-5">
            <div class="mx-auto mb-3" style="width: 80px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-diamond" viewBox="0 0 16 16">
              <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.48 1.48 0 0 1 0-2.098zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
              </svg>
            </div>
            <p class="w-100 text-center">Copyright©DesaPineleng</p>
          </div>

          <div class="col my-4">
            <p><i class="bi bi-mailbox text-end my-3">&#160;&#160; 95661, Jl. Raya Manado - Tomohon, Pineleng I</i></p>
            <p><i class="bi bi-telephone my-3">&#160;&#160; 0013-3748382</i></p>
            <p><i class="bi bi-envelope-at my-3">&#160;&#160; pineleng30@gmail.com</i></p>
          </div>

        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      const star_1 = document.getElementById("s-1");
      const star_2 = document.getElementById("s-2");
      const star_3 = document.getElementById("s-3");
      const star_4 = document.getElementById("s-4");
      const star_5 = document.getElementById("s-5");
      
      let stars = [star_1, star_2, star_3, star_4, star_5];

      function changeStarColor(star, newColor) {
        star.style.fill = newColor;
      }

      // function review_star(num_of_star){
      //   if (num_of_star == 0){
      //     for(let i=0; i<5; i++){
      //       let star = document.getElementById("stars_review").children[i];
      //       changeStarColor(star, "none");
      //     }
      //     return;
      //   }

      //   for(let i=0; i<num_of_star; i++){
      //     let star = document.getElementById("stars_review").children[i];
      //     changeStarColor(star, "gold");
      //   }
      // }

      function review_star(num_of_star){
        if (num_of_star == 0){
          for(const star of stars){
            changeStarColor(star, "none");
          }
          return;
        }
        let i = 0;
        for(let i=0; i<num_of_star; i++){
          changeStarColor(stars[i], "gold");
        }
      }



      console.log(document.getElementById("stars_review").children);


      star_1.addEventListener("mouseover", () => review_star(1));
      star_1.addEventListener("mouseout", () => review_star(0));

      star_2.addEventListener("mouseover", () => review_star(2));
      star_2.addEventListener("mouseout", () => review_star(0));

      star_3.addEventListener("mouseover", () => review_star(3));
      star_3.addEventListener("mouseout", () => review_star(0));

      star_4.addEventListener("mouseover", () => review_star(4));
      star_4.addEventListener("mouseout", () => review_star(0));

      star_5.addEventListener("mouseover", () => review_star(5));
      star_5.addEventListener("mouseout", () => review_star(0));
      
      // star_1.addEventListener("mouseover", () => changeStarColor(star_1, "gold"));
      // star_1.addEventListener("mouseout", () => changeStarColor(star_1, "none"));

      // star_2.addEventListener("mouseover", () => changeStarColor(star_2, "gold"));
      // star_2.addEventListener("mouseout", () => changeStarColor(star_2, "none"));

      // star_3.addEventListener("mouseover", () => changeStarColor(star_3, "gold"));
      // star_3.addEventListener("mouseout", () => changeStarColor(star_3, "none"));

      // star_4.addEventListener("mouseover", () => changeStarColor(star_4, "gold"));
      // star_4.addEventListener("mouseout", () => changeStarColor(star_4, "none"));

      // star_5.addEventListener("mouseover", () => changeStarColor(star_5, "gold"));
      // star_5.addEventListener("mouseout", () => changeStarColor(star_5, "none"));



    </script>
</body>
</html>