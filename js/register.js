var errors = document.getElementsByClassName('icon');
var form = document.forms[1];
var btn_submit = document.getElementById('btn_submit');
var username=document.getElementById('username');
var password = document.getElementById('password');
var confirmpassword=document.getElementById('confirmpassword');
btn_submit.onclick=function (event) {
    if(!form.checkValidity()){
        if (username.value == "") {
            
            errors[0].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        }
        if (password.value == "") {
            errors[1].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        }
        if (confirmpassword.value == "") {
            errors[2].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        }
        event.preventDefault();
    }
        
    
}
username.oninput=()=>{
    if(username.value.length!==0){
        errors[0].innerHTML=`<i class="fa-solid fa-check text-success"></i>`;
    }
    else{
        errors[0].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        
    }
}
password.oninput=()=>{
    if(password.value.length>=8 && password.value.match(/[A-Z]/)){
        errors[1].innerHTML=`<i class="fa-solid fa-check text-success"></i>`;
    }
    else{
        errors[1].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
    }
    if(confirmpassword.value == password.value){
        errors[2].innerHTML=`<i class="fa-solid fa-check text-success"></i>`;
        btn_submit.removeAttribute('disabled');
    }
    else{
        errors[2].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        btn_submit.setAttribute('disabled','');
    }
}
confirmpassword.oninput=()=>{
    if(confirmpassword.value == password.value){
        errors[2].innerHTML=`<i class="fa-solid fa-check text-success"></i>`;
        btn_submit.removeAttribute('disabled','');
    }
    else{
        errors[2].innerHTML=`<i class="fa-solid fa-xmark text-danger"></i>`;
        btn_submit.setAttribute('disabled','');
    }
}