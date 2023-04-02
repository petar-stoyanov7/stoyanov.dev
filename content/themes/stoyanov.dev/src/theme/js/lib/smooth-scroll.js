const localLinks = document.querySelectorAll('body a[href^="#"]');

localLinks.forEach((lnk) => {
  const href = lnk.href.split('#')[1];
  if ('#' === href) {
    return;
  }

  lnk.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById(href).scrollIntoView({behavior: 'smooth'});
  });
});
