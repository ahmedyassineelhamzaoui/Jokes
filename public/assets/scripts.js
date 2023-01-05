let selecte=document.querySelector("#selecte");
let result=document.querySelector("#result")
let mydata=document.querySelector("#mydata")
let val=document.querySelectorAll(".values")
// val.forEach(element => {
//     element.click=()=>{
//         if(selecte.value=="1"){
//             result.innerHTML=mydata*12.39;
//         }
//         if(selecte.value=="2"){
//             result.innerHTML=mydata*10.97;
//         }
//         if(selecte.value=="3"){
//             result.innerHTML=mydata*1;
//         }
//         if(selecte.value=="4"){
//             result.innerHTML=mydata*10.40;
//         }
//     }
// });
    if(selecte.value=="1"){
        console.log("ok1")
    result.innerHTML=mydata*12.39;
    }
    if(selecte.value=="2"){
        console.log("ok2")
        result.innerHTML=mydata*10.97;
    }
    if(selecte.value=="3"){
        console.log("ok3")
        result.innerHTML=mydata*1;
    }
    if(selecte.value=="4"){
        console.log("ok4")
        result.innerHTML=mydata*10.40;
    }
