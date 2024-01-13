function checkprice(){
    let wynik = document.getElementById("wynik");
    for(let i= 1 ; i<=4 ; i++){    
        let val = "" + i + "";   
        temp = document.getElementById(val).checked;
        tempv2 = document.getElementById(val).value;
        if(temp==true){
            wynik.innerHTML = tempv2;
        }
    }
   
    //console.log(forma)
    //let forma = document.querySelector('input[name="strz"]:checked').value;
    //wynik.innerHTML = forma;
}