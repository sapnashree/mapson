
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
         <?php include_once "header.php" ;?>
         </head>
    <!-- Page Banner Start -->
    <section id="page_banner" class="border_b" style="background: url(images/contact.jpg) no-repeat 0 0;
    background-size: cover;
    background-attachment: fixed;" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h2>Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-right">
            <ol class="breadcrumb">
              <li><a href="#">You are here:</a></li>
              <li><a href="#">Home</a></li>
              <li class="active">Products</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Banner End -->

     <!-- Project Details Start -->
     <section id="solution" class="p-t-100 p-b-100">
      <div class="container">
          <div class="row">
           <div class="col-md-9_1 col-sm-12 col-xs-12">
             <div class="pdf-container">
                   <iframe id="pdf-iframe" width="100%" height="100%" src="images/pdf/newmanhole.pdf"></iframe>
              </div>
           </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
             <div class="solution_tabs_1">
                <h3 style="background-color:#00aeee;padding: 10px;color: white;">Products</h3>
                   <ul>
                       <li class=""><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Manhole Cover</a></li>
                        <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Bend</a></li>
                        <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Collars</a></li>
                         <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Cross</a></li>
                         <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Flanges</a></li>
                          <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Reducers</a></li>
                          <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Reducing tee</a></li>
                           <li><a href="javascript:void(0);" onclick="openPDF('images/pdf/newmanhole.pdf')">Tee </a></li>
                    </ul>
              </div>
          </div>
        </div>

       </div>

  </section>
  <!-- Project Details End -->
    <?php include_once "footer.php" ;?>
 <script>
  function openPDF(pdfUrl) {
    var pdfIframe = document.getElementById("pdf-iframe");
    pdfIframe.src = pdfUrl;
  }
</script>
  </body>

</html>

