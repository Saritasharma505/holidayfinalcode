@include('admin.layout.header')

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                @include('admin.layout.nav')
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       
            <div id="page-wrapper" style="min-height: 577px;">
            
            <!-- /.row -->
            <div class="row">
                <div class=" col-md-12">
                 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Roles
                        </div>
                       <div class="container">
  
  <form method="post" action="/action_page.php">
    <div class="row">
         <div class="col-md-4 col-md-offset-2">
    <div class="form-group">
      <label> Role</label>
      <input type="text" class="form-control" id="role" placeholder="Enter Role" name="role">
    </div>
    <div class="form-group">
        <label>Assign To</label>
      <input type="text" class="form-control" id="assignSections" placeholder="Assign To" name="assignSections">
    </div></div>
   </div>
   <div>
   <center> <button type="submit" class="btn btn-info pull">Submit</button></center>
  </div>
  </form>
</div>

                    </div>
                    
                </div>
            </div>
            <!-- /.row -->
        </div>  
            
            <!-- /.row -->
            
          
            
@include('admin.layout.footer')