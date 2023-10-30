<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
         <?php include_once "header.php" ;?>
<style>

.gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery figure {
            margin: 5px;
            border: 1px solid #ccc;
        }

        .gallery figure img {
            width: 100%;
            height: auto;
        }

        .gallery figure figcaption {
            padding: 15px;
            text-align: center;
        }
        
        @media (max-width: 768px) {
    .banner-home {
        /* Adjust styles for screens up to 768px wide */
        /* For example, you can reduce font size or adjust margins here */
    }
}
    </style>
</head>
<body>
 
      <section id="page_banner" class="border_b">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h2>Gallery</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-right">
            <ol class="breadcrumb">
              <li><a href="#">You are here:</a></li>
              <li><a href="#">Home</a></li>
              <li class="active">Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="gallery">
        <figure>
            <a target="_blank" href="images/finance/bannar_1.jpg">
                <img src="images/finance/bannar_1.jpg" alt="Cinque Terre">
            </a>
            <figcaption>Add a description of the image here</figcaption>
        </figure>

        <figure>
            <a target="_blank" href="images/finance/bannar_2.jpg">
                <img src="images/finance/bannar_2.jpg" alt="Forest">
            </a>
            <figcaption>Add a description of the image here</figcaption>
        </figure>

        <figure>
            <a target="_blank" href="images/finance/bannar_1.jpg">
                <img src="images/finance/bannar_1.jpg" alt="Northern Lights">
            </a>
            <figcaption>Add a description of the image here</figcaption>
        </figure>

        <figure>
            <a target="_blank" href="images/finance/bannar_2.jpg">
                <img src="images/finance/bannar_2.jpg" alt="Mountains">
            </a>
            <figcaption>Add a description of the image here</figcaption>
        </figure>
    </div>
    
    
    
    
      <?php include_once "footer.php" ;?>
</body>
</html>





