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
    flex-wrap: wrap; /* Allows images to wrap to the next row */
}

.image {
    flex-basis: calc(25% - 10px); /* 25% width for each image with a 10px margin between them */
    margin: 5px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}

.image img {
    max-width: 100%;
    height: auto;
}

.image:hover {
    transform: scale(1.5);z-index:1;
}


    </style>
</head>
<body>
 <!--banner-->
      <section id="page_banner" class="border_b" style="background: url(images/quality.jpg) no-repeat 0 0;
    background-size: cover;
    background-attachment: fixed;" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h2 style="color:#002e5b">Fabrication Gallery</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-right">
            <ol class="breadcrumb">
              <li><a href="#">You are here:</a></li>
              <li><a href="#">Home</a></li>
              <li class="active">Fabrication Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    
 <div class="gallery">
        <div class="image">
            <img src="images/contact.jpg" alt="Image 1">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 2">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 3">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 4">
        </div>
        
        <div class="image">
            <img src="images/contact.jpg" alt="Image 5">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 6">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 7">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 8">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 1">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 2">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 3">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 4">
        </div>
        
        <div class="image">
            <img src="images/contact.jpg" alt="Image 5">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 6">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 7">
        </div>
        <div class="image">
            <img src="images/contact.jpg" alt="Image 8">
        </div>

    </div>
 
      <?php include_once "footer.php" ;?>
</body>
</html>
