function test() {
    var radioButton = Array.from(document.querySelectorAll(".radioB"));
    radioButton.forEach(button => {
        button.addEventListener("input", e =>{
            console.log(e.target.value);
        })
    })
}
test();