   var log = document.getElementById("login");
    var reg = document.getElementById("register");
    var bt = document.getElementById("btn");

    function register(){
        log.style.left = "-400px";
        reg.style.left = "50px";
        bt.style.left = "110px";
    }
    function login(){
        log.style.left = "50px";
        reg.style.left = "450px";
        bt.style.left = "0px";
    }


    function validimi(nr) {
        let hapsirat = document.getElementsByClassName("input-field");
        if(nr == 0){
            if (hapsirat[0].value == "" && hapsirat[1].value == "") {
            alert("Ju lutem plotesoni te dhenat!");
            }
        }
        if(nr == 1 ){
            if (hapsirat[3].value == "" && hapsirat[4].value == "" && hapsirat[5].value == "") {
            alert("Ju lutem plotesoni te dhenat qe te mund te regjistroheni!");
            }
        }
    }


//REGISTER
    function registerValidate(){
//emri
    var emri = document.getElementById("emri").value; 
         if(emri.length < 3){
            alert('Emri duhet te kete mbi 3 karaktere!');
        }
//mbiemri
    var mbiemri = document.getElementById("mbiemri").value; 
        if(mbiemri.length < 3){
            alert('Mbiemri duhet te kete mbi 3 karaktere');
        }
//tel

//email
    var email = document.getElementById("mail").value;
    var pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
        if(email.match(pattern)){
        }
        else{
            alert('Email invalide');
        }
//Fjalekalimi
    var Fjalekalimi = document.getElementById("psw").value;

         if(Fjalekalimi.length < 8){
            alert('Fjalekalimi duhet te kete me shume se 8 karaktere');
        }
    
//PasswordConfirm
    var firstPassword = document.reg.password.value;
    var secondPassword = document.reg.password2.value;
        if(firstPassword !== secondPassword){
            alert('Fjalekalimi duhet te jete i njejte ');
        }
}
//LOGIN
    function loginValidate(){
//email
    var email = document.getElementById("email").value;
    var pattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
        if(email.match(pattern)){
        }
        else{
        alert('Email invalide');
        }
   
//Fjalekalimi
    let Fjalekalimi = document.getElementById("pw").value;
            if(Fjalekalimi.length < 8){
            alert('Fjalekalimi duhet te kete me shume se 8 karaktere');
        }
    }
