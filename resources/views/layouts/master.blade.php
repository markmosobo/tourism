<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  @include('partials.header')

  <main class="main">

    <!-- Travel Hero Section -->
    <section id="travel-hero" class="travel-hero section dark-background">

      <div class="hero-background">
        <video autoplay="" muted="" loop="">
          <source src="assets/img/travel/video-2.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
      </div>

      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
              <h1 class="hero-title">Kenya's Wild Side Served Fresh</h1>
              <p class="hero-subtitle">Your passport to Kenya’s wild soul — adventure, culture, and epic memories await!</p>              <div class="hero-buttons">
                <a href="#" class="btn btn-primary me-3">Start Exploring</a>
                <a href="#" class="btn btn-outline">Browse Tours</a>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
              <div class="booking-form">
                <h3 class="form-title">Plan Your Adventure</h3>
                <form action="" class="">
                  <div class="form-group mb-3">
                    <label for="destination">Destination</label>
                    <select name="destination" id="destination" class="form-select" required="">
                      <option value="">Choose your destination</option>
                      <option value="europe">Europe</option>
                      <option value="asia">Asia</option>
                      <option value="america">America</option>
                      <option value="africa">Africa</option>
                      <option value="oceania">Oceania</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="checkin">Departure Date</label>
                        <input type="date" name="checkin" id="checkin" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="checkout">Return Date</label>
                        <input type="date" name="checkout" id="checkout" class="form-control" required="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="adults">Adults</label>
                        <select name="adults" id="adults" class="form-select" required="">
                          <option value="1">1 Adult</option>
                          <option value="2">2 Adults</option>
                          <option value="3">3 Adults</option>
                          <option value="4">4+ Adults</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="children">Children</label>
                        <select name="children" id="children" class="form-select">
                          <option value="0">No Children</option>
                          <option value="1">1 Child</option>
                          <option value="2">2 Children</option>
                          <option value="3">3+ Children</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group mb-3">
                    <label for="tour-type">Tour Type</label>
                    <select name="tour_type" id="tour-type" class="form-select" required="">
                      <option value="">Select tour type</option>
                      <option value="adventure">Adventure</option>
                      <option value="cultural">Cultural</option>
                      <option value="relaxation">Relaxation</option>
                      <option value="family">Family</option>
                      <option value="luxury">Luxury</option>
                    </select>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">Find Your Perfect Trip</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Travel Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- About Us Content -->
        <div class="row align-items-center mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
            <h3>Explore the World with Confidence</h3>
            <p>Discover Kenya like never before with Twende Tours — locals with a passion for adventure, culture, and wild beauty. From the Great Migration in Maasai Mara to the serene beaches of Diani and the historic charm of Lamu, we craft journeys that thrill, inspire, and stay with you forever.</p>
            <p>Our signature destinations include Maasai Mara, Amboseli, Tsavo, Mount Kenya, Lake Nakuru, and more hidden gems — all curated for unforgettable memories. Whether it’s safaris, hikes, or beach escapes, we make sure every experience feels epic, safe, and 100% Kenyan.</p>
            <div class="stats-row">
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Happy Travelers</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Countries Covered</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Years Experience</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image">
              <img src="assets/img/travel/showcase-8.webp" alt="Travel Experience" class="img-fluid rounded-4">
              <div class="experience-badge">
                <div class="experience-number">15+</div>
                <div class="experience-text">Years of Excellence</div>
              </div>
            </div>
          </div>
        </div><!-- End About Us Content -->

        <!-- Why Choose Us -->
        <div class="why-choose-section">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3>Why Choose Us for Your Next Adventure</h3>
              <p>At Twende Tours, we turn your travel dreams into unforgettable reality. From heart-pounding safaris to serene beach escapes, we bring Kenya’s wild beauty, culture, and thrills straight to you.</p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h4>Local Experts</h4>
                <p>Our guides know Kenya inside out — from hidden wildlife gems to secret cultural spots, they turn every trip into an authentic adventure.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Safe &amp; Secure</h4>
                <p>Your safety is our priority. Modern 4x4s, vetted lodges, and expert guidance mean worry-free adventures from start to finish.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-cash"></i>
                </div>
                <h4>Best Prices</h4>
                <p>Epic experiences shouldn’t break the bank. We craft itineraries that give maximum adventure at fair, transparent rates.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4>24/7 Support</h4>
                <p>Day or night, rain or shine, our team is always ready to help. From pre-trip planning to in-adventure support, we’ve got you covered.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h4>Signature Destinations</h4>
                <p>From Maasai Mara’s Great Migration to Diani’s turquoise beaches, we take you to Kenya’s most iconic and unforgettable spots.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h4>Premium Experience</h4>
                <p>Hand-picked lodges, gourmet meals, and personalized adventures ensure every moment is first-class, memorable, and uniquely Kenyan.</p>
              </div>
            </div>
          </div><!-- End Features Grid -->
        </div><!-- End Why Choose Us -->

      </div>

    </section><!-- /Why Us Section -->

    <!-- Featured Destinations Section -->
    <section id="featured-destinations" class="featured-destinations section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Destinations</h2>
        <div><span>Check Our</span> <span class="description-title">Signature Destinations</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="featured-destination">
              <div class="destination-overlay">
                <img src="assets/img/travel/destination-3.webp" alt="Maasai Mara" class="img-fluid">
                <div class="destination-info">
                  <span class="destination-tag">Popular Choice</span>
                  <h3>Maasai Mara National Reserve</h3>
                  <p class="location"><i class="bi bi-geo-alt-fill"></i> Kenya</p>
                  <p class="description">Witness the Great Migration, spot the Big Five, and sleep under a sky exploding with stars — pure heart-pounding magic.</p>
                  <div class="destination-meta">
                    <div class="tours-count">
                      <i class="bi bi-collection"></i>
                      <span>12 Safari Packages</span>
                    </div>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <span>4.9 (215)</span>
                    </div>
                  </div>
                  <div class="price-info">
                    <span class="starting-from">Starting from</span>
                    <span class="amount">KSh 220,000</span>
                  </div>
                  <a href="destination-details.html" class="explore-btn">
                    <span>Explore Now</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row g-3">

              <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/travel/destination-7.webp" alt="Amboseli National Park" class="img-fluid">
                    <div class="badge-offer">Best Value</div>
                  </div>
                  <div class="destination-details">
                    <h4>Amboseli National Park</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Kenya</p>
                    <p class="brief">Snow-capped Kilimanjaro as your backdrop while elephants roam free. Pink flamingos and dramatic sunrises await.</p>
                    <div class="stats-row">
                      <span class="tour-count"><i class="bi bi-calendar-check"></i> 10 Tours</span>
                      <span class="rating"><i class="bi bi-star-fill"></i> 4.8</span>
                      <span class="price">from KSh 180,000</span>
                    </div>
                    <a href="destination-details.html" class="quick-link">View Details <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/travel/destination-11.webp" alt="Mombasa & Diani Beach" class="img-fluid">
                  </div>
                  <div class="destination-details">
                    <h4>Mombasa & Diani Beach</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Kenya</p>
                    <p class="brief">White sand, turquoise waters, Swahili vibes, and fresh seafood — perfect for post-safari relaxation.</p>
                    <div class="stats-row">
                      <span class="tour-count"><i class="bi bi-calendar-check"></i> 8 Packages</span>
                      <span class="rating"><i class="bi bi-star-fill"></i> 4.7</span>
                      <span class="price">from KSh 150,000</span>
                    </div>
                    <a href="destination-details.html" class="quick-link">View Details <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                <div class="compact-destination">
                  <div class="destination-image">
                    <img src="assets/img/travel/destination-16.webp" alt="Lamu Island" class="img-fluid">
                    <div class="badge-offer limited">Limited Spots</div>
                  </div>
                  <div class="destination-details">
                    <h4>Lamu Island</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> Kenya</p>
                    <p class="brief">Step back in time in this UNESCO gem — donkey taxis, ancient stone houses, and dhow sails at sunset.</p>
                    <div class="stats-row">
                      <span class="tour-count"><i class="bi bi-calendar-check"></i> 5 Tours</span>
                      <span class="rating"><i class="bi bi-star-fill"></i> 4.9</span>
                      <span class="price">from KSh 200,000</span>
                    </div>
                    <a href="destination-details.html" class="quick-link">View Details <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Featured Destinations Section -->

    <!-- Featured Tours Section -->
    <section id="featured-tours" class="featured-tours section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Tours</h2>
        <div><span>Check Our</span> <span class="description-title">Signature Tours</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- Maasai Mara Safari -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="tour-card">
              <div class="tour-image">
                <img src="assets/img/travel/tour-1.webp" alt="Maasai Mara Safari" class="img-fluid" loading="lazy">
                <div class="tour-badge">Top Rated</div>
                <div class="tour-price">KSh 220,000</div>
              </div>
              <div class="tour-content">
                <h4>Maasai Mara Safari Adventure</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 5 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 6</span>
                </div>
                <p>Chase the Great Migration, spot the Big Five, and sleep under a sky full of stars in Kenya’s premier safari destination.</p>
                <div class="tour-highlights">
                  <span>Big Five</span>
                  <span>Great Migration</span>
                  <span>Luxury Lodges</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span>4.9 (120)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->

          <!-- Amboseli Tour -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="tour-card">
              <div class="tour-image">
                <img src="assets/img/travel/tour-2.webp" alt="Amboseli Safari" class="img-fluid" loading="lazy">
                <div class="tour-badge limited">Only 3 Spots!</div>
                <div class="tour-price">KSh 180,000</div>
              </div>
              <div class="tour-content">
                <h4>Amboseli National Park Tour</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 4 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 8</span>
                </div>
                <p>Marvel at snow-capped Kilimanjaro, giant roaming elephants, and stunning sunrises over vast African plains.</p>
                <div class="tour-highlights">
                  <span>Elephants</span>
                  <span>Kilimanjaro Views</span>
                  <span>Guided Safari</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <span>4.8 (85)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->

          <!-- Mombasa & Diani Beach -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="tour-card">
              <div class="tour-image">
                <img src="assets/img/travel/tour-4.webp" alt="Mombasa & Diani Beach" class="img-fluid" loading="lazy">
                <div class="tour-badge new">Newly Added</div>
                <div class="tour-price">KSh 150,000</div>
              </div>
              <div class="tour-content">
                <h4>Mombasa & Diani Beach Escape</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 5 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 10</span>
                </div>
                <p>Relax on white sand beaches, swim in turquoise waters, and savor fresh seafood along Kenya’s stunning coastline.</p>
                <div class="tour-highlights">
                  <span>Beaches</span>
                  <span>Swahili Culture</span>
                  <span>Luxury Resorts</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <span>4.7 (100)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->

          <!-- Lamu Island -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="tour-card">
              <div class="tour-image">
                <img src="assets/img/travel/tour-5.webp" alt="Lamu Island" class="img-fluid" loading="lazy">
                <div class="tour-badge">Popular Choice</div>
                <div class="tour-price">KSh 200,000</div>
              </div>
              <div class="tour-content">
                <h4>Lamu Island Cultural Escape</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 4 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 8</span>
                </div>
                <p>Explore this UNESCO gem with donkey taxis, ancient stone houses, and dhow sails at sunset for a romantic, cultural retreat.</p>
                <div class="tour-highlights">
                  <span>UNESCO Heritage</span>
                  <span>Culture</span>
                  <span>Relaxation</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span>4.9 (65)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->

          <!-- Mount Kenya & Lake Nakuru -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="tour-card">
              <div class="tour-image">
                <img src="assets/img/travel/tour-6.webp" alt="Mount Kenya & Lake Nakuru" class="img-fluid" loading="lazy">
                <div class="tour-badge cultural">Adventure</div>
                <div class="tour-price">KSh 180,000</div>
              </div>
              <div class="tour-content">
                <h4>Mount Kenya & Lake Nakuru Trek</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 6 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 8</span>
                </div>
                <p>Hike Africa’s second-highest peak or witness millions of flamingos at Lake Nakuru for a nature-filled adventure you’ll never forget.</p>
                <div class="tour-highlights">
                  <span>Hiking</span>
                  <span>Wildlife</span>
                  <span>Nature</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <span>4.8 (55)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
          <a href="tours.html" class="btn-view-all">View All Tours</a>
        </div>

      </div>

    </section><!-- /Featured Tours Section -->

    <!-- Testimonials Home Section -->

    <!-- /Testimonials Home Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="hero-content" data-aos="zoom-in" data-aos-delay="200">
          <div class="content-wrapper">
            <div class="badge-wrapper">
              <span class="promo-badge">Limited Time Offer</span>
            </div>
            <h2>Embark on Your Next Adventure with Twende Tours</h2>
            <p>Explore Kenya's hidden gems, from majestic savannahs to pristine coastal beaches. Our curated travel packages ensure unforgettable experiences for every traveler.</p>

            <div class="action-section">
              <div class="main-actions">
                <a href="destinations.html" class="btn btn-explore">
                  <i class="bi bi-compass"></i>
                  Explore Destinations
                </a>
                <a href="deals.html" class="btn btn-deals">
                  <i class="bi bi-percent"></i>
                  View Special Deals
                </a>
              </div>

              <div class="quick-contact">
                <span class="contact-label">Need guidance?</span>
                <a href="tel:+254700123456" class="contact-link">
                  <i class="bi bi-telephone"></i>
                  Call +254 700 123 456
                </a>
              </div>
            </div>
          </div>

          <div class="visual-element">
            <img src="assets/img/travel/showcase-3.webp" alt="Travel Adventure" class="hero-image" loading="lazy">
            <div class="image-overlay">
              <div class="stat-item">
                <span class="stat-number">150+</span>
                <span class="stat-label">Kenya Destinations</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">5K+</span>
                <span class="stat-label">Happy Travelers</span>
              </div>
            </div>
          </div>
        </div>

        <div class="newsletter-section" data-aos="fade-up" data-aos-delay="300">
          <div class="newsletter-card">
            <div class="newsletter-content">
              <div class="newsletter-icon">
                <i class="bi bi-envelope-heart"></i>
              </div>
              <div class="newsletter-text">
                <h3>Stay Updated</h3>
                <p>Receive exclusive safari offers, coastal retreats, and cultural tour updates straight to your inbox.</p>
              </div>
            </div>

            <form class="php-email-form newsletter-form" action="forms/newsletter.php" method="post">
              <div class="form-wrapper">
                <input type="email" name="email" class="email-input" placeholder="Your email address" required="">
                <button type="submit" class="subscribe-btn">
                  <i class="bi bi-arrow-right"></i>
                </button>
              </div>

              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Thank you! Check your inbox for the latest Twende Tours updates.</div>

              <div class="trust-indicators">
                <i class="bi bi-lock"></i>
                <span>We protect your privacy. Unsubscribe anytime.</span>
              </div>
            </form>
          </div>
        </div>

        <div class="benefits-showcase" data-aos="fade-up" data-aos-delay="400">
          <div class="benefits-header">
            <h3>Why Choose Twende Tours</h3>
            <p>Experience unforgettable journeys with our premium Kenyan adventures</p>
          </div>

          <div class="benefits-grid">
            <div class="benefit-card" data-aos="flip-left" data-aos-delay="450">
              <div class="benefit-visual">
                <div class="benefit-icon-wrap">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="benefit-pattern"></div>
              </div>
              <div class="benefit-content">
                <h4>Handpicked Kenyan Destinations</h4>
                <p>Our travel experts select only the best spots for authentic and memorable experiences.</p>
              </div>
            </div>

            <div class="benefit-card" data-aos="flip-left" data-aos-delay="500">
              <div class="benefit-visual">
                <div class="benefit-icon-wrap">
                  <i class="bi bi-award"></i>
                </div>
                <div class="benefit-pattern"></div>
              </div>
              <div class="benefit-content">
                <h4>Award-Winning Service</h4>
                <p>Twende Tours is recognized for excellence, with top-rated customer feedback and industry accolades.</p>
              </div>
            </div>

            <div class="benefit-card" data-aos="flip-left" data-aos-delay="550">
              <div class="benefit-visual">
                <div class="benefit-icon-wrap">
                  <i class="bi bi-heart"></i>
                </div>
                <div class="benefit-pattern"></div>
              </div>
              <div class="benefit-content">
                <h4>Personalized Travel Experiences</h4>
                <p>Every itinerary is tailored to your preferences, ensuring a unique adventure every time.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /Call To Action Section -->

  </main>

  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>