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


function editTask(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../../app/controller/controller.php',
        data: {openTask : id},
        success: function (obj) {
            console.log(obj);
            document.getElementById('joke-name').value                                    = obj[0];
            document.getElementById('joke-content').value                                  = obj[1];
        }
    });

}