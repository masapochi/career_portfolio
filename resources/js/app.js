document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  // Home section animation

  (() => {
    const heading = document.getElementById('js-hero-heading');
    const subtitle = document.getElementById('js-hero-subtitle');
    const title = document.getElementById('js-hero-title');
    const cta = document.getElementById('js-hero-cta');

    const tlDefaults = { defaults: { autoAlpha: 0, ease: 'power2.ease' } };

    gsap.timeline(tlDefaults)
      .to([subtitle, title], { autoAlpha: 0, y: 30 })
      .from(heading, { scale: 0, transformOrigin: 'bottom center' })
      .to([subtitle, title], { autoAlpha: 1, y: 0, stagger: .5 }, '+=.5')
      .from(cta, { y: 30 })
  })();

  (() => {

    if (window.innerWidth < 992) {

      const toggler = document.getElementById('js-toggler');
      const barMid = document.getElementById('js-bar-mid');
      const barTop = document.getElementById('js-bar-top');
      const barBot = document.getElementById('js-bar-bot');
      const navbarContent = document.getElementById('js-navbar-content');
      const navbarList = document.getElementById('js-navbar-list');
      const navItems = navbarList.querySelectorAll('.nav-item');

      const menuTl = gsap.timeline({ defaults: { duration: .25, ease: 'power2.ease' }, })
        .to(navbarContent, { clipPath: 'circle(100%)' })
        .from(navbarList, { autoAlpha: 0 })
        .from(navItems, { autoAlpha: 0, y: 30 })

      const barTl = gsap.timeline({ defaults: { duration: .1, ease: 'power2.ease' } })
        .to(barMid, { xPercent: 100, autoAlpha: 0 })
        .to(barTop, { y: 8 })
        .to(barBot, { y: -8 }, '<')
        .to(toggler, { rotation: 360 })
        .to(barTop, { rotation: 45 }, '+=.1')
        .to(barBot, { rotation: -45 }, '<')

      const master = gsap.timeline()
        .add(barTl, '<')
        .add(menuTl, '<')
        .pause();

      gsap.utils.toArray([toggler, ...navItems]).forEach(link => {
        link.addEventListener('click', () => {
          navbarContent.classList.toggle('show');
          if (navbarContent.classList.contains('show')) {
            master.play()
          } else {
            master.reverse();
          }
        }, false)
      })
    }
  })();


  // Section title and content animation.
  (() => {
    const sections = ['#services', '#works', '#biography', '#skills', '#contact'];
    gsap.utils.toArray(sections).forEach((sec, i) => {
      const title = sec.querySelector('.title');
      const content = sec.querySelector('.content');

      gsap.timeline({
        defaults: {
          autoAlpha: 0,
          ease: 'power2.ease',
        },
        scrollTrigger: {
          trigger: sec,
          toggleActions: "play reverse play reverse"
        }
      })
        .from(title, { y: 100 }, '+=.5')
        .from(content, { y: 100 }, '+=.1')
    });
  })();


  // Scroll-up button show/hide
  (() => {
    const gotop = document.getElementById('js-gotop');
    window.addEventListener('scroll', () => {
      let scroll = window.scrollY;

      if (scroll > 300) {
        gotop.classList.add('show');
      } else {
        gotop.classList.remove('show');
      }
    }, false);
  })();

});
