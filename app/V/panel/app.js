// For Search 
let searchInput=document.querySelector("#table-search");
let tbody=document.querySelector("tbody");


const searchItem=()=>{
    let tr = tbody.children;
    let trVal= Object.values(tr);
    let searchVal=searchInput.value.toLowerCase().trim();
    trVal.forEach((item)=>{
        item.classList.add("hidden")
    });

    trVal.forEach((item)=>{
        let itemName=item.querySelector(".item-name").innerText.toLowerCase().trim();
        
        if(searchVal==""){
            trVal.forEach((item)=>{
                item.classList.remove("hidden");
            })
        }else if(itemName.includes(searchVal)){
            item.classList.remove("hidden")
        }
        
    })
}

// For creat item
let creatItem=document.querySelector("#div-creat");
let inputName=document.querySelector("#input-name");
let inputColor=document.querySelector("#input-color");
let inputCategory=document.querySelector("#input-categori");
let inputPrice=document.querySelector("#input-price");
let error=document.querySelector(".error");


const toggleDisplay=()=>{
    if(creatItem.classList.value.includes("hidden")){
        creatItem.classList.remove("hidden")
    }else if(!creatItem.classList.value.includes("hidden")){
        creatItem.classList.add("hidden")
    }
}

const creatitem=()=>{

    if(inputPrice.value!=="" && inputColor.value !=="" && inputName.value!=="" && inputCategory !==""){
        let ntr=document.createElement("tr");
        ntr.innerHTML=`
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white item-name">
                    ${inputName.value}
                </th>
                <td class="px-6 py-4 item-color">
                    ${inputColor.value}
                </td>
                <td class="px-6 py-4 item-cate">
                    ${inputCategory.value}
                </td>
                <td class="px-6 py-4 item-price">
                    $${inputPrice.value}
                </td>
                <td class="px-6 py-4" onclick="toggleEdit() , edititem(this)">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
        `;
        ntr.classList="border-b dark:bg-gray-800 dark:border-gray-700 hover dark:hover:bg-gray-600 bg-[#242424]";
        creatItem.classList.add("hidden");
        tbody.appendChild(ntr);
        inputCategory.value="";
        inputColor.value="";
        inputName.value="";
        inputPrice.value="";
        error.classList.add("hidden");
    }else {
        error.classList.remove("hidden");
    }

}

// For edit Item
let editItem=document.querySelector("#div-edit");
let inputName1=document.querySelector("#input-name-1");
let inputColor1=document.querySelector("#input-color-1");
let inputCategory1=document.querySelector("#input-categori-1");
let inputPrice1=document.querySelector("#input-price-1");


const toggleEdit=()=>{
    if(editItem.classList.value.includes("hidden")){
        editItem.classList.remove("hidden");
    }else{
        editItem.classList.add("hidden");
    }
}
const edititem=(x)=>{
    let tr=x.parentElement
    let itemName=tr.querySelector(".item-name");
    let itemColor=tr.querySelector(".item-color");
    let itemCate=tr.querySelector(".item-cate");
    let itemPrice=tr.querySelector(".item-price");
    let priceVal=itemPrice.innerText;
    let priceVal1=priceVal.replace("$","");
    
    
    inputName1.value=itemName.innerText;
    inputColor1.value=itemColor.innerText;
    inputCategory1.value=itemCate.innerText;
    inputPrice1.value=priceVal1;
    tr.remove();
}

const editBtn=()=>{
    let inputName1=document.querySelector("#input-name-1");
    let inputColor1=document.querySelector("#input-color-1");
    let inputCategory1=document.querySelector("#input-categori-1");
    let inputPrice1=document.querySelector("#input-price-1");
    let ntr=document.createElement("tr");
    ntr.classList=" border-b dark:bg-gray-800 dark:border-gray-700 hover dark:hover:bg-gray-600 bg-[#242424]";
    ntr.innerHTML=`
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white item-name">
                    ${inputName1.value}
                </th>
                <td class="px-6 py-4 item-color">
                    ${inputColor1.value}
                </td>
                <td class="px-6 py-4 item-cate">
                    ${inputCategory1.value}
                <td class="px-6 py-4 item-price">
                    $${inputPrice1.value}
                </td>
                <td class="px-6 py-4" onclick="toggleEdit() , edititem(this)">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
    `;

    tbody.appendChild(ntr);


    inputCategory1="";
    inputColor1="";
    inputName1="";
    inputPrice1="";
    editItem.classList.add("hidden");    
}


