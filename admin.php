<!DOCTYPE html>
<html>
  <head>
    <title>Test_project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
        <?php echo "<h1>Welcome to Admin Area</h1>" ?>

        <ul class="nav nav-tabs" id="myTab">
          <li><a href="#profile" data-toggle="tab">Profile</a></li>
          <li><a href="#posts" data-toggle="tab">Posts</a></li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="profile">

            <h3>User Information</h3>

            <table class="table">
              <tbody>
                <tr>
                  <td>Username</td>
                  <td>Bla_bla</td>
                </tr>
                <tr>
                  <td>First Name</td>
                  <td>Jacob</td>
                </tr>
                <tr>
                  <td>Last Name</td>
                  <td>Larry</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>test@test.com</td>
                </tr>
              </tbody>
            </table>

            <a data-toggle="modal" href="#myModal" class="btn btn-info btn-lg">Change Password</a>
          </div>
          
          <div class="tab-pane" id="posts">
            <h2>Title of Post</h2>
            <p>Post Description</p>
            <hr>
          </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Change Password</h4>
              </div>
              <div class="modal-body">

                <form class="form-signin">
                  <input type="password" class="form-control" placeholder="Current Password">
                  <input type="password" class="form-control" placeholder="New Password">
                  <input type="password" class="form-control" placeholder="Re-type New Password">

                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>