<?php
session_start();
include "connect.php";
if (!empty($_POST)){
    $toDEL = $_POST['removeIT'];
 
      
$query="UPDATE documents SET active='0' WHERE fname='$toDEL'";
   
    $result = mysqli_query($connection, $query);
   
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="includes/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter|Quicksand" rel="stylesheet">
    <title>Admin Control Panel - Remove File</title>
</head>

	<body style="margin:0 auto; width: 1000px;">
	
		<br><h1 style="text-align: center; color: rgba(0,0,0,0.6);
                        text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                        0px -5px 35px rgba(255,255,255,0.3); font-family: 'Quicksand', sans-serif;"> 
                        Remove A File
        </h1>
        
        <br>
        <nav class="navbar navbar-light bg-light">
        <form class="form-inline" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Remove" aria-label="Remove" name="removeIT" id="reamoveIT" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Remove</button>
        </form>
        </nav>
        <div class="container" style="text-align: center;">
        <div class="row">
            <table class="table">
			<thead class="thead-light">
				<tr>
                    <th scope="col">File Number</th>
					<th scope="col">File Name</th>
                   
				</tr>
			</thead>
			<tbody>
            <?php
                //here, all the existing files that are parsed, are printed(full details)
                //then the use inserts the file name he wish to delete/remove from the database
                //the system then delete all the related words that belong to the soon-to-be deleted file
                $query = ("SELECT * FROM documents");
                $result = mysqli_query($connection, $query);
                foreach($result as $row){?>
                <tr>
                    <td scope="row"><?php echo $row["R_id"]; ?> </td>
                    <td scope="row"><a href="files/<?php echo $row["fname"]; ?>" target="_blank"><?php echo $row["fname"]; ?></a></td>
                   
			    </tr>
               <?php }
            ?>
            </tbody>    
            </table>
        </div>
        </div>
    </body>
</html>