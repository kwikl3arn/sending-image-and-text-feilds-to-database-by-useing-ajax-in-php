<?php
include("dbconn.php");

/* catch the post data from ajax */
 echo $rname = $_REQUEST['ename'];
  echo $rpass= $_REQUEST['pass'];

//$mysqldb="insert into emp (name,email)values('$rname','$remail') ";
//        $result= mysqli_query($conn, $mysqldb);
//        if($mysqldb)
//        {
//         echo "sucessfully registered";   
//        }
//  $targetDir = "C:/xampp/htdocs/img/"; 
// echo $fileName = $_FILES["file"]["name"];
//     echo  $targetFilePath = $targetDir . $fileName;
//    echo  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//     
//           // Allow certain file formats
//            $allowTypes = array('jpg','jpeg','pdf');
//                
//    
//                if(in_array($fileType, $allowTypes))
//                {
//                 // Upload file to server
//                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
//                    {
//                      echo "File is valid, and was successfully uploaded.\n";
//                    } 
//					else
//	                {
//                       echo "Upload failed";
//                    }
//				} 
//				 else
//                {
//                echo 'Sorry, only JPG, JPEG  & PDF files are allowed to upload.';
//				}
$mysqldb="select m_menu_id  from tbl_users where user_name='$rname' and user_password='$rpass' ";
    $result= mysqli_query($conn, $mysqldb);
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['m_menu_id'];
    }
?>