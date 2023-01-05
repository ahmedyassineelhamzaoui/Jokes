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