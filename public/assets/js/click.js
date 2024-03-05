function close_filtr() {
    let close = document.querySelector('.clos');
    let open = document.querySelector('.open');
    let input = document.querySelectorAll('.multiple-filtr')
    for (let i = 0; i < input.length; i++) {
      input[i].classList.add('none');
    }
    close.classList.add('none');
    open.classList.remove('none');
  }
  function filtr() {
    let close = document.querySelector('.clos');
    let open = document.querySelector('.open');
    let input = document.querySelectorAll('.multiple-filtr')
    for (let i = 0; i < input.length; i++) {
      input[i].classList.remove('none');
    }
    close.classList.remove('none');
    open.classList.add('none')
  }