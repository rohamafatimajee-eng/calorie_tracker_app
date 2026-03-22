async function searchFood() {
  let food = document.getElementById("food").value;

  let res = await fetch("food.php?query=" + food);
  let data = await res.json();

  let item = data.foods[0];

  document.getElementById("result").innerHTML =
    item.description;

  document.getElementById("f").value = item.description;

  item.foodNutrients.forEach(n => {
    if (n.nutrientName == "Energy") document.getElementById("c").value = n.value;
    if (n.nutrientName == "Protein") document.getElementById("p").value = n.value;
    if (n.nutrientName == "Carbohydrate, by difference") document.getElementById("cb").value = n.value;
    if (n.nutrientName == "Total lipid (fat)") document.getElementById("fats").value = n.value;
  });
}