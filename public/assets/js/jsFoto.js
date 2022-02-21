'use strict'

let photo = document.getElementById('imgPhoto'); //pega o nome do ID do img
let file = document.getElementById('foto');// pega o  id  do input


photo.addEventListener('click', () =>{ file.click();//adiciona evento de click
});


/********** subistitui a foto pela foto selecionada************** */
file.addEventListener('change', (event) => {
   let reader = new FileReader();

   reader.onload = () => {
       photo.src = reader.result;
      
   }

    reader.readAsDataURL(file.files[0]); // foto antiga por foto selecionada
  
  
   

} );