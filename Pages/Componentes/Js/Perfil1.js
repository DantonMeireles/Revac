const ediçãoDiv = document.querySelector(".edição-btns");
const btnEditar = document.querySelector(".btnEditar");


const aviso = document.querySelector(".aviso");

const Nome = document.querySelector(".Nome-input");
const Email = document.querySelector(".Email-input");
const Instituicao = document.querySelector(".Instuicao-input");
const Estado = document.querySelector(".Estado-input");
var inputs = [Nome,Email,Instituicao,Estado,];

const imgEsenha = document.querySelector(".imgEsenha-div");
function editar(){
    btnEditar.style.display="none";
    ediçãoDiv.style.display="flex";
    imgEsenha.style.display="block";
    aviso.style.left="62%";
    aviso.style.bottom="45px";
    for(let i=0; i<=5; i++ ){
        inputs[i].disabled=false;
        inputs[i].style.color="black";
        inputs[i].style.boxShadow=" 0 1px 15px rgba(207, 207, 207, 0.568)";
    }
}
function cancelarEdit(){
    btnEditar.style.display="block";
    ediçãoDiv.style.display="none";
    imgEsenha.style.display="none";
    aviso.style.left="50%";
    aviso.style.bottom="78px";
    for(let i=0; i<=5; i++ ){
        inputs[i].disabled=true;
        inputs[i].style.color="rgb(163, 163, 163)";
        inputs[i].style.boxShadow="none";
        
    }
    verInfo();
}
const salvamento = document.querySelector(".salvar");
function salvar(){
    salvamento.style.display="block";
}
function closeSalvar(){
    salvamento.style.display="none";
}

function confirmarSalvar(){
    salvamento.style.display="none";
    btnEditar.style.display="block";
    ediçãoDiv.style.display="none";
    imgEsenha.style.display="none";
    aviso.style.left="50%";
    aviso.style.bottom="78px";
    for(let i=0; i<=5; i++ ){
        inputs[i].disabled=true;
        inputs[i].style.color="rgb(163, 163, 163)";
        inputs[i].style.boxShadow="none";
        
    }

}

const excluimento = document.querySelector(".excluir");
function excluir(){
    excluimento.style.display="block";
}
function closeExcluir(){
    excluimento.style.display="none";
    
}

const alteramento = document.querySelector(".alterar-senha");
function alterar(){
    alteramento.style.display="block";
}
function closeAlterar(){
    alteramento.style.display="none";
}
function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.querySelector(".preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
    
}
document.getElementById("nova-foto").addEventListener("change", readImage, false);

async function verInfo(){
    const data = await fetch("../Controller/php/infoUser.php");
    const json = await data.json();
    if(json.error){
        location.href = "../";
    } else {
        console.log(json);
        document.getElementById("Nome").value = json.NOME;
        document.getElementById("img").src = `./assets/img/profile pic/${json.FOTO}`;
        document.getElementById("Email").value = json.EMAIL;
        document.getElementById("Instituicao").value = json.INSTITUICAO;
        document.getElementById("Estado").value = json.ESTADO;

        const estadoOption = document.createElement("option");
        estadoOption.value = json.ESTADO;
        estadoOption.textContent = json.ESTADO;
        estadoOption.selected = true;
        estadoOption.style.display = "none";
        document.getElementById("Estado").appendChild(EstadoOption);

        const instituicaoOption = document.createElement("option");
        instituicaoOption.value = json.INSTITUICAO;
        instituicaoOption.textContent = json.INSTITUICAO;
        instituicaoOption.selected = true;
        instituicaoOption.style.display = "none";
        document.getElementById("Instituicao").appendChild(instituicaoOption);
    }
}

window.onload = verInfo();

const form = document.getElementById("myForm");

form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const data = await fetch("../Controller/php/updateUser.php", {
        method: 'post',
        body: new FormData(form)
    });
    const json = await data.json();
    console.log(json);
    if(json!==true){
        document.getElementById("msgErro").innerHTML = json;
    } else {
        document.getElementById("msgErro").innerHTML = "";
    }
    confirmarSalvar();
    verInfo();
});

const formSenha = document.getElementById("formSenha");

formSenha.addEventListener("submit", async (e) => {
    e.preventDefault();
    const data = await fetch("../Controller/php/updateSenha.php", {
        method: 'post',
        body: new FormData(formSenha)
    });
    const json = await data.json();
    console.log(json);
    if(json.error){
        document. getElementById("msgSenha").textContent = json.error;
    } else {
        closeAlterar();
    }
});

async function confirmExcluir() {
    const data = await fetch("../Controller/php/deleteConta.php?delete=true");
    const json = await data.json();
    console.log(json);
}