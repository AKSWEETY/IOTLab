//created by kadari
function start(){
        // event listener for button
        document.getElementById('sumButton').addEventListener("click",findSum,false);

}//start
function findSum(){
    //get the input, validate them, and call the function to diaplay sum
    // get the first value:
    let firstValue= document.getElementById('fisrtTextBox').value;
    try{
        if ((firstValue!="") &&(!isNaN(firstValue))) {
            //valid input
            let fisrtNumber= parseInt(firstValue);
            let secondValue=document.getElementById('secondTextBox').value;
            //validation for second textbox
            if ((secondValue!="") &&(!isNaN(secondValue))) {
                //valid input
                let secondNumber= parseInt(secondValue);
                //inputs valid: call function and supply arguments appropriately
                if (fisrtNumber < secondNumber) {
                    //firstnumbe is smaller
                    //call function supply firstnumber and display sum
                    displaySum(fisrtNumber,secondNumber);
                    
                }else{
                    //secondnumber is smaller
                    //function call if/else
                    displaySum(secondNumber,fisrtNumber);
                }

            }else{
                //invalid input
                if(secondValue == "")throw "Invalid Input: second input is empty";
                if(isNaN(secondValue)) throw "Invalid input: second input is not number";
            }//inner if/else

            
        }else{
            //invalid input
            if(firstValue == "")throw "Invalid Input: first input is empty";
            if(isNaN(firstValue)) throw "Invalid input: first input is not number";
        }//if/else
    }catch(err){
        //display the error in the result
        document.getElementById("sumPara").innerHTML=err;

    }//end try catch

}//find sum

function displaySum(smallnumber, bignumber){
    //get the parameters and find and display the sum of all number in the range

    let sum=0;
    for (let i = smallnumber; i <= bignumber; i++) {
        
        sum += i;    
    }//for
    //dispaly the total
    document.getElementById('sumPara').innerHTML = 'Total of all numbers from'+ smallnumber+ 'to'+ bignumber + '=' + sum;


}//display sum()


// event listener for page load event
window.addEventListener("load",start,false);
