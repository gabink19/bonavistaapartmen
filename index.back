<?php
require_once 'koneksi.php'; // Buat file koneksi.php untuk koneksi database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="BonaVista Apartments — premium residences with full facilities, tennis court schedule, services, and contact info." />
    <meta name="author" content="BonaVista Apartments" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
    <title>BonaVista Apartments</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css?v=1.2.1" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css?v=1.2.1" />
    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css?v=1.2.1" />
    <link rel="stylesheet" href="assets/css/owl.css?v=1.2.1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.min.css">
    <style>
      .gallery-cell {
          width: 300px;
          /* height: 150px; */
          margin-right: 10px;
          /* background: #8C8; */
          counter-increment: gallery-cell;
          text-align: center;
      }
          
      /* cell number */
      .gallery-cell:before {
          display: block;
          text-align: center;
          /* content: counter(gallery-cell); */
          /* line-height: 150px; */
          font-size: 80px;
          color: white;
      }
      .gallery-cell a p {
          color: #ffffff;
          font-size: 16px;
          font-weight: 600;
          margin-bottom: 5px;
          margin-top: 10px;
      }
      .gallery-cell img {
          width: 100%;
          height: auto;
          transition: transform 0.3s ease-in-out;
      }

      .gallery-cell:hover img {
          transform: scale(1.07); /* Memperbesar gambar sedikit saat hover */
      }
      .gallery-cell:hover p {
          transform: scale(1.07); /* Memperbesar gambar sedikit saat hover */
      }
      /* Mengubah warna dot yang aktif */
      .flickity-page-dots .dot {
          background-color: white;
      }

      /* Mengubah warna dot saat hover */
      .flickity-page-dots .dot:hover {
          background-color: rgba(255, 255, 255, 0.7); /* Agak transparan saat hover */
      }

      /* Mengubah warna dot yang aktif */
      .flickity-page-dots .dot.is-selected {
          background-color: white; /* Warna putih untuk dot aktif */
      }
      .feature .feature-text {
          padding-left: 30px;
      }

      .feature .feature-text h3 {
          margin: 0 0 10px 0;
          color: #ffffff;
          font-size: 25px;
          font-weight: 600;
      }

      .feature .feature-text p {
          margin: 0;
          color: #ffffff;
          font-size: 18px;
          font-weight: 400;
      }

      .feature .col-md-12:nth-child(2n) [class^="flaticon-"]::before,
      .feature .col-md-12:nth-child(2n) h3,
      .feature .col-md-12:nth-child(2n) p {
          color: #ffffff;
      }

    </style>
  </head>
  <body style="overflow-x: hidden;">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader" aria-hidden="true">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" role="banner">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav" aria-label="Main Navigation">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo" aria-label="BonaVista Apartments Home">
                <img src="assets/images/logobonavista.png" alt="BonaVista Apartments Logo" style="height: 48px;" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                <li class="scroll-to-section"><a href="#features">About</a></li>
                <li class="scroll-to-section"><a href="#our-classes">Facilities</a></li>
                <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                <li class="" style="display: none;"><a href="#"></a></li>
              </ul>
              <a class="menu-trigger" aria-label="Open menu"><span>Menu</span></a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top" style="background-image: url('assets/images/background.jpeg');">
      <img src="assets/images/background1.jpeg" alt="Lifestyle at BonaVista" id="bg-video" />

      <div class="video-overlay header-text">
        <div class="caption">
          <h6>find your perfect home</h6>
          <h2>The Total Living Environment <em>BonaVista Apartments</em></h2>
          <div class="main-button scroll-to-section"><a href="#features">See our apartments</a></div>
        </div>
      </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2>About Bonavista Apartments</h2>
              <img src="assets/images/line-dec.png" alt="divider" />
              <p style="text-align: justify;">
                Bonauli Real Estate is a property developer focused on creating homes, offices, and commercial buildings of lasting value, recognized for its environmentally conscious approach by Jakarta authorities. Founded in 1972, the company was a founding member of Real Estate Indonesia (REI). Its principal founder, Mr. Sjarif Batanghari, served four terms on the REI Board of Directors and now serves as Honorary Director.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="features-items">
              <li class="feature-item">
                <div class="left-icon"></div>
                <div class="right-content">
                  <p style="text-align: justify;">
                    The name Bonauli comes from the Batak language, where <em>Bona</em> means “Source/Beginning” and <em>Uli</em> means “Beautiful.” Its logo features stylized initials symbolizing land parcels. Completed projects in Jakarta include Bona Indah Gardens (30 ha) near BonaVista Apartments, Bona Sarana Indah (12 ha), and Batu Ceper Indah Housing Estates (10 ha).
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="features-items">
              <li class="feature-item">
                <div class="left-icon"></div>
                <div class="right-content">
                  <p style="text-align: justify;">
                    Projects under development include the 40‑hectare Bona Karta estate in the vibrant industrial town of Cilegon, West Java. Bona Karta encompasses townhomes, shophouses, the Cilegon International School, and the future four‑star Cilegon Lee Gardens Hotel, a joint venture with Denmark's Maersk Line and Hong Kong's Lee Gardens Group.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
      <div class="container" style="max-width: 100%;">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="cta-content">
              <div class="col-md-12 fact-left wow slideInLeft">
              <div class="col-lg-12 carousel-flick">
                  <div class="gallery js-flickity"
                      data-flickity-options='{ "wrapAround": true, "cellAlign": "center", "contain": true, "autoPlay": 3000 }'>
                          <?php
                            $query = "SELECT 
                                          l.*, 
                                          li.image_url
                                      FROM 
                                          listings l
                                      LEFT JOIN (
                                          SELECT 
                                              listings_id, 
                                              image_url
                                          FROM 
                                              listings_images
                                          WHERE 
                                              id IN (
                                                  SELECT MIN(id) FROM listings_images GROUP BY listings_id
                                              )
                                      ) li ON l.id = li.listings_id";
                            $result = mysqli_query($conn, $query);
                            $rowCount = $result ? mysqli_num_rows($result) : 0;

                            // Membuat array untuk menyimpan data
                            $dataArray = [];

                            // Ambil semua data yang ada
                            if ($result && $rowCount > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $dataArray[] = $row;
                                }
                                // Jika rowCount kurang dari 6, ulangi data yang sudah ada sampai jumlahnya mencapai 6
                                // while (count($dataArray) < 2 && $rowCount > 0) {
                                //     $dataArray[] = $dataArray[count($dataArray) % $rowCount];
                                // }
                                foreach ($dataArray as $data) :
                                    $gambar = !empty($data['image_url']) ? $data['image_url'] : 'assets/images/notfound.jpg';
                            ?>
                                <div class="gallery-cell">
                                    <a href="javascript:void(0);" 
                                      class="open-modal"
                                      data-id="<?php echo $data['id']; ?>"
                                      data-img="<?php echo $gambar; ?>"
                                      data-type="<?php echo strtoupper($data['type'] ?? ''); ?>"
                                      data-price="Rp <?php echo isset($data['price']) ? number_format($data['price'], 0, ',', '.') : '0'; ?>">
                                        <img src="<?php echo $gambar; ?>" style="height: 150px; width: 260px; max-width: 100%;">
                                        <p style="text-align: center;">
                                          <span class="badge badge-primary" style="font-size: 15px;">
                                            <?php echo strtoupper($data['type'] ?? ''); ?>
                                          </span>
                                        </p>
                                        <p style="text-align: center;">Rp <?php echo isset($data['price']) ? number_format($data['price'], 0, ',', '.') : '0'; ?></p>
                                    </a>
                                </div>
                            <?php
                                endforeach;
                            } else {
                                echo '<div class="gallery-cell"><p style="color:white;">No listings available.</p></div>';
                            }
                            ?>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2>Our <em>Facilities</em></h2>
              <img src="assets/images/line-dec.png" alt="divider" />
              <p>All the sports and recreation facilities you need, in close proximity to your apartment.</p>
            </div>
          </div>
        </div>
        <div class="row" id="tabs">
          <div class="col-lg-4">
            <ul>
              <li><a href="#tabs-1"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Lobby &amp; EV Charger</a></li>
              <li><a href="#tabs-2"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Swimming Pool</a></li>
              <li><a href="#tabs-3"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Playground &amp; Jogging</a></li>
              <li><a href="#tabs-4"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Tennis &amp; Football</a></li>
              <li><a href="#tabs-5"><img src="assets/images/logobonavistakecil1.png" alt="icon" />Palm Plaza &amp; Garden</a></li>
            </ul>
          </div>
          <div class="col-lg-8">
            <section class="tabs-content">
              <article id="tabs-1">
                <img src="assets/images/collage_result.jpg" alt="Lobby and EV Charger" />
                <h4>Lobby &amp; EV Charger in Bonavista Apartments</h4>
                <p style="text-align: justify;">A welcoming lobby designed for comfort and style, serving as a pleasant meeting point for residents and guests. Equipped with a modern EV charging station, ensuring convenient and sustainable electric vehicle charging right on the premises.</p>
              </article>
              <article id="tabs-2">
                <img src="assets/images/pool_collage.jpg" alt="Swimming Pools" />
                <h4>Children’s and Adults’ Swimming Pool</h4>
                <p style="text-align: justify;">A well-maintained swimming pool with dedicated areas for both children and adults, providing a safe and enjoyable space for family recreation and relaxation.</p>
              </article>
              <article id="tabs-3">
                <img src="assets/images/playground_garden_collage.jpg" alt="Playground and Jogging Track" />
                <h4>Playground &amp; Jogging</h4>
                <p style="text-align: justify;">A safe and fun playground for children, complemented by a scenic jogging track that offers residents a refreshing outdoor space for exercise and leisure.</p>
              </article>
              <article id="tabs-4">
                <img src="assets/images/sport_collage.jpg" alt="Tennis and Football Facilities" />
                <h4>Tennis &amp; Football</h4>
                <p style="text-align: justify;">Well-maintained tennis and football facilities, providing residents with excellent spaces for sports, recreation, and an active lifestyle.</p>
              </article>
              <article id="tabs-5">
                <img src="assets/images/garden_collage.jpg" alt="Palm Plaza and Garden" />
                <h4>Palm Plaza &amp; Garden</h4>
                <p style="text-align: justify;">Palm Plaza and Garden offer a serene outdoor setting surrounded by lush greenery and elegant landscaping, perfect for relaxation, social gatherings, and leisurely walks.</p>
              </article>
            </section>
          </div>
          <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
              <div class="col-lg-12">
                <div class="loop owl-carousel">
                  <?php
                  $galleryDir = 'gallery/';
                  $images = glob($galleryDir . '*.{jpg}', GLOB_BRACE);

                  if ($images && count($images) > 0) {
                    $chunkSize = 2;
                    $chunks = array_chunk($images, $chunkSize);
                    foreach ($chunks as $chunk) {
                      echo '<div class="item">';
                      foreach ($chunk as $img) {
                        $imgName = basename($img);
                        // Optional: Extract title from filename, e.g. "Operasi Katarak" from "operasi_katarak.jpg"
                        $title = ucwords(str_replace(['-', '_'], ' ', pathinfo($imgName, PATHINFO_FILENAME)));
                        echo '<div class="portfolio-item">
                            <div class="thumb">
                              <img src="' . $img . '" alt="' . htmlspecialchars($title) . '">
                              <div class="hover-content">
                                <div class="inner-content">
                                  <a href="#"><h4>' . $title . '</h4></a>
                                  <span>2024</span>
                                </div>
                              </div>
                            </div>
                            </div>';
                      }
                      echo '</div>';
                    }
                  } else {
                    echo '<div class="item"><div class="portfolio-item"><div class="thumb"><div class="hover-content"><div class="inner-content"><span>No gallery images found.</span></div></div></div></div></div>';
                  }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Schedule Start ***** -->
    <section class="section" id="schedule">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading dark-bg">
              <h2>Tennis Court <em>Schedule</em></h2>
              <img src="assets/images/line-dec.png" alt="divider" />
              <!-- Updated English narrative -->
              <p style="text-align: justify;">
                Game, set, match—on your terms. Our digital booking makes it simple to lock in your preferred playtime, whether you love sunrise rallies or evening doubles. Fair-use rules keep access equitable, while regular maintenance ensures consistently great playing conditions. Book in seconds and enjoy a seamless court experience from start to finish.
              </p>
              <br>
              <ul style="text-align:justify; list-style: disc; margin: 0 auto; max-width: 780px; color: white;">
                <li><strong>Fair use:</strong> maximum 2 hours per week per unit.</li>
                <li><strong>Booking opens:</strong> every Monday at 00:01 for the upcoming week.</li>
                <li><strong>Cancellation window:</strong> free up your slot up to 1 hour before play.</li>
                <li><strong>Maintenance:</strong> any temporary closures will be posted below the calendar.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <iframe title="BonaVista Tennis Court Booking" src="https://booking.bonavistaapartments.com/booking-inframe" width="100%" height="100%" frameborder="0" style="display: block; border: 0; min-height: 600px; height: 110vh; overflow: hidden; border-radius: 10px;"></iframe>
          <div class="col-12 text-center my-4" style="margin-top: -100px !important;">
            <li class="main-button"><a href="https://booking.bonavistaapartments.com/">Book a Court Now</a></li>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Schedule End ***** -->

    <!-- ***** Services Start ***** -->
    <section class="section" id="trainers">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2>Our <em>Services</em></h2>
              <img src="assets/images/line-dec.png" alt="divider" />
              <p style="text-align: justify;"><strong>Need Convenience? Services Galore.</strong></p>
              <!-- Polished English narrative -->
              <p style="text-align: justify;">
                Experience a lifestyle where everything you need is right at your doorstep. From world‑class sports facilities and lush green spaces to everyday essentials and dining, every service is thoughtfully designed to make life easier and more enjoyable. Whether you’re unwinding, staying active, shopping, or socializing, you’ll find it all within minutes of home. Convenience has never been this effortless—this is more than a residence; it’s a community that caters to your every need.
              </p>
            </div>
          </div>
        </div>
        <div class="row" role="list">
          <div class="col-lg-4" role="listitem">
            <div class="trainer-item">
              <div class="image-thumb"><img src="assets/images/bonavistaservice1.jpg" alt="On‑site minimarket and laundry" /></div>
              <div class="down-content">
                <p style="text-align: justify;">
                  Onsite minimarket and drycleaning/laundry, Service‑oriented property management with on‑site maintenance Optional maid service and food delivery partners.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4" role="listitem">
            <div class="trainer-item">
              <div class="image-thumb"><img src="assets/images/bonavistaservice2.jpg" alt="Connectivity and parking" /></div>
              <div class="down-content">
                <p style="text-align: justify;">
                  Satellite and cable TV (including premium channels and NHK). Ample private covered parking. High‑speed internet via cable modem connections.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4" role="listitem">
            <div class="trainer-item">
              <div class="image-thumb"><img src="assets/images/bonavistaservice3.jpg" alt="Backup power and BBQ area" /></div>
              <div class="down-content">
                <p style="text-align: justify;">
                  Backup generators ensure a reliable power supply, while the poolside BBQ area sets the scene for private gatherings and celebrations with family and friends.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Services End ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div id="map">
              <iframe
                title="BonaVista Apartments Location Map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.734898003699!2d106.7845086!3d-6.298525199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1d84740310d%3A0xede1afae77f95eb3!2sBona%20Vista%20Apartement!5e0!3m2!1sid!2sid!4v1754901830772!5m2!1sid!2sid"
                width="100%"
                height="600px"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="whatsapp-float" onclick="openWhatsApp()" role="button" aria-label="Chat via WhatsApp">
        <img src="assets/images/waicon.png" alt="WhatsApp icon" />
      </div>

      <script>
        function openWhatsApp() {
          // Use international format if available, e.g., 62818xxxxxxx
          var phoneNumber = "6285932680177";
          var message = "Hello, I'd like to ask about your services.";
          var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
          window.open(url, "_blank");
        }
      </script>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>BonaVista Apartments - 2025</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js?v=1.2.1"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Global Init -->
    <script src="assets/js/custom.js?v=1.2.1"></script>

    <!-- Modal Bootstrap -->
<div class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="carouselModalLabel">Detail Listing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="modalImages" class="mb-3"></div>
        <div id="modalType" class="mb-2"></div>
        <div id="modalPrice" class="mb-2"></div>
        <div id="modalDesc" class="mb-2"></div>
      </div>
    </div>
  </div>
</div>
    <script>
$(document).ready(function() {
  $('.gallery').on('click', '.open-modal', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
      url: 'listing_detail.php',
      type: 'GET',
      data: { id: id },
      dataType: 'json',
      success: function(res) {
        // Foto-foto
        var imgHtml = '';
        if (res.images && res.images.length > 2) {
          imgHtml += '<div class="modal-flickity js-flickity" style="width:100%;" data-flickity-options=\'{ "wrapAround": true, "cellAlign": "center", "contain": true }\'>';
          res.images.forEach(function(img) {
            imgHtml += '<div class="gallery-cell"><img src="' + (img || 'assets/images/notfound.jpg') + '" class="modal-thumb" style="height:200px;width:auto;margin:5px;border-radius:8px;object-fit:cover;cursor:pointer;" onclick="window.open(\''+(img || 'assets/images/notfound.jpg')+'\', \'_blank\');"></div>';
          });
          imgHtml += '</div>';
        } else if (res.images && res.images.length) {
          imgHtml += '<div class="d-flex flex-wrap justify-content-center">';
          res.images.forEach(function(img) {
            imgHtml += '<img src="' + (img || 'assets/images/notfound.jpg') + '" class="modal-thumb" style="height:200px;width:auto;margin:5px;border-radius:8px;object-fit:cover;cursor:pointer;" onclick="window.open(\''+(img || 'assets/images/notfound.jpg')+'\', \'_blank\');">';
          });
          imgHtml += '</div>';
        } else {
          imgHtml = '<div class="text-center text-muted">No images available.</div>';
        }
        $('#modalImages').html(imgHtml);

        // Info lain
        $('#modalType').html('<span class="badge badge-primary" style="font-size: 15px;">'+(res.type || '-')+'</span>');
        $('#modalPrice').text(res.price || '-');
        $('#modalDesc').html('<strong>Deskripsi:</strong> <br>' + (res.desc || '-'));
        $('#carouselModal').modal('show');
      },
      error: function() {
        $('#modalImages').html('<div class="text-center text-danger">Failed to load data.</div>');
        $('#modalType').html('');
        $('#modalPrice').html('');
        $('#modalDesc').html('');
        $('#carouselModal').modal('show');
      }
    });
  });

  $('#carouselModal').on('shown.bs.modal', function () {
    if ($('.modal-flickity').length) {
      $('.modal-flickity').flickity({
        wrapAround: true,
        cellAlign: 'center',
        contain: true
      });
      $('.modal-flickity').flickity('resize');
    }
  });

  $('#carouselModal').on('hidden.bs.modal', function () {
    if ($('.modal-flickity').length) {
      $('.modal-flickity').flickity('destroy');
    }
  });
});
</script>
  </body>
</html>
