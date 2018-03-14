<?php


include 'connect.php';




  //stoplist
$stop_list=['a', "able", "about",
"across", "after", "all", "almost", "also", "am", "among", "an",
"and", "any", "are", "as", "at", "be", "because", "been", "but",
"by", "can", "cannot", "could", "dear", "did", "do", "does",
"either", "else", "ever", "every", "for", "from", "get", "got",
"had", "has", "have", "he", "her"];


//start the db with inserting all the file's data
$files = scandir("files/");	//get all files
$files = array_diff($files, array('.', '..'));	//exclude the . and ..

$title='';
$desc='';
$name='';
$hit=1;
$j=1;
$fileid='';
 

    foreach($files as $file){ 

     $linesarray = file("files/" . $file);									//get all content
     $lines = implode("" ,$linesarray);
     $desc = substr($lines, 0, strpos($lines, '.'));
     $fname=$file;
     $title=substr($lines, 0, strpos($lines, ' '));
    
     echo "name= ".$fname." title= ".$title." desc= ".$desc."<br>";
      
     
        
    $query="INSERT INTO `documents` (name,title,descr) values ('$fname','$title','$desc')";
        //echo $query.'<br>';
     mysqli_query($connection,"INSERT INTO `documents` (fname,title,descr) values ('$fname','$title','$desc')");

     $words = preg_split('/[\s,.";:!*()?]+/', strtolower($lines), -1);

      foreach($words as $word){
       
           // $q=mysqli_query($connection,"SELECT R_id FROM `documents` ");
            //echo $q;

            if(in_array($word, $stop_list)){
               
                
                $query = "SELECT * FROM stop_list WHERE word = '$word' AND file_number = '$j'";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                mysqli_free_result($result);
                if(!$row){	//if the word we got from file does not exist in db, create it
				$times = substr_count($lines, " $word ");
				$times++;
				$query = "INSERT INTO stop_list(word, hit, file_number)
                 VALUES ('$word', $times, '$j')";
				mysqli_query($connection, $query);
                 
               }


           }  else { 	//now, for each word that is not part of the stoplist, store it in the database table
            //and to the inverted_file list		
                $word = str_replace("'", "\'", $word);//replace the ' to \' - ' wont be accepted			

               $query = "SELECT * FROM  `invertedindex` WHERE word = '$word' AND id = '$j'";
               //$result = mysqli_query($connection,(($query) or trigger_error(mysql_error()." ".$query)));
               $result = mysqli_query($connection, $query);
               $row = mysqli_fetch_assoc($result);
               if(!$row && $word){	//if the word we got from file does not exist in db, create it
               $times = substr_count($lines, " $word ");
               $times++;
               $query = "INSERT INTO  `invertedindex`(word, hits) VALUES ('$word', $times)";
               mysqli_query($connection, $query);
     
               $query="INSERT INTO `postingfile`(file_id,hits,word_id) VALUES ('$j','$times','$word') ";
               mysqli_query($connection, $query);
            }
        }
    }
        $j++;

    }
     
    
    mysqli_close($connection);

    //header('location:admin.php');
?>