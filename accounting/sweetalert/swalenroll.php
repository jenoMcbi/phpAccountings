<html>

	 <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="assets/js/sweetalert-dev.js"></script>

  <script type="text/javascript">
   
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      <?php if($msg == 2): ?>
        swal({
                  title: "Success",
                  text: "Payment Saved!",
                  type: "success"
              });
            <?php elseif($msg == 1): ?>
              swal({
                  title: "Oopppss!!",
                  text: "INVALID ID PLEASE CHECK IT AGAIN!",
                  type: "warning"
              });
              <?php elseif($msg == 3): ?>
              swal({
                  title: "Oopppss!!",
                  text: "ID already Enrolled!",
                  type: "warning"
              });
              <?php elseif($msg == 4): ?>
              swal({
                  title: "Oopppss!!",
                  text: "ID already Enrolled in past year!",
                  type: "warning"
              });

              <?php elseif($msg == 5): ?>
              swal({
                  title: "Oopppss!!",
                  text: "INVALID!",
                  type: "warning"
              });
              <?php elseif($msg == 6): ?>
              swal({
                  title: "Oopppss!!",
                  text: "!",
                  type: "warning"
              });
      <?php endif ?>
    });
  </script>

</html>