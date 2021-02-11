if (window.innerWidth < 992) {

  const body = document.querySelector('body');
  const toggler = document.getElementById('js-toggler');
  const globalMenu = document.getElementById('js-navbar-list');
  console.log(globalMenu);
  const menuItems = globalMenu.querySelectorAll('.nav-item');
  console.log(menuItems);
  const navbarContent = document.getElementById('js-navbar-content');
  const menuTl = gsap.timeline({ defaults: { duration: .1, ease: 'power2.ease' }, })
    .to(navbarContent, { clipPath: 'circle(100%)' })
    .from('.hidden-menu-list', { autoAlpha: 0 })
    .from('.hidden-menu-list li', { autoAlpha: 0, y: 20, stagger: .1 })

  const barTl = gsap.timeline({ defaults: { duration: .1, ease: 'power3.ease' } })
    .to('.bar-mid', { xPercent: 100, autoAlpha: 0 })
    .to('.bar-top', { y: 8 })
    .to('.bar-bot', { y: -8 }, '<')
    .to('.toggler', { rotation: 360 })
    .to('.bar-top', { rotation: 45 }, '+=.1')
    .to('.bar-bot', { rotation: -45 }, '<')

  const master = gsap.timeline()
    .add(barTl, '<')
    .add(menuTl, '<')
    .pause();

  gsap.utils.toArray([toggler, ...menuItems]).forEach(link => {
    link.addEventListener('click', () => {
      // body.classList.toggle('fixed');
      navbarContent.classList.toggle('show');
      if (navbarContent.classList.contains('show')) {
        master.play()
      } else {
        master.reverse();
      }
    }, false)
  })

}


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

const sections = ['#services', '#works', '#biography', '#skills', '#contact'];
gsap.utils.toArray(sections).forEach((sec, i) => {
  const title = sec.querySelector('.title');
  const content = sec.querySelector('.content');

  const tl = gsap.timeline({
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
