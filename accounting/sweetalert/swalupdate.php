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
                  text: "Record Modified Successfully!",
                  type: "success"
              });
            <?php elseif($msg == 1): ?>
              swal({
                  title: "Oopppss!!",
                  text: "ID already Used!",
                  type: "warning"
              });
      <?php endif ?>
    });
    </script>

</html>