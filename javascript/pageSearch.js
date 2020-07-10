
function linearSearch(list,target){
    let str = "List:["+list+"]<br/>";
    str += "Search : "+target+"<br/>";
    str += "Result ::::<br/>";
    let round = 0;
    let index = 0;
    while(index < list.length) {
        round++;
        if(list[index] == target) {
            str+= "Round : "+round+" ===> "+target+" = "+list[index]+" found !!<br/>";
            break;
        } else {
            str+= "Round : "+round+" ===> "+target+" != "+list[index]+"<br/>";
            index += 1;
        }
    }
    return str;
}
function binarySearch(list,target){
    let str = "List:["+list+"]<br/>";
    str += "Search : "+target+"<br/>";
    str += "Result ::::<br/>";
    let round = 0;
    let left = 0;    
    let right = list.length - 1;  
    let center;
    
    while (left <= right) {
        round++;
        center = Math.floor((left + right)/2);
        if (list[center] == target) {
            str+= "Round : "+round+" ===> "+target+" = "+list[center]+" found !!<br/>";
            break;
        } else if (list[center] <= target) { 
            left = center + 1;
            str+= "Round : "+round+" ===> "+target+" != "+list[center]+"<br/>";
        } else {  
            right = center - 1;
            str+= "Round : "+round+" ===> "+target+" != "+list[center]+"<br/>";
        }
    }
    return str;
}
function bubbleSearch(){
    //
}
$('#formSearch').on('submit', function(e) {  
e.preventDefault();
let list = document.querySelector("#list").value.split(',');
let search = document.querySelector("#search").value;
let category = document.querySelector("#category").value;

//validate
function validateNumber(num){
    if(!Number.isInteger(parseInt(num))) return false;
}
list.forEach(validateNumber);
validateNumber(search);

let result;
switch(category){
    case "0":
        result = linearSearch(list,search);
        break;
    case "1":
        result = binarySearch(list,search);
        break;
    case "2":
        //result = bubbuleSearch(list,search);
        break;
    default:
        break;
}
document.querySelector(".result").innerHTML = result;
});
