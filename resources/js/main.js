// console.log('hello word');
// let typewriter1 = document.querySelector('.typewriter1');
// let typewriter2 = document.querySelector('.typewriter2');
// let addArticle = document.querySelector('#addArticle');

// setTimeout(() => {
//     typewriter1.classList.add('typewriter');
//     typewriter1.classList.remove('invisible');
// }, 2000);
// setTimeout(() => {
//     typewriter1.style.border = 'none';
// }, 4850);
// setTimeout(() => {
//     typewriter2.classList.add('typewriter');
//     typewriter2.classList.remove('invisible');
// }, 5000);
// setTimeout(() => {
//     typewriter2.style.border = 'none';
// }, 7600);
// setTimeout(() => {
//     addArticle.classList.remove('opacity-0');
//     addArticle.classList.add('opacity-100');
// }, 7700);




// let typewriter1 = document.querySelectorAll('.typewriter1');
// let typewriter2 = document.querySelectorAll('.typewriter2');
let addArticle = document.querySelector('#addArticle');
// let typeWriters = document.querySelectorAll('.typewriter');
// let typeWriters2 = document.querySelectorAll('.typewriter-text2');

// typewriter1.forEach(el => {
//     setTimeout(() => {
//         el.classList.add('typewriter');
//         el.classList.remove('invisible');
//     }, 2000);
//     setTimeout(() => {
//         el.style.border = 'none';
//     }, 4850);
// });

// typewriter1.forEach((el, index) => {
//     if (index === 0) {
//         setTimeout(() => {
//             el.classList.add('typewriter');
//             el.classList.remove('invisible');
//         }, 2000);
//         setTimeout(() => {
//             el.style.border = 'none';
//         }, 4850);
//     } else {
//             // el.classList.add('typewriter');
//             el.classList.remove('invisible');
//             // el.style.border = 'none';
//     }
// });

// FUNZIONANTE PRIMA DEL CAMBIO HOME
/* typeWriters.forEach((el, index) => {
  let text = el.innerText;
  el.style.visibility = "hidden";
  if (index === 0) {
    setTimeout(() => {
      el.style.visibility = "visible";
      el.style.setProperty('--characters', text.length);
    }, 2000);
  } else {
    el.classList.remove('typewriter')
    el.style.visibility = "visible";
    el.style.setProperty('--characters', text.length);
  }

}); */



// FUNZIONANTE PRIMA DEL CAMBIO HOME
/* typeWriters2.forEach((el, index) => {
  let text = el.innerText;
  el.style.visibility = "hidden";
  if (index === 0) {
    setTimeout(() => {
      el.classList.add('typewriter')
      el.style.visibility = "visible";
      el.style.setProperty('--characters', text.length);
    }, 5000);
  } else {
    let observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            el.classList.add('typewriter');
            el.style.visibility = "visible";
            el.style.setProperty('--characters', text.length);
            observer.disconnect();
          }, 2000);
        }
      });
    });
    observer.observe(el);
  }
}); */




// let intervallo2 = (time1, time2) => new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             let el = entry.target;
//             setTimeout(() => {
//                 el.classList.remove('invisible');
//                 el.classList.add('typewriter');
//             }, time1);
//             setTimeout(() => {
//                 el.style.border = 'none';
//             }, time2);
//         }
//     })
// })
// typewriter2.forEach(el, index => {
//     if (index === 0) {
//         intervallo2(5000, 20600).observe(el);
//     } else {
//         intervallo2(1000, 15600).observe(el);
//     }
// });

// let intervallo2 = (time1, time2) => new IntersectionObserver(entries => {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             let el = entry.target;
//             setTimeout(() => {
//                 el.classList.remove('invisible');
//                 el.classList.add('typewriter');
//             }, time1);
//             setTimeout(() => {
//                 el.style.border = 'none';
//             }, time2);
//         }
//     });
// });

// Creiamo un singolo osservatore per ciascuna configurazione di tempo
// let observer1 = intervallo2(5000, 20600);
// let observer2 = intervallo2(1000, 15600);

// typewriter2.forEach((el, index) => {
//     if (index === 0) {
//         observer1.observe(el);
//     } else {
//         observer2.observe(el);
//     }
// });



// setTimeout(() => {
//     typewriter1.classList.add('typewriter');
//     typewriter1.classList.remove('invisible');
// }, 2000);
// setTimeout(() => {
//     typewriter1.style.border = 'none';
// }, 4850);
// setTimeout(() => {
//     typewriter2.classList.add('typewriter');
//     typewriter2.classList.remove('invisible');
// }, 5000);
// setTimeout(() => {
//     typewriter2.style.border = 'none';
// }, 7600);

// setTimeout(() => {
//   addArticle.classList.remove('opacity-0');
//   addArticle.classList.add('opacity-100');
// }, 7700);

let observerArticle = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        addArticle.classList.remove('opacity-0');
        addArticle.classList.add('opacity-100');
      }, 1000);
    }
  });
});
// INSERITO NELLA DARK MODE
// observerArticle.observe(addArticle);



//INIZIO DEL CODICE PER LA DARK-MODE

let btnlight = document.querySelectorAll('.btnlight')
let dashboard_btn = document.querySelector('.dashboard_btn')
let textElements = document.querySelectorAll('h1:not(footer *):not(.dark), p:not(footer *), h2:not(.typewriter):not(footer *), h3:not(footer *), h4:not(.typewriter-text):not(footer *):not(.card-title):not(.typewriter), h5:not(.typewriter-text2):not(footer *), h6:not(.dark):not(footer *), span:not(.fa-solid):not(.dark), button:not(.btnlight):not(footer *):not(.btn):not(.dashboard_btn), a:not(.nav-link):not(footer *):not(.dropdown-item):not(.dark):not(.page-link');
let footer = document.querySelector('footer')
let containerDetail = document.querySelector('#data-container-detail')
let nightmodeIcon = document.querySelector('#nightmodeIcon')

//funzione che setta nel localStorage la dark se la trova impostata oppure non la mette se non la trova
function setDark() {
  if (document.body.classList.contains('dark-mode')) {
    localStorage.setItem('darkMode', 'true');
  } else {
    localStorage.setItem('darkMode', 'false');
  }
}

// Funzione per controllare se la dark-mode è attiva o no al caricamento della pagina
function checkDarkMode() {
  let darkMode = localStorage.getItem('darkMode');
  if (darkMode === 'true') {
    document.body.classList.add('dark-mode');
    document.body.style.visibility = 'visible';
    if (footer) {
      footer.classList.toggle('dark-mode-footer');
      // containerDetail.style.borderColor="#F5DEBA";
    }
    if (containerDetail) {
      containerDetail.classList.toggle('data-container-detail-c2');
    }
    btnlight.forEach(el => {
      el.classList.toggle('button-clicked');
      el.firstElementChild.classList.add('icon-clicked');
    })
    nightmodeIcon.classList.toggle('fa-moon')
    nightmodeIcon.classList.toggle('fa-sun')
    textElements.forEach(el => {
      el.style.color = '#F5DEBA';  // Colore chiaro
    })
    if (dashboard_btn.classList.contains('dashboard_btn')) {
      dashboard_btn.classList.toggle('c-5');
      dashboard_btn.style.color = '#F5DEBA';  // Colore chiaro
    }
  }
}

// Esegui la funzione di check al caricamanto degli asset html
document.addEventListener('DOMContentLoaded', () => {
  document.body.style.visibility = 'visible';
  checkDarkMode();

  //observer che fa apparire il btn aggiungi articolo, deve stare qui altrimenti il codice non lo legge e va in bug
  observerArticle.observe(addArticle);
});

btnlight.forEach(el => {
  el.addEventListener('click', () => {
    // Toggle della classe per il corpo e il bottone
    document.body.classList.toggle('dark-mode');
    if (footer) {
      footer.classList.toggle('dark-mode-footer');
      // containerDetail.style.borderColor="#F5DEBA";
    }
    // bottne dashboard dashboard_btn
    if (dashboard_btn) {
      dashboard_btn.classList.toggle('c-5');
      dashboard_btn.classList.toggle('c-2');
      // el.style.color = '#F5DEBA';  // Colore chiaro
      console.log('entraaaa2');
    }
    if (containerDetail) {
      containerDetail.classList.toggle('data-container-detail-c2');
    }
    el.classList.toggle('button-clicked');
    nightmodeIcon.classList.toggle('fa-moon')
    nightmodeIcon.classList.toggle('fa-sun')
    el.firstElementChild.classList.toggle('icon-clicked');

    // Memorizza lo stato della modalità scura nel localStorage
    setDark()

    textElements.forEach(el => {
      if (document.body.classList.contains('dark-mode')) {
        el.style.color = '#F5DEBA';  // Colore chiaro
      } else {
        if (!el.classList.contains('c-7')) {
          el.style.color = '#2c2c31';  // Colore scuro
        } else {
          el.style.color = '#595856';  // Colore grigio chiaro
        }
        // if (el.classList.contains('dashboard_btn')) {
        //   el.classList.toggle('c-5');
        //   el.classList.toggle('c-2');
        //   // el.style.color = '#F5DEBA';  // Colore chiaro
        //   console.log('entraaaa2');
        // }
      }
    });
  })
});


// document.addEventListener('DOMContentLoaded', function () {
//   Livewire.on('wishlistUpdated', (data) => {
//       let articleId = data.articleId;
//       let action = data.action;
//       let wishlistDiv = document.getElementById(`wishlist-${articleId}`);

//       if (wishlistDiv) {
//           // Usa Livewire per aggiornare il componente
//           if (action === 'add') {
//               Livewire.emit('wishlistUpdated', articleId, 'add');
//           } else {
//               Livewire.emit('wishlistUpdated', articleId, 'remove');
//           }
//       }
//   });
// });

// let wishlistadd = document.querySelectorAll('.wishlistadd');
// let wishlistremove = document.querySelectorAll('.wishlistremove');

// // el.addEventListener('click', () => {

// wishlistadd.forEach(el => {
//   el.addEventListener('click', () => {
//     el.classList.add('d-none');
//   })
// })
// wishlistremove.forEach(el => {
//   el.addEventListener('click', () => {
//     el.classList.add('d-none');
//   })
// })