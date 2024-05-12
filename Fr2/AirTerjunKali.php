
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makatete Hills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="min-height: 600px; background-color: #fbfada;">
    <?php
      include('dbhelper.php');
    ?>
    <nav id="fade-element" class="w-100 fixed-top d-flex align-items-center" style="height: 80px; background-color: #12372a; color: #fbfada;">
      <div class="container">
        <div class="row">
          <a class="col-2 text-start fw-bolder fs-5 my-auto" style="color: #fbfada; text-decoration:none;">Kembali</a>
          <h1 class="col text-center fw-bolder fs-2 my-auto" style="color: #fbfada;">Air Terjun Kali</h1>
          <div class="col-2"></div>
        </div>
      </div>
    </nav>

    <br><br><br>

    <main class="container my-5">

      <!-- BACK BUTTON -->

      <!-- TITLE ARTICLE -->
      <p class="text-center mt-5 fw-bold fs-2" style="color: #12372a;">Lorem ipsum dolor sit amet.</p>

      <!-- THREE DOTS -->
      <p class="text-center my-5">
          <i class="bi bi-record-fill mx-1"></i>
          <i class="bi bi-record-fill mx-1"></i>
          <i class="bi bi-record-fill mx-1"></i>
      </p>
      
      <!-- MAIN ARTICLE -->
      <article class="text-center my-5">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis porro, ipsa delectus veniam enim quae libero, quam repudiandae quis repellat ea corporis. Voluptatibus inventore, recusandae harum, minus voluptas asperiores maxime laboriosam obcaecati eligendi quis nemo tenetur sit incidunt praesentium! Deleniti!
          <br><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo voluptate, saepe consequuntur cum vero qui reprehenderit possimus beatae molestiae dolor pariatur, eaque voluptatum similique, et quaerat. In, obcaecati ducimus molestiae quis tempore numquam excepturi sit iusto expedita quo. Vel praesentium eius obcaecati qui, harum esse! Sed rerum eius illum!
          <br><br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. A sequi unde ea repudiandae laboriosam nulla numquam obcaecati aspernatur quibusdam rem nihil soluta, labore sapiente quod debitis fugit aut. Harum, obcaecati?
      </article>

      <!-- TABLE AND IMAGE -->
      <div class="row my-5">
          <div class="col-4 me-5">
          <img class="col-4 me-5 rounded-3" src="https://www.manadosafaris.com/wp/wp-content/uploads/2016/01/Kali-Waterfall.jpg" alt="makatete-hills" style="object-fit: cover; width: 100%; height: 100%;">
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

      <h3 class="my-5 fw-bold text-center">RATING</h3>
      <!-- REVIEWS AND MK REVIEW -->
      <div class="row my-5">
        
        <!-- MAKE REVIEW -->
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id="stars_review" class="container d-flex justify-content-center col align-self-center">
          
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

        <div class="col d-flex justify-content-center">
          <svg height="320" width="10" xmlns="http://www.w3.org/2000/svg">
            <line x1="0" y1="40" x2="0" y2="280" style="stroke:black;stroke-width:10" />
            Sorry, your browser does not support inline SVG.
          </svg>
        </div>

        <!-- REVIEWS -->
        <div class="col mt-5">
          <div class="d-flex justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="gold" class="bi bi-star-fill" viewBox="-1 -1 18 18">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" stroke="black" stroke-width="1"/>
              </svg>
          </div>

          <h4 class="fw-bold text-center mt-3 mb-5" id="rating"><?php echo get_makatete_hills_reviews(); ?></h4>
        </div>

      </div>

      <br><br><br>
    </main>
    
    <footer class="w-100 d-flex align-items-center" style="height: 80px; background-color: #12372a; color: #fbfada;">
      <div class="container d-flex justify-content-between">
            <p class="w-100 text-start my-auto">Copyright©DesaPineleng</p>
            <p class="w-100 text-end my-auto">Write by: <b>Robby Efruan</b></p>
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
    

      const element = document.getElementById("fade-element");
      const startFade = 100; // Adjust this value to control when fading starts (in pixels from the top)

      window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY;
        const opacity = Math.max(0, 1 - scrollPosition / startFade);
        element.style.opacity = opacity;
      });


    </script>
</body>
</html>