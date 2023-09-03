function addMeal(e){
    const value = String(e.value);
    const id = value.split("_")[0];
    const name = value.split("_")[1];
    
    for(let i = 0; i < e.children.length; i++){
        e.children[i].selected = false;
    }

    e.children[0].selected = true;

    const meal = document.createElement('p');
    meal.setAttribute("class", "card meal-item p-1 font-xs flex-r align-i-center g-1");
    meal.setAttribute("data-id", id);
    meal.innerHTML = name;

    const close = document.createElement("button");
    close.setAttribute("class", "btn flex-r font-xs justify-c-center align-c-center");
    close.setAttribute("style", "padding: 0; width: 20px; height: 20px; border-radius: 50%; border: none; font-size: 10px;")
    close.innerHTML = '_';
    close.addEventListener("click", function() {
        meal.remove();
    });

    const quantity = document.createElement("input");
    quantity.setAttribute("class", "font-xs");
    quantity.setAttribute("style", "border: none; outline: none; border-left: 1px solid rgba(0,0,0,0.2); padding-left: .5rem; background: rgba(0,0,0,0.1);");
    quantity.setAttribute("type", "number");
    quantity.setAttribute("value", "1");
    quantity.setAttribute("min", "0");
    quantity.setAttribute("max", "10");

    meal.appendChild(quantity);
    meal.appendChild(close);

    const mealsHolder = document.getElementById("meals-holder");
    let copy = 0;
    for(let i = 0; i < mealsHolder.children.length; i ++){
        if(mealsHolder.children[i].getAttribute('data-id') == id) copy++;
    }
    if(copy == 0){
        mealsHolder.appendChild(meal);
    }
}