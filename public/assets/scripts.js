let addJokeBtn = document.getElementById("task-update-btn");
let updateJokeBtn = document.getElementById("task-save-btn");

function hideOtherBtn(hide) {
    if(hide == 1){
        updateJokeBtn.style.display = 'block';
        addJokeBtn.style.display = 'none';
    }else{
        addJokeBtn.style.display = 'block';
        updateJokeBtn.style.display = 'none';
    }
}

function deleteJoke(){
    if(confirm('Do you want To delete this Product : ') == true){
        document.querySelector("#buttonDelete").click();
    }
}


function editjock(id,name,content){
    let jokeName=document.querySelector("#joke-name");
    let contentName=document.querySelector("#joke-content");
    let idInnput = document.querySelector("#product-id");
   console.log(id+" , "+name+" , "+content)
    
    idInnput.value=id;
    jokeName.value=name;
    contentName.value=content;
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';
    document.querySelector("#product-id").value = id;
     
	// console.log(id);
}