<style>
    .scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.snap-center {
  scroll-snap-align: center;
}
.carousel-item {
  transition: opacity 0.3s ease;
}
</style>
<div class="bg-gray-50"></div>
<div class="relative min-h-screen px-4 mx-auto overflow-x-hidden max-w-7xl sm:px-6 lg:px-8 ">
  <section class="py-32">
    <p class="mt-2 text-6xl font-medium tracking-tighter text-gray-800 px-28">New Arrivals</p>

    <div class="relative flex items-center mt-16">
      <div id="carousel" class="relative flex items-center justify-center w-full gap-8 overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-pl-28 scroll-pr-8 overscroll-x-contain">

        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tina Yards" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">Thanks to BarelyHR, we’re now finding new candidates that we never would have found with our previous methods.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Tina Yards</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">VP of Human Resources, Protocol</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Amy Chase" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">BarelyHR made onboarding our new remote employees a breeze.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Amy Chase</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of Marketing, TaxPal</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Veronica Winton" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">I was able to create a new job posting in literally a few minutes.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Veronica Winton</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of People Operations, Pocket</p>
            </figcaption>
          </figure>
        </div>
        <!-- Add more testimonial cards as needed -->

        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tina Yards" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">Thanks to BarelyHR, we’re now finding new candidates that we never would have found with our previous methods.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Tina Yards</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">VP of Human Resources, Protocol</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Amy Chase" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">BarelyHR made onboarding our new remote employees a breeze.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Amy Chase</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of Marketing, TaxPal</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Veronica Winton" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">I was able to create a new job posting in literally a few minutes.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Veronica Winton</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of People Operations, Pocket</p>
            </figcaption>
          </figure>
        </div>
        <!-- Add more testimonial cards as needed -->

        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Tina Yards" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">Thanks to BarelyHR, we’re now finding new candidates that we never would have found with our previous methods.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Tina Yards</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">VP of Human Resources, Protocol</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Amy Chase" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">BarelyHR made onboarding our new remote employees a breeze.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Amy Chase</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of Marketing, TaxPal</p>
            </figcaption>
          </figure>
        </div>
        <div class="carousel-item relative flex aspect-[3/4] w-96 shrink-0 snap-start flex-col justify-end overflow-hidden rounded-3xl shadow-lg">
          <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="Veronica Winton" class="absolute inset-0 object-cover w-full h-full" />
          <div class="absolute inset-0 rounded-3xl bg-gradient-to-t from-black from-25% inset-ring inset-ring-gray-950/10"></div>
          <figure class="relative p-10">
            <blockquote class="relative text-xl/7 text-white before:absolute before:-ml-5 before:translate-x-full before:content-['“'] after:absolute after:content-['”']">I was able to create a new job posting in literally a few minutes.</blockquote>
            <figcaption class="pt-6 mt-6 border-t border-white/20">
              <p class="text-sm font-medium text-white">Veronica Winton</p>
              <p class="bg-gradient-to-r from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] bg-clip-text text-sm font-medium text-transparent">Head of People Operations, Pocket</p>
            </figcaption>
          </figure>
        </div>
        <!-- Add more testimonial cards as needed -->

      </div>
    </div>

    <div class="flex justify-between mt-16 mx-28">
      <div>
        <p class="text-gray-600 text-sm/6">Join professionals who trust BarelyHR for hiring and onboarding new employees.</p>
        <div class="flex mt-2 gap-x-2">
          <a href="#" class="font-medium text-pink-600 text-sm/6">Store
            <svg viewBox="0 0 20 20" fill="currentColor" class="inline-block w-5 h-5">
              <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>

      <div class="absolute flex justify-between w-[1215px] -mt-80 left-0 gap-x-4">
        <button id="prev" aria-label="Previous testimonial" class="inline-flex items-center justify-center w-12 h-12 bg-black rounded-full shadow-sm ring ring-gray-950/10">
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-white">
            <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
          </svg>
        </button>
        <button id="next" aria-label="Next testimonial" class="inline-flex items-center justify-center w-12 h-12 bg-black rounded-full shadow-sm ring ring-gray-950/10">
          <svg viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-white">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </section>
</div>