<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your tasks</title>
</head>
<body>
    <b>Enter your task</b>
    <form action="add.php" method="POST">
			<div class="input-form">
				<span><b> Task </b></span>
				<input type="text" name="task">
			</div>
            <div class="input-form">
				<button class="submit" name="submit">
					Submit
				</button>
			</div>
    </form>
    <?php
    
                    $sql = "SELECT task FROM db2 ";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($column =mysqli_fetch_assoc($result)){
                            $task=$column['task'];
                            echo '
                        <tr>
                            <td>
                            '.$task.'
                            </td>
                            <td>
                            <button class = "button"><a href="delete.php?task='.$task.'" class = "text-light">Delete</a></button>
                            </td>
                        </tr>';
                        }
                    }
                
    ?>
</body>
</html>