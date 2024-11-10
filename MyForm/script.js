document.getElementById("register").addEventListener("submit", function (event){
    let pass = document.getElementById('pass');
// console.log(pass);
    if(pass.value.length < 5 ||  pass.value.length > 25){
        event.preventDefault();
        pass.style.borderColor = "red";
    }else{
        pass.style.borderColor = "";
    }
});