document.addEventListener("DOMContentLoaded", function() {
  const carousel = document.getElementById("carousel");
  const nextButton = document.getElementById("next");
  const prevButton = document.getElementById("prev");

  nextButton.addEventListener("click", () => {
    carousel.scrollBy({
      left: carousel.offsetWidth,
      behavior: "smooth"
    });
  });

  prevButton.addEventListener("click", () => {
    carousel.scrollBy({
      left: -carousel.offsetWidth,
      behavior: "smooth"
    });
  });

  const observerOptions = {
    root: carousel,
    rootMargin: "0px",
    threshold: 0.5
  };

  const observerCallback = (entries) => {
    entries.forEach((entry) => {
      if (entry.intersectionRatio > 0.5) {
        entry.target.style.opacity = "1";
      } else {
        entry.target.style.opacity = "0.5";
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  document.querySelectorAll(".carousel-item").forEach((item) => {
    observer.observe(item);
  });

  // Trigger scroll event to initialize opacity based on initial view
  carousel.dispatchEvent(new Event("scroll"));
});



// maps 
var map = L.map('map').setView([40.717192,-74.012042], 17);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// add a marker in the given location, attach some popup content to it and open the popup
L.marker([40.717192,-74.012042]).addTo(map)
    .bindPopup('The Borough of Manhattan Community College.')
    .openPopup();


