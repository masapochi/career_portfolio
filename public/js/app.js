(()=>{var e={80:()=>{function e(e){return function(e){if(Array.isArray(e))return t(e)}(e)||function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}(e)||function(e,r){if(!e)return;if("string"==typeof e)return t(e,r);var o=Object.prototype.toString.call(e).slice(8,-1);"Object"===o&&e.constructor&&(o=e.constructor.name);if("Map"===o||"Set"===o)return Array.from(e);if("Arguments"===o||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(o))return t(e,r)}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,o=new Array(t);r<t;r++)o[r]=e[r];return o}document.addEventListener("DOMContentLoaded",(function(){var t,r,o,n,a;gsap.registerPlugin(ScrollTrigger),t=document.getElementById("js-hero-heading"),r=document.getElementById("js-hero-subtitle"),o=document.getElementById("js-hero-title"),n=document.getElementById("js-hero-cta"),gsap.timeline({defaults:{autoAlpha:0,ease:"power2.ease"}}).to([r,o],{autoAlpha:0,y:30}).from(t,{scale:0,transformOrigin:"bottom center"}).to([r,o],{autoAlpha:1,y:0,stagger:.5},"+=.5").from(n,{y:30}),function(){if(window.innerWidth<992){var t=document.getElementById("js-toggler"),r=document.getElementById("js-bar-mid"),o=document.getElementById("js-bar-top"),n=document.getElementById("js-bar-bot"),a=document.getElementById("js-navbar-content"),s=document.getElementById("js-navbar-list"),i=s.querySelectorAll(".nav-item"),l=gsap.timeline({defaults:{duration:.25,ease:"power2.ease"}}).to(a,{clipPath:"circle(100%)"}).from(s,{autoAlpha:0}).from(i,{autoAlpha:0,y:30}),c=gsap.timeline({defaults:{duration:.1,ease:"power2.ease"}}).to(r,{xPercent:100,autoAlpha:0}).to(o,{y:8}).to(n,{y:-8},"<").to(t,{rotation:360}).to(o,{rotation:45},"+=.1").to(n,{rotation:-45},"<"),u=gsap.timeline().add(c,"<").add(l,"<").pause();gsap.utils.toArray([t].concat(e(i))).forEach((function(e){e.addEventListener("click",(function(){a.classList.toggle("show"),a.classList.contains("show")?u.play():u.reverse()}),!1)}))}}(),gsap.utils.toArray(["#services","#works","#biography","#skills","#contact"]).forEach((function(e,t){var r=e.querySelector(".title"),o=e.querySelector(".content");gsap.timeline({defaults:{autoAlpha:0,ease:"power2.ease"},scrollTrigger:{trigger:e,toggleActions:"play reverse play reverse"}}).from(r,{y:100},"+=.5").from(o,{y:100},"+=.1")})),a=document.getElementById("js-gotop"),window.addEventListener("scroll",(function(){window.scrollY>300?a.classList.add("show"):a.classList.remove("show")}),!1)}))},425:()=>{}},t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={exports:{}};return e[o](n,n.exports,r),n.exports}r.m=e,r.x=e=>{},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0},t=[[80],[425]],o=e=>{},n=(n,a)=>{for(var s,i,[l,c,u,d]=a,m=0,p=[];m<l.length;m++)i=l[m],r.o(e,i)&&e[i]&&p.push(e[i][0]),e[i]=0;for(s in c)r.o(c,s)&&(r.m[s]=c[s]);for(u&&u(r),n&&n(a);p.length;)p.shift()();return d&&t.push.apply(t,d),o()},a=self.webpackChunk=self.webpackChunk||[];function s(){for(var o,n=0;n<t.length;n++){for(var a=t[n],s=!0,i=1;i<a.length;i++){var l=a[i];0!==e[l]&&(s=!1)}s&&(t.splice(n--,1),o=r(r.s=a[0]))}return 0===t.length&&(r.x(),r.x=e=>{}),o}a.forEach(n.bind(null,0)),a.push=n.bind(null,a.push.bind(a));var i=r.x;r.x=()=>(r.x=i||(e=>{}),(o=s)())})(),r.x()})();
//# sourceMappingURL=app.js.map