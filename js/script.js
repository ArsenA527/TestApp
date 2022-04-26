const form = document.getElementById('form');
const firstname = document.getElementById('name');
const surname = document.getElementById('surname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', (e) => {
  e.preventDefault();
})

function checkInputs() {
  let flag = false;
  const firstnameValue = firstname.value.trim();
  const surnameValue = surname.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (firstnameValue === '') {
    setErrorFor(firstname, 'Имя пользователя не может быть пустым');
    flag = false;
  } else {
    setSuccessFor(firstname);
    flag = true;
  }

  if (surnameValue === '') {
    setErrorFor(surname, 'Фамилия пользователя не может быть пустым');
    flag = false;
  } else {
    setSuccessFor(surname);
    flag = true;
  }

  if (emailValue === '') {
    setErrorFor(email, 'Эл. адрес не может быть пустым');
    flag = false;
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, 'Эл. адрес не является допустимым');
    flag = false;
  } else {
    setSuccessFor(email);
    flag = true;
  }

  if (passwordValue === '') {
    setErrorFor(password, 'Пароль не может быть пустым');
    flag = false;
  } else {
    setSuccessFor(password);
    flag = true;
  }

  if (password2Value === '') {
    setErrorFor(password2, 'Пароль не может быть пустым');
    flag = false;
  } else if (password2Value !== passwordValue) {
    setErrorFor(password2, 'Пароли не совпадают');
    flag = false;
  } else {
    setSuccessFor(password2);
    flag = true;
  }

  return flag;
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  small.innerText = message;
  formControl.className = 'form-control error';
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}


function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
