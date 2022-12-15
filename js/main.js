var count = 0

add = document.querySelector(".add");
remove = document.querySelector(".remove");
originalPrice = Number(document.querySelector("#price"));

add.addEventListener("click",() => {
    let output_one = document.querySelector(".counter");
    let output_two = document.querySelector("#price");
    let result_one = Number(output_one.innerText) + 1;
    let result_two = Number(output_two.innerText) + originalPice;

    output_one.innerText = result_one;
    output_two.innerText = result_two;
})

remove.addEventListener("click",() => {
    let output_one = document.querySelector(".counter");
    let output_two = document.querySelector("#price");
    let result_one = Number(output_one.innerText) - 1;
    let result_two = output_two.innerText - output_two.innerText;

    output_one.innerText = result_one;
    output_two.innerText = result_two;
})

var output = document.querySelector("#price")
counter.addEventListener("change",() => {
    let totalPrice = document.querySelector("#totalPrice")


})
    

