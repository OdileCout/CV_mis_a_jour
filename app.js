(function(){
//Menu fixe en scroll
var scrollY = function(){
    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");

    return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
  }
/**
On ecoute, lorsqu'on scorll
Si le menu commence à être invisible, on les fixe
**/
var element = document.querySelector('.navigation-list');
var rect = element.getBoundingClientRect();
var top = rect.top + scrollY();
var width = rect.width;
var onscroll = function(){
  var hasScroolClass = element.classList.contains('fixed');
  if(scrollY() > top && !hasScroolClass){
    element.classList.add('fixed');
    element.style.width = width + "px";
  }else if(scrollY() < top && hasScroolClass){
    element.classList.remove('fixed');

  }
}
window.addEventListener('scroll', onscroll);
})();

/** Pour tout les block: ça l'effet apparition en défilement **/
(function(){
  const ratio = .1
const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.remove('reveal')
      observer.unobserve(entry.target)
    }
  })
}

document.documentElement.classList.add('reveal-loaded')
window.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
  })
})

})();

/** pour le texte de le présentation **/
(function(){
  var p = document.querySelector('.présentation-text');
window.setInterval(function(){
  p.classList.toggle('blue');
}, 1000);
})();

/** Pour le block de la formation 
(function(){
  var selectBlock = document.querySelectorAll('.training-summary-img');
  for (var i = 0; i < selectBlock.length ; i++) {
    (selectBlock[i]);
    (selectBlock[i]).addEventListener('mouseover', function(){
      this.nextElementSibling.classList.add('training-summary-img23');
    });
    (selectBlock[i]).addEventListener('mouseout', function(){
      this.parentNode.removeChild(this);
    
    });
  }
})();**/

/** pour apparaitre les volets des experiences **/
(function(){
  var buton = document.querySelectorAll('.visible-block');
  for (var i = 0; i < buton.length; i++) {
    (buton[i]);
    (buton[i]).addEventListener('click', function(){
    this.nextElementSibling.classList.add('works-visible');
    this.parentNode.removeChild(this);
    })
  }
})();

(function(){
    /** Menu collant
Lorsque l'on clique sur un onglet, 
on retire la class active de l'onglet actif
on ajoute la class active de l'onglet actuel
**/

  var afficherOnglet = function(a){
    var div = a.parentNode.parentNode.parentNode;
    var li = a.parentNode;
    /** Si l'onglet est déjà active, au clique ne fait rien**/
    if (li.classList.contains('active')) {
      return false;
    }
    if(div.classList.contains('divNetworks')){
          /**retirer la classe active au clique **/
    div.querySelector('.tabs .active').classList.remove('active');
    /** mettre la class active sur l'onglet cliquer **/
    li.classList.add('active');
    //retirer la class active sur le contenu actif
    div.querySelector('.languages.active').classList.remove('active');
    //Mettre la classe active dans la div qui correspond à l'onglet actif
    div.querySelector(a.getAttribute('href')).classList.add('active');
    }
  }

  var tabs = document.querySelectorAll('.tabs a');
  for (var i = 0; i < tabs.length; i++) {
  /** On prend l'onglet et au click, on execute la fonction **/
    tabs[i].addEventListener('mouseover', function(e){
    afficherOnglet(this);
    })
  }

/*
Je récupère le hash
Ajouter la class active sur le lien href ="hash"
Retirer la class active sur les autres onglets
Afficher et masquer les contenus
*/
  var hash = window.location.hash;
  var a = document.querySelector('a[href="'+ hash +'"]');
  if (a !== null && !a.classList.contains('active')) {
  afficherOnglet(a);
  } 
})();

