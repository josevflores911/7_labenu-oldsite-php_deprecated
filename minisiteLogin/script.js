function validacao() {

  /*if(document.form.email.value==""){
    alert("por favor, prencha o campo nome");
    document.form.email.focus();
    return false
  }*/

 
  if(document.form.email.value=="" ||document.form.email.value.indexOf('@')== -1 ||document.form.email.value.indexOf('.com')==-1 ){
  
  document.form.email.value=""
  alert("por favor, digite um email valido");
  
  document.form.email.focus();
  return false
  }else{

     // Selecting the input element and get its value 
            var inputVal = document.getElementById("myInput").value;

     // Displaying the value
           alert("bienvenido "+inputVal);
  }



}