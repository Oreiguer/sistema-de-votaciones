function checkEmail(email){
    
    let caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email.value) == false){

        email.setCustomValidity("Email Inválido"); 

        return false;
    }else{
        email.setCustomValidity('');
        return true;
    }
}
