/*Inicio*/
/*Sistema para expandir menu lateral e rete-lo*/
/*Sistema para mudar fundo de branco para preto e vice e versa*/

//It's a const for control the theme of the page.




const dark = "white", white = "dark";


const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


   // var tema = localStorage.setItem("tema",white);
    //modeText.innerText = tema ;

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    
})

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
})

/*Dark Mode*/

modeSwitch.addEventListener("click", () => {
    const temaAtual = localStorage.getItem("tema");

    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        
        console.log(temaAtual);
        modeText.innerText = temaAtual ;
        localStorage.setItem("tema",white);

    
    } else {
        modeText.innerText = temaAtual;
        localStorage.setItem("tema",dark);
        console.log(temaAtual);
        
    }     
    /*Fim*/  /* !!!!!Mexer só em caso de erro em algo!!!!! */

});

var temaA = localStorage.getItem("tema")
modeText.innerText = temaA;
body.classList.toggle(temaA);

  // var a = document.getElementsByTagName("body")
 //a[0].setAttribute("class", temaA);