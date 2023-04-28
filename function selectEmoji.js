function selectEyes(element) {
  // Toggle "selected" class on the clicked emoji image
  
  // Remove "selected" class from all other emoji images
  const emojis = document.querySelectorAll('.eye-container')[0];  
  const images = emojis.getElementsByTagName('img');

  for (let i = 0; i < images.length; i++) {
    images[i].classList.remove('selected')
    images[i].style.border = "" ;
  }
  
  element.classList.add('selected');
  element.style.border = "2px solid #1eff00" ;
  
  // Update the selected radio button
  const radioButtons = document.getElementsByName('eye');
  for (let i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].value === element.id) {
      radioButtons[i].checked = true;
      break;
    }
  }
}


function selectmouth(element) {
  const emojis = document.querySelectorAll('.mouth-container')[0]; 
  const images = emojis.getElementsByTagName('img');
  console.log(images);

  for (let i = 0; i < images.length; i++) {
    images[i].classList.remove('selected')
    images[i].style.border = "" ;
  }
  element.classList.add('selected');
  element.style.border = "2px solid #1eff00" ;

  const radioButtons = document.getElementsByName('mouth');
  for (let i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].value === element.id) {
      radioButtons[i].checked = true;
      break;
    }
  }
}
function selectskin(element) {
  const emojis = document.querySelectorAll('.skin-container')[0]; 
  const images = emojis.getElementsByTagName('img');
  console.log(images);

  for (let i = 0; i < images.length; i++) {
    images[i].classList.remove('selected')
    images[i].style.border = "" ;
  }
  element.classList.add('selected');
  element.style.border = "2px solid #1eff00" ;

  const radioButtons = document.getElementsByName('skin');
  for (let i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].value === element.id) {
      radioButtons[i].checked = true;
      break;
    }
  }
}

