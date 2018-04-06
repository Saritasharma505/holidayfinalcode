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
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class=" col-md-12">
                 
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Location Management
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                <?php foreach($edit_location as $edit_loc){?>        
                                        <?php echo csrf_field();?>
                                           
                    <div class="row"> 
                        <div class="col-md-6">
                          <form method="post" action="{{ url('location/store') }}">
                        <?php echo csrf_field();?>
                    <div class="form-group">
                        <label> Location Name</label>
                        <input type="text" name="locationName" id="locationName">
                    </div>
                    <div class="form-group">
                      
                        <label>Status</label> &nbsp;&nbsp;&nbsp;<label><input type="radio" name="status">Active</label>&nbsp;&nbsp;<label><input type="radio" name="status">Deactive</label>
                        
                     </div>
                     <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE" style="margin-left: 25px; margin-top: 15px;">
                    </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-6">
                    </div></div><?php }?></form>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- /.row -->
    
            
          
            
@include('admin.layout.footer')