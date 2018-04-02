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
                    <div class="page-header btn btn-primary" style="margin-bottom: 20px;">ADD Admin</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class=" col-md-12">
                 
                    <div class="col-md-8 panel panel-default">
                        <div class="panel-heading">
                            Admin Add
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="post" action="{{ route('store.admin') }}">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input class="form-control" name="dsa_name" id="dsa_name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input class="form-control" name="dsa_email" id="dsa_email" placeholder="Enter Email-Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="dsa_pass" id="dsa_pass" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm-Password</label>
                                            <input class="form-control" name="dsa_cpass" id="dsa_cpass" placeholder="Confirm-Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" name="dsa_phone" id="dsa_phone" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="dsa_role" id="dsa_role" placeholder="Enter text">
                                                <option>Please Select Role</option>
                                                <?php foreach($roles as $role){?>
                                                <option value="<?php echo $role->roleId?>"><?php echo $role->role?></option><?php }?>
                                        </select></div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="dsa_location" id="dsa_location" placeholder="Enter text">
                                                <option>Please Select</option>
                                                <?php foreach($locations as $location){ ?>
                                                <option value="<?php echo $location->id;?>"><?php echo $location->locationName;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                
                                       
                                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>  
            
            <!-- /.row -->
            
          
            
@include('admin.layout.footer')