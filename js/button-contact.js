var previousWindowWidth = window.innerWidth; 

function applyChanges() {
  var windowWidth = window.innerWidth;

  if (windowWidth >= 768) {
    var lastMenuItem = document.querySelector('#menu-menu-header li:last-child a');

    if (lastMenuItem && !lastMenuItem.classList.contains('button')) {
      lastMenuItem.classList.add('button');
      lastMenuItem.classList.add('button-green');

      var outerSpan = document.createElement('span');
      var innerSpan = document.createElement('span');

      innerSpan.innerText = lastMenuItem.innerText;

      outerSpan.appendChild(innerSpan);

      lastMenuItem.innerText = '';

      lastMenuItem.appendChild(outerSpan);
    }
  } else {
    var lastMenuItem = document.querySelector('#menu-menu-header li:last-child a');

    if (lastMenuItem && lastMenuItem.classList.contains('button')) {
      lastMenuItem.classList.remove('button');
      lastMenuItem.classList.remove('button-green');
      lastMenuItem.innerHTML = 'Contact';
    }
  }

  previousWindowWidth = windowWidth;
}


applyChanges();

setInterval(applyChanges, 500);
