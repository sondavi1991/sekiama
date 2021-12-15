var glide = new Glide('.glide', {
  type: 'carousel',
  focusAt: 'center',
  perView: 3,
  breakpoints: {
    1024: {
      perView: 2
    },
    600: {
      perView: 1
    }
  }
});
glide.mount();

var glides = new Glide('.glides', {
  type: 'carousel',
  focusAt: 'center',
  perView: 3,
  breakpoints: {
    1024: {
      perView: 2
    },
    600: {
      perView: 1
    }
  }
});
glides.mount();

var glides = new Glide('.glide_testimonials', {
  type: 'carousel',
  perView: 2,
  autoplay: 2000,
  breakpoints: {
    1024: {
      perView: 2
    },
    600: {
      perView: 1
    }
  }
});
glides.mount();