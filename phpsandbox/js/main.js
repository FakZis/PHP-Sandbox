// Set active nav element based on URL

setActive();

function setActive() {
  const page = window.location.href
  const elHome = document.getElementById('homeBtn');
  const elAbout = document.getElementById('aboutBtn');
  const elContact = document.getElementById('contactBtn');
  const elInfo = document.getElementById('infoBtn');

  switch (page) {
    case "http://localhost/html/php-ibb/sandbox/index.php":
      elHome.classList.add('active');
      elAbout.classList.remove('active');
      elContact.classList.remove('active');
      elInfo.classList.remove('active');
      break;
    case "http://localhost/html/php-ibb/sandbox/about.php":
      elHome.classList.remove('active');
      elAbout.classList.add('active');
      elContact.classList.remove('active');
      elInfo.classList.remove('active');
      break;
    case "http://localhost/html/php-ibb/sandbox/contact.php":
      elHome.classList.remove('active');
      elAbout.classList.remove('active');
      elContact.classList.add('active');
      elInfo.classList.remove('active');
      break;
    case "http://localhost/html/php-ibb/sandbox/info.php":
      elHome.classList.remove('active');
      elAbout.classList.remove('active');
      elContact.classList.remove('active');
      elInfo.classList.add('active');
      break;
  }
}
