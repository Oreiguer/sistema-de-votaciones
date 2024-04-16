$("input[name=nombre], input[name=alias]").on('keypress', function(event) {
        
    let regex = new RegExp("^[a-zA-Z ]+$");
    let key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
      event.preventDefault();
      return false;
    }
});
