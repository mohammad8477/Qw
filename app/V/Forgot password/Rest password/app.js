let input= document.querySelector("#Input");
let repeatInput=document.querySelector("#resetInput");
let text=document.querySelector(".text-compartor");

const repeatCompartor=()=>{
    
    if(input.value === repeatInput.value){
        text.classList.add("hidden");
    }else if(input.value !== repeatInput.value){
        text.classList.remove("hidden");
    }

}
