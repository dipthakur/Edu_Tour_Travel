<?php include('include/header.php');?>

 <!-- content body start -->
<!-- <div  class=""> -->

<div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(assets/images/bg/page_title_bg.jpg);">
      <ul>
        <li><a href="javascript:;">Type Of Tours</a></li>
      </ul>
    </div>

  <div class="container ">
    <div class="type-of-tour pt-4 pb-4 row">
      <!-- Sports Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/sport-tour.jpg" class="card-img-top" alt="Sports Tours">
          <div class="card-body">
            <h5 class="card-title">Sports Tours</h5>
            <p class="card-text">
  <span class="short-text">
    Combine travel with athletic pursuits. Our sports tours include training sessions, friendly matches, and opportunities to watch professional games.
  </span>
  <span class="full-text" style="display: none;">
    Combine travel with athletic pursuits. Our sports tours include training sessions, friendly matches, and opportunities to watch professional games, fostering teamwork and sportsmanship.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>

          </div>
        </div>
      </div>
      <!-- Educational Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/edu-tour.jpg" class="card-img-top" alt="Educational Tours">
          <div class="card-body">
            <h5 class="card-title">Educational Tours</h5>
            <p class="card-text">
  <span class="short-text">
    These trips offer students hands-on experiences that deepen their understanding of subjects like history, science, and culture.
  </span>
  <span class="full-text" style="display: none;">
    These trips offer students hands-on experiences that deepen their understanding of subjects like history, science, and culture. Whether it’s exploring ancient ruins, visiting a science museum, or engaging with local communities, students gain insights that go beyond the pages of a textbook. Educational trips also encourage personal growth. Students learn to navigate new environments, work collaboratively, and develop a global perspective. These experiences build confidence, curiosity, and a lifelong love of learning.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>
          </div>
        </div>
      </div>
      <!-- Another Educational Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/Industry-Specific-Tours.jpg" class="card-img-top" alt="Educational Tours">
          <div class="card-body">
            <h5 class="card-title">Industry Specific Tours</h5>
            <p class="card-text">
  <span class="short-text">
    We offer tailored tours that cater to specific industries and areas of expertise, such as photography, painting, design, and more.
  </span>
  <span class="full-text" style="display: none;">
    We offer tailored tours that cater to specific industries and areas of expertise, such as photography, painting, design, and more. These specialized tours are designed for enthusiasts and professionals alike, providing unique opportunities to deepen their skills and knowledge in inspiring environments. Whether you’re a budding artist or an established professional, our specialised tours will elevate your expertise and ignite your passion.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>

          </div>
        </div>
      </div>
      <!-- Another Educational Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/Culture-Heritage-tours.jpg" class="card-img-top" alt="Educational Tours">
          <div class="card-body">
            <h5 class="card-title">Culture & Heritage tours</h5>
            <p class="card-text">
  <span class="short-text">
    Explore historical sites, ancient monuments, and architectural wonders.  Students will gain a deeper understanding
  </span>
  <span class="full-text" style="display: none;">
  of the past and its influence on the present. Explore historical sites, ancient monuments, and architectural wonders. Students will gain a deeper understanding of the past and its influence on the present. Immerse in the traditions, festivals, and daily life of different communities. Participate in workshops, attend local performances, and engage with cultural activities.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>

          </div>
        </div>
      </div>
      <!-- Another Educational Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/Amusement-Tour.jpg" class="card-img-top" alt="Educational Tours">
          <div class="card-body ">
            <h5 class="card-title">Amusement Tour</h5>
            <p class="card-text">
  <span class="short-text">
    Visit theme parks and entertainment hubs. These tours are designed to provide fun and relaxation.
  </span>
  <span class="full-text" style="display: none;">
    Visit theme parks and entertainment hubs. These tours are designed to provide fun and relaxation, balancing educational experiences with recreational activities.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>

          </div>
        </div>
      </div>
      <!-- Another Educational Tours Card -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card tour-img p-2 mt-3">
          <img src="assets/lang-tour.jpg" class="card-img-top" alt="Educational Tours">
          <div class="card-body">
            <h5 class="card-title">Language Tours</h5>
            <p class="card-text">
  <span class="short-text">
    Travel to countries where students can practice and improve their language skills through immersive experiences.
  </span>
  <span class="full-text" style="display: none;">
    Travel to countries where students can practice and improve their language skills through immersive experiences, such as homestays, language classes, and cultural exchanges.
  </span>
  <a href="javascript:void(0);" class="toggle-text">See More</a>
</p>

          </div>
        </div>
      </div>
      <!-- Repeat for other tours -->
    </div>
  </div>
<!-- </div> -->
<!-- content body end -->



<script>
    document.addEventListener("DOMContentLoaded", () => {
  const toggleLinks = document.querySelectorAll(".toggle-text");

  toggleLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const cardText = e.target.closest(".card-text");
      const shortText = cardText.querySelector(".short-text");
      const fullText = cardText.querySelector(".full-text");

      if (fullText.style.display === "none") {
        fullText.style.display = "inline";
        shortText.style.display = "none";
        e.target.textContent = "See Less";
      } else {
        fullText.style.display = "none";
        shortText.style.display = "inline";
        e.target.textContent = "See More";
      }
    });
  });
});

</script>


<?php include('include/footer.php');?>