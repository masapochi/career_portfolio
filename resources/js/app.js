// Contact form with Vue.js
axios.defaults.headers.common = {
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
};

const VeeValidate = window.VeeValidate;
const ValidationObserver = VeeValidate.ValidationObserver; // Watch form
const ValidationProvider = VeeValidate.ValidationProvider; // Watch each field
const VeeValidateRules = window.VeeValidateRules; // Validation rules

Vue.component('validation-provider', VeeValidate.ValidationProvider);
Vue.component('validation-observer', VeeValidate.ValidationObserver);
Object.keys(VeeValidateRules).forEach(function (rule) {
  VeeValidate.extend(rule, VeeValidateRules[rule]);
});

VeeValidate.configure({
  classes: {
    valid: 'is-valid',
    invalid: 'is-invalid',
    dirty: ['is-dirty', 'is-dirty'], // multiple classes per flag!
  }
});

VeeValidate.localize("ja", {
  code: "ja",
  messages: {
    alpha: "アルファベットのみ使用できます",
    alpha_num: "英数字のみ使用できます",
    alpha_dash: "英数字とハイフン、アンダースコアのみ使用できます",
    alpha_spaces: "アルファベットと空白のみ使用できます",
    between: "{min}から{max}の間でなければなりません",
    confirmed: "｢{_field_}｣が一致しません",
    digits: "{length}桁の数字でなければなりません",
    dimensions: "幅{width}px、高さ{height}px以内でなければなりません",
    email: "有効なメールアドレスではありません",
    excluded: "不正な値です",
    ext: "有効なファイル形式ではありません",
    image: "有効な画像形式ではありません",
    is: "｢{_field_}｣が一致しません",
    length: "{length}文字でなければなりません",
    max_value: "{max}以下でなければなりません",
    max: "{length}文字以内にしてください",
    mimes: "有効なファイル形式ではありません",
    min_value: "{min}以上でなければなりません",
    min: "{length}文字以上でなければなりません",
    numeric: "数字のみ使用できます",
    integer: "整数値のみ使用できます",
    oneOf: "有効な値ではありません",
    regex: "｢{_field_}｣のフォーマットが正しくありません",
    required: "入力必須項目です",
    required_if: "入力必須項目です",
    size: "{size}KB以内でなければなりません"
  }
});

new Vue({
  el: '#contact',
  data: {
    formLabelClass: 'form-label fw-bold font-serif',
    formInputClass: 'contact-input form-control form-control-lg rounded-0',
    notification: '',
    state: '',
    isProcessing: false,
    form: {
      name: '',
      email: '',
      subject: '',
      message: ''
    },
  },
  methods: {
    onSubmit() {
      this.isProcessing = true;
      axios.post('/api/message', this.form)
        .then(res => {
          this.notification = res.data.notification;
          this.state = res.data.state;
          Object.keys(this.form).forEach(prop => this.form[prop] = '');
          this.$refs.observer.reset();
          this.isProcessing = false;
        })
        .catch(error => {
          this.notification = error.response.data.notification;
          this.state = error.response.data.state;
          this.isProcessing = false;
        })


    }
  }
});

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
          // markers: true,
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
