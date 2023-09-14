document.getElementById("date_added").value = MAIN.ToInputDate(new Date());

function addItem(e){
    const value = String(e.value);
    const id = value.split("_")[0];
    const name = value.split("_")[1];
    
    for(let i = 0; i < e.children.length; i++){
        e.children[i].selected = false;
    }

    e.children[0].selected = true;

    const item = document.createElement('p');
    item.setAttribute("class", "form-control item-ingredient fs-6 d-flex align-items-center gap-2");
    item.setAttribute("style", "padding: .25rem 1rem;")
    item.setAttribute("data-id", id);
    item.innerHTML = name;

    const item_input = document.createElement("input");
    item_input.setAttribute("type", "hidden");
    item_input.setAttribute("name", "ingredientid[]");
    item_input.value = id;

    const close = document.createElement("button");
    close.setAttribute("class", "btn d-flex fs-6 justify-content-center align-self-center");
    close.setAttribute("style", "padding: 0; width: 20px; height: 20px; border-radius: 50%; border: none; font-size: 10px;")
    close.innerHTML = '<b>x</b>';
    close.addEventListener("click", function() {
        item.remove();
    });

    const quantity = document.createElement("input");
    quantity.setAttribute("class", "fs-6 text-center");
    quantity.setAttribute("style", "max-width: 50px; outline: none;");
    quantity.setAttribute("type", "number");
    quantity.setAttribute("name", "quantity_" + id)
    quantity.setAttribute("value", "1");
    quantity.setAttribute("min", "0");

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