<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <form action="" method="post">
            name:<input type="text" id="uname" name="uname">
                 <span class="name_val validation"></span>
            Email:<input type="email" id="uemail" name="uemail">
            <input type="file" id="file" name="file">
            <span class="email_val "></span>
            <div id='supp'><br></div>
            <button type="button" onclick="submit_form()">submit</button>
        </form>
        <script>
         
       function submit_form()
       {
              var form=$('form')[0];
              console.log('1');
              var formData=new FormData(form);
              console.log('2');
              var flag = confirm("DO U WANT TO SAVE");
              if(flag){
             $.ajax({
		url: "demo.php", // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		success: function(data)   // A function to be called if request succeeds
		{
			   alert(data);
						
		}
                   });

      
       }}
        
        </script>
    </body>
</html>
