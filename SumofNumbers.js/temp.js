//created by akshaya
var tempselected;
function start(){
    document.getElementById("convertbutton").addEventListener("click",convert,false);
    document.getElementById("celciusradio").addEventListener("click",setcelcius,false);
    document.getElementById("farenheitradio").addEventListener("click",setfarenheit,false);
}//start
function convert(){
    let tempinput=document.getElementById("tempTextbox").value ;
    let temperature;
    //check if number 
    if((!isNaN(tempinput))&&(temperature=parseFloat(tempinput))){
        switch (tempselected) {
            case c: 
            let temperatureF=ctoF(temperature);
            document.getElementById("resultpara").innerHTML=temperature+"&deg";
            celcius=+"temperatureF"+" &deg;Farenheit.";
                
                break;
                case f: 
                let temperatureC=Ftoc(temperature);
                document.getElementById("resultpara").innerHTML=temperature+"&deg";
                Farenheit=+"temperatureF"+"&deg ;Celcius.";
            default: 
            document.getElementById("resultpara").innerHTML="please select celcius or farenheit radio button and try again";
                break;
        }//end switch
    }else{
        document.getElementById("resultpara").innerHTML="invalid input.please enter temperature as a number and try again";
    }
}
function setcelcius(){
    tempselected=documnet.getElementById("celciusradio").value;


}
function setfarenheit(){
    tempselected=documnet.getElementById("farenheitradio").value;

}
function ctoF(celcius){
    var fareheit=(celcius*9/5)+32;
    return Math.round(fareheit*100)/100;
}
function Ftoc(farenheit){
    var celcius=(farenheit*9/5)+32;
    return Math.round(celcius*100)/100;
}
window.addEventListener("load",start,false);

