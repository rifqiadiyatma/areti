(() => {
  'use strict'
  const storedTheme = localStorage.getItem('areti-theme')
  storedTheme ? document.documentElement.setAttribute('data-bs-theme', storedTheme) : document.documentElement.setAttribute('data-bs-theme', 'light')

  window.addEventListener('DOMContentLoaded', () => {
    if (storedTheme && storedTheme == 'dark') {
      document.querySelector("#dark-mode").querySelectorAll('i')[0].classList.remove('fa-moon')
      document.querySelector("#dark-mode").querySelectorAll('i')[0].classList.add('fa-sun')
      document.querySelector("#dark-mode").classList.remove('btn-outline-secondary')
      document.querySelector("#dark-mode").classList.add('btn-primary')
    }
  })
})()
