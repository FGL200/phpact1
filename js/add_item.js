
let today = new Date();
let day = (today.getDate() < 10) ? "0" + today.getDate() : today.getDate() ;
let month = (today.getMonth() < 10) ? "0" + today.getMonth() : today.getMonth();    
let year = today.getFullYear();
let date_today = `${year}-${month}-${day}`;

document.getElementById("date_added").value = date_today;

document.querySelectorAll("#id-item-list option").forEach(function(e){
    e.addEventListener("click", function(option){
        option.disabled = true;
    })
})

function addItem(e){
    const value = String(e.value);
    const id = value.split("_")[0];
    const name = value.split("_")[1];
    
    for(let i = 0; i < e.children.length; i++){
        e.children[i].selected = false;
    }

    e.children[0].selected = true;

    const item = document.createElement('p');
    item.setAttribute("class", "card item-ingredient p-1 font-xs flex-r align-i-center g-1");
    item.setAttribute("data-id", id);
    item.innerHTML = name;

    const item_input = document.createElement("input");
    item_input.setAttribute("type", "hidden");
    item_input.setAttribute("name", "ingredientid[]");
    item_input.value = id;

    const close = document.createElement("button");
    close.setAttribute("class", "btn flex-r font-xs justify-c-center align-c-center");
    close.setAttribute("style", "padding: 0; width: 20px; height: 20px; border-radius: 50%; border: none; font-size: 10px;")
    close.innerHTML = '_';
    close.addEventListener("click", function() {
        item.remove();
    });

    const quantity = document.createElement("input");
    quantity.setAttribute("class", "font-xs");
    quantity.setAttribute("style", "border: none; outline: none; border-left: 1px solid rgba(0,0,0,0.2); padding-left: .5rem; background: rgba(0,0,0,0.1);");
    quantity.setAttribute("type", "number");
    quantity.setAttribute("name", "quantity_" + id);
    quantity.setAttribute("value", "0");
    quantity.setAttribute("min", "0");
    quantity.setAttribute("max", "10");

    item.append(item_input);
    item.appendChild(quantity);
    item.appendChild(close);

    const itemsHolder = document.getElementById("items-holder");
    let copy = 0;
    for(let i = 0; i < itemsHolder.children.length; i ++){
        if(itemsHolder.children[i].getAttribute('data-id') == id) copy++;
    }
    if(copy == 0){
        itemsHolder.appendChild(item);
    }
}