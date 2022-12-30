const input = document.getElementById("search");
const jobdetail = document.querySelectorAll(".job-card");

let timer;
let sec=500;

function liveSearch(){
    for(let i=0; i<jobdetail.length; i++){
        if(jobdetail[i].innerText.toLowerCase().includes(input.value.toLowerCase())){
            jobdetail[i].classList.remove("hidden");
        }
        else{
            jobdetail[i].classList.add("hidden");
        }
    }
}

input.addEventListener("keyup",function(){
    clearTimeout(timer);
    timer=setTimeout(liveSearch,1000);
})