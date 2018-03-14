


<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="includes/style.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<script type="text/javascript">
	function on() {
		document.getElementById("overlay").style.display = "block";
	}
	function off() {
		document.getElementById("overlay").style.display = "none";
	}
	</script>
</head>

<body style="margin:0 auto; width: 1000px;">

<br><h1 style="text-align: center; color: rgba(0,0,0,0.6);
                        text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                        0px -5px 35px rgba(255,255,255,0.3); font-family: 'Quicksand', sans-serif;"> 
                        Wellcome Balia  
            </h1><br><br><br>
	<div id="overlay" onclick="off()">
		<div id="text">
			<img src="includes/pic1.png" id="overlay_pic">
			<p>In order to preform a Search in files, simply click on the search button.<br>
			At the search bar, insert you'r query to search at the database.<br>
			The search is filtered from stop-list words.</p>
			<h4>Search Features:</h4>
			<p>You can search using Boolean operands:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;1. OR - search for several words that may appear in one or more files.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Example: all OR how - will result a search of the word 'all' OR the word 'how' and will present the files containing atleast one of them).<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;2. AND - search for several words that appear in the same file.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Example: all AND how - will result a search of the 'all' AND the word 'how' and will present the files containing them both).<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;3. !(NOT) - search for a word that does not contains the word you have assign the NOT to.<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Example: !all - will result a search of all the files and present the files that does not contain the word 'all').<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;4. "(Apostrophes) - search word/words that are included in the stop-list words<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Example: "the" - will result a search in all the files for and presents the files that contains the word "the" disregarding the revelance to the stop-list words.</p>
			<br>
			<h4>Admin Features:</h4>
			&nbsp;&nbsp;&nbsp;&nbsp;1. Adding a file:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to add a file to the search database, simply click the Add button, there you will be presented with the Exisiting files that are parsed into the database,
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and a list of files that exist in the Storage section but are not parsed.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simply insert into the text-box the name of the required file you wish to add, and the system will automaticly parse it(while referencing the words, stop words etc..).<br>
			<br>&nbsp;&nbsp;&nbsp;&nbsp;2. Delete a file:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to delete a file from the search database, simply click the Remove button, there you will be presented with the Exisiting files that are parsed into the database.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simply insert into the text-box the name of the file you wish to remove, the system will automaticly delete it and all is content from the database(while keeping it in the Storage section).<br>
		</div>
	</div>



<div class="searchIcon">
  
  <a href="index.php"><img src="search.jpg"/> </a>
  
</div>
<div class="container">
	<div class="row">
    
    <center>

    <a href="search.php" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <span><strong>Search</strong></span>            
    </a>

<a href="addfile.php" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Add</strong></span>            
    </a>

   
    <a href="#" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>            
    </a>
    
    <a href="#" onclick="on()" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Help</strong></span>            
    </a>

    </center>
	</div>
</div>
</body>
</html>
