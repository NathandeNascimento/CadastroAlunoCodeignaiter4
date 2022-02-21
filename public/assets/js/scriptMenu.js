
/*************** abertura do Dropdow ****************/
let arrow = document.querySelectorAll(".arrow"); //seleciona o elemento
for (var i = 0; i < arrow.length; i++) {     
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecionando o pai principal da seta
 arrowParent.classList.toggle("showMenu");
  });
}





