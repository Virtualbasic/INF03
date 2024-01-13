function changeColor(){
    let colors = ["kolor1","kolor2","kolor3","kolor4"];
    let H = document.getElementById("kolor").value;
    document.getElementById("main").style.backgroundColor= "hsl("+H+",100%, 50%)";
    let nnn = 100;
    for (let i = 0; i<4 ; i++){
        console.log(colors[i])
        nnn-=20;
        document.getElementById(colors[i]).style.backgroundColor = "hsl("+H+", " +  nnn +"%, 50%)";
    }
}