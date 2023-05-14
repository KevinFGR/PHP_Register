
document.getElementById("btn-git").addEventListener("click", () => {copy('btn-git','img1')});
document.getElementById("btn-admim").addEventListener("click", ()=>{copy('btn-admim','img2')});
document.getElementById("btn-directory").addEventListener("click", () => {copy('btn-directory','img3')});

function copy(id,img) {
    let btn = document.getElementById(id);
    let text = btn.value;
    navigator.clipboard.writeText(text);
    let imgId = "#"+img;
    var image = document.querySelector(imgId);
    image.setAttribute('src', 'img/check.png');
}