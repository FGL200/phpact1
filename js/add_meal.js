function addMeal(e){
    const value = String(e.value);
    const id = value.split("_")[0];
    const name = value.split("_")[1];
    
    for(let i = 0; i < e.children.length; i++){
        e.children[i].selected = false;
    }

    e.children[0].selected = true;

    const meal = document.createElement('p');
    meal.setAttribute("class", "form-control meal-ingredient fs-6 d-flex align-items-center gap-2");
    meal.setAttribute("style", "padding: .25rem 1rem;")
    meal.setAttribute("data-id", id);
    meal.innerHTML = name;

    const meal_input = document.createElement("input");
    meal_input.setAttribute("type", "hidden");
    meal_input.setAttribute("name", "items[]");
    meal_input.value = id;

    const close = document.createElement("button");
    close.setAttribute("class", "btn d-flex fs-6 justify-content-center align-self-center");
    close.setAttribute("style", "padding: 0; width: 20px; height: 20px; border-radius: 50%; border: none; font-size: 10px;")
    close.innerHTML = '<b>x</b>';
    close.addEventListener("click", function() {
        meal.remove();
    });

    const quantity = document.createElement("input");
    quantity.setAttribute("class", "fs-6 text-center");
    quantity.setAttribute("style", "max-width: 50px; outline: none;");
    quantity.setAttribute("type", "number");
    quantity.setAttribute("name", "quantity_" + id)
    quantity.setAttribute("value", "1");
    quantity.setAttribute("min", "0");

    meal.append(meal_input);
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