<?php

require_once('../app/view/view.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style/style.css">

</head>

<body>
    
    <header class="mb-5">
        <h1 class="text-center">Jokes Jokes</h1>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="" method="post">
                        <input type="text" name="search" class="form-control search" placeholder="search for jokes">
                    </form>
    
                </div>
                <div class="col-3">
                    <form action="" method="post">
                        <a href="#modal-task" data-bs-toggle="modal">
                            <button type="submit" name="add" class="btn bg-info text-white form-control add-jokes" id="add-joke" onclick="hideOtherBtn()">Add Jokes</button>
                        </a>
                    </form>
                </div>
                <div class="col-3">
                    <form action="" method="post">
                            <button type="submit" name="show" class="btn bg-secondary text-white form-control show-jokes">Show Jokes</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($rows as $row){ ?>
                    <div class="col-sm-12 col-md-6 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <span class="name-joke"><?= $row["name"]?></span>
                                <div class="buttons">
                                    <button class="delete-joke btn bg-danger px-2 py-1"  name="delete-joke">
                                        <i class="fa-solid fa-trash text-white"></i>
                                    </button>
                                    <a href="#modal-task" data-bs-toggle="modal">
                                        <button class="update-joke btn bg-info px-2 py-1" name="update-joke">
                                            <i class="fa-solid fa-square-pen text-white"></i>
                                        </button>
                                    </a>    
                                </div>
                                
                            </div>
                            <div class="card-text"><?= $row["content"]?></div>
                        </div>
                    </div>
                </div>
               
                <?php } ?>
            </div>
        </div>
    </main>


    <div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="product-id">
							<div class="mb-3">
								<label class="form-label">Joke Name</label>
								<input type="text" name="joke-name" class="form-control" id="joke-name"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Joke Conntet</label>
								<input type="text" name="joke-content" class="form-control" id="joke-content"/>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="d-none" id="buttonDelete"></a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="add" class="btn btn-primary task-action-btn" id="task-save-btn">ADD</button>
					</div>
				</form>
			</div>
		</div>
	</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../public/assets/scripts.js"></script>
</body>

</html>