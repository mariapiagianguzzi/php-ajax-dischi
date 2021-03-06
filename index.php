<?php 
        $dischi = [
        [
        "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
        ],
        [
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "genre" => "Pop",
        "year" => "1992",
        ],
        [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "title" => "Ten's Summoner's Tales",
        "author" => "Sting",
        "genre" => "Pop",
        "year" => "1993"
        ],
        [
        "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "title" => "Steve Gadd Band",
        "author" => "Steve Gadd Band",
        "genre" => "Jazz",
        "year" => "2018"
        ],
        [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "genre" => "Metal",
        "year" => "2000"
        ],
        [
        "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "title" => "One more car, one more raider",
        "author" => "Eric Clapton",
        "genre" => "Rock",
        "year" => "2002"
        ],
        [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
        "title" => "Made in Japan",
        "author" => "Deep Purple",
        "genre" => "Rock",
        "year" => "1972"
        ],
        [
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
        "title" => "And Justice for All",
        "author" => "Metallica",
        "genre" => "Metal",
        "year" => "1988"
        ],
        [
        "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
        "title" => "Hard Wired",
        "author" => "Dave Weckl",
        "genre" => "Jazz",
        "year" => "1994"
        ],
        [
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title" => "Bad",
        "author" => "Michael Jackson",
        "genre" => "Pop",
        "year" => "1987"
        ]
        ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Ajax Dischi</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
      <header>
        <div class="container">
          <img src="logo.png" alt="logo" />
        </div>
      </header>
      
      <!-- parte php -->
      <div class="cds-container container">
        <?php foreach($dischi as $value){?>
            <div class="cd">
                <img src="<?php echo $value["poster"]; ?>" alt="" />
                <h3><?php echo $value["title"]; ?></h3>
                <span class="author"><?php echo $value["author"]; ?></span>
                <span class="year"><?php echo $value["year"];?></span>
            </div>
        <?php } ?> 

        <!-- parte vueJs -->
      <div id="app">
        <div class="cds-container container">
          <div  class="cd" v-for="cd in listaCd">
            <img :src="cd.poster" alt="" />
            <h3>{{ cd.title }}</h3>
            <span class="author">{{ cd.author }}</span>
            <span class="year">{{ cd.year }}</span>
        </div>
      </div>

      
       
      </div>
        
        
      </div>
    </div>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="./dist/js/main.js" charset="utf-8"></script>
    
</body>
</html>