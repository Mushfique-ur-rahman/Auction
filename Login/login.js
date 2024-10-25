
let login=document.getElementById('login');
let result=document.cookie.match(new RegExp('outcum=([^;]+)'));
let docod=decodeURIComponent(result[1]);
login.addEventListener("click",function(){
    if(docod=="wrong"){
        alert("Password or emain is wrong");
     }
});
 
