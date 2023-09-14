const items = document.querySelectorAll(".item");

items.forEach( async (item, index) => {
    const image = await fetchItemImage(item, index)

})


async function fetchItemImage(item, index) {
    return fetch(`https://api.edamam.com/api/recipes/v2?app_id=37e3263c&app_key=34ef62c6a86bf98ae7bf036c4f647976&q=${item.textContent}&type=public&cuisineType=american`)
    .then(response=>response.json())
    .then(data=>{
        const img = document.createElement("img")
        img.src = data.hits[0].recipe.image
        img.classList.add("menu-img")
        document.getElementById("item-img-" + index).appendChild(img);
        console.log(img)
        // item.before(img)
    })
}