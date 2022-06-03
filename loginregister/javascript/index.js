function showPassword(){
    let asterisPass = document.getElementById("pword");

    if (asterisPass.type === "password"){
        asterisPass.type = "text"
    } else {
  
        asterisPass.type = "text"
    }

}

function showConfirmPassword(){
    let asterisConfirmPass = document.getElementById("cpword");

    if (asterisConfirmPass.type === "password"){
        asterisConfirmPass.type = "text"
    } else {
  
        asterisConfirmPass.type = "text"
    }
}