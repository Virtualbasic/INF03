
function validate(){
    let  zap = document.getElementById("zap").checked;
    let holder = document.getElementById("holder");
    if(zap){
        let  name = document.getElementById("imie").value;
        let  nazwisko = document.getElementById("nazwisko").value;
        let  mail = document.getElementById("mail").value;
        let  usluga = document.getElementById("us").value;
        holder.innerHTML = name.toUpperCase() + nazwisko.toUpperCase() 
        +"<br>" + "Treść Twojej sprawy" + usluga + "<br>"
        + "Na podany e-mail zostanie wysłana oferta ";
    }else{
        holder.innerHTML = "<span style=\"color:red;\">Zapoznaj sie z regulaminem</span>";
    }
}