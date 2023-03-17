let catSelectLvl1 = document.getElementById("categoryLvl1");
let catSelectLvl2 = document.getElementById("categoryLvl2");
let catSelectLvl3 = document.getElementById("categoryLvl3");

let categories = [];
let subCatLvl2 = [];
let subCatLvl3 = [];

function getData() {
    let request = new XMLHttpRequest();
    request.open("GET", "http://127.0.0.1:8000/api/get-categories");
    request.send();
    request.addEventListener("readystatechange", function () {
        if (request.readyState === 4 && request.status === 200) {
            categories = JSON.parse(request.response).data;
        }
    });
}
getData();

function displayData(allCategories, currentLevel, selectElement, e) {
    e.target.value == ""
        ? selectElement.classList.add("d-none")
        : selectElement.classList.remove("d-none");
    currentLevel = allCategories.filter(
        (category) => e.target.value == category.parent_id
    );
    let OptionElements = "<option value>Select SUB Category</option>";
    for (let i = 0; i < currentLevel.length; i++) {
        OptionElements += `
                <option value="${currentLevel[i].id}">${currentLevel[i].cat_name}</option>
                `;
    }
    selectElement.innerHTML = OptionElements;
}

catSelectLvl1.addEventListener("change", function (e) {
    subCatLvl3 = [];
    catSelectLvl3.innerHTML = "";
    catSelectLvl3.classList.add("d-none");
    displayData(categories, subCatLvl2, catSelectLvl2, e);
});

catSelectLvl2.addEventListener("change", function (e) {
    displayData(categories, subCatLvl3, catSelectLvl3, e);
});
