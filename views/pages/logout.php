
<?php

  session_unset();
  session_destroy();

  echo '<script>
          window.location = "./index.php?page=home";
        </script>';


?>












