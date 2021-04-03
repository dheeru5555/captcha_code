  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  </head>
<body>
<div class="container">
 <div class="row mt-5">
   <div class="col-md-4">
   </div>
   <div class="col-md-8">
     <h4><b> Enter Captcha</b></h4><br>
        <?php  $string = "abc123";  ?>
        <strong><i>
        <h4 id="captcha" style="margin-top:10px;margin-left:30px;position: absolute;"><?php echo str_shuffle($string) ?></h4><i></strong>

        <img src="captcha.jpg" height="50"><br><br>
        
        <div class="form-group row">
           <input type="text" name="captcha" style="width:30%" id="captcha_id" class="form-control" value="" required placeholder="Enter Captcha">
           <button type="button" id="verify_captcha" class="btn btn-primary ml-3 ">Verify Captcha</button>
       </div>
   
    </div>
   </div>
 </div>

</body>
</html>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
     $("#verify_captcha").click(function(){
        var captcha_id = $("#captcha_id").val();
        var captchID = $("#captcha").text();
         if(captcha_id == captchID)
         { 
            $('#verify_captcha').html('<i class="fas fa-spinner fa-spin mr-4"></i>'); 
            setTimeout(
              function() 
                {    //disable 
                    $('#captcha_id').hide("slow"); // Input box will hide
                    $('#verify_captcha').addClass("btn btn-success disabled").text("Captcha Verified");
                    $('#verify_captcha').attr("disabled", true);
                }, 5000);
         }
         else
         {
            $('#verify_captcha').addClass("btn btn-danger").text("Not Matched");
            $("#captcha_id").prop('disabled', true);
            setTimeout(
              function() 
                {    //disable 
                    $('#captcha_id').val("");
                    $("#captcha_id").prop('disabled', false);
                    $('#verify_captcha').removeClass("btn btn-danger").text("Verify Captcha");
                }, 5000);
         }
      }); 
    });
</script>    