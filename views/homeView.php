<?php
    include("template/header.php"); //include the header

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://use.fontawesome.com/1d29cca193.js"></script>
  </head>

  <!-- star of body -->
  <body>
  <!-- star of header -->
    <header>
        <h1 style="text-align: center;color: #E87D00;">Accounts</h1>
    </header>
  <!-- end of header   -->
                      <br>
                      <br>
  
  <!-- star of nav modal-->
    <nav>
      <ul>
        <li>
        <a class="" data-toggle="modal" data-target="#exampleModal" href="#">
          ADD ACCOUNT
        </a>

                            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">   ADD ACCOUNT
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                  &times;
                  </span>
                </button>

              </div>

              <div class="modal-body">
                <form class="" action="" method="post">

                  <label>
                    USER NAME
                  </label><br>

                  <input type="text" name="username" value=""><br>
                  <label>
                    CREDIT
                  </label><br>

                  <input type="text" name="credit" value=""><br>
                  <input class="mt-3" type="submit" name="" value="ADD">

                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>

        <a class="" data-toggle="modal" data-target="#exampleModal2" href="#">
          TRANSFER
        </a>

                        <!-- Modal TRANSFER -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">   TRANSFER
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                    &times;
                  </span>
                </button>
              </div>

              <div class="modal-body">
                <form class="text-center" action="../controllers/transfer.php" method="post">
                  
                              <!-- The source -->
                  <p>FROM</p> 
                  <select class="mb-3" name="from">
                          <!-- use of PHP -->
                    <?php foreach ($vueaccount as $donnees) //creat a $vueaccount for my file transfer.php and my file home.php
                    {
                    ?>
                    <option value="<?php echo $donnees->getId(); ?>">
                      <?php echo $donnees->getUsername(); ?>
                    </option>
                    <?php  } ?>
                  </select>
                              <!-- end The source -->

                              <!-- The receiver -->
                  <p>TO</p>
                  <select class="mb-3" name="to">
                    <?php foreach ($vueaccount as $donnees)
                    {
                    ?>
                    <option value="<?php echo $donnees->getId(); ?>">
                      <?php echo $donnees->getUsername(); ?>  
                    </option>
                    <?php  } ?>
                  </select>
                              <!-- end of The receiver -->

                  <br>
                  <input placeholder="credit" class="mb-3" type="text" name="additional" value="">
                    <br>
                  <input type="submit" name="" value="TRANSFER">
                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <a class="" data-toggle="modal" data-target="#exampleModal3" href="#">
          WITHDRAWAL
        </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">   WITHDRAWAL
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form class="text-center" action="../controllers/withdrawal.php" method="post">
                  <select class="mb-3" name="from">
                    <?php foreach ($vueaccount as $donnees)
                    {
                    ?>
                    <option value="<?php echo $donnees->getId(); ?>">
                      <?php echo $donnees->getUsername(); ?> 
                    </option>
                    <?php  } ?>
                  </select>

                      <br>
                  <input placeholder="debit" class="mb-3" type="text" name="minous" value="">
                      <br>
                  <input type="submit" name="" value="withdrawal">
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  
 <!--  <table class="table table-striped table-dark"> -->
 <table style="background-color: #868789;" class="table table-inverse">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Username</th>
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vueaccount as $donnees)
      {
      ?>
      <tr>

        <th scope="row">
          <?php echo $donnees->getId(); ?>
        </th>

        <td>
          <?php echo $donnees->getUsername(); ?>
        </td>

        <td>
          <?php echo $donnees->getCredit(); ?>
        </td>

        <td>
          <form class="" action="" method="post">
          <a class="" href="accountcontroleur.php?project=<?php echo $donnees->getId(); ?>">
            <button class="bg-faded " type="button" name="button"><i class="fa fa-eye" aria-hidden="true"></i>
            </button>
          </a>
          <form class="" action="" method="post">
            <input type="hidden" name="deleteaccount" value="<?php echo $donnees->getId(); ?>">
            <button type="submit" name="button">
              delete
            </button>
          </form>
        </form>
      </td>

    </tr>
    <?php } ?>

  </tbody>

</table>







<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')
</script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b, o, i, l, e, r) {
b.GoogleAnalyticsObject = l;
b[l] || (b[l] =
function() {
(b[l].q = b[l].q || []).push(arguments)
});
b[l].l = +new Date;
e = o.createElement(i);
r = o.getElementsByTagName(i)[0];
e.src = 'https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e, r)
}(window, document, 'script', 'ga'));
ga('create', 'UA-XXXXX-X', 'auto');
ga('send', 'pageview');
</script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>