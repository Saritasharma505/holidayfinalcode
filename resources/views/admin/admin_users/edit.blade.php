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
                            Admin
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                         <?php foreach($update_admins as $update_admin){?>
                                    <form  method="post" action="{{ route('update') }}">
                                        <?php echo csrf_field();?>
                                           
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="<?= $update_admin->name?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email-Id" value="<?= $update_admin->email?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm-Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Confirm-Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter text" value="<?= $update_admin->phone;?>">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="roles" placeholder="Enter text">
                                                
                                                <?php foreach($roles as $role){?>
                                                <option value="<?php echo $role->roleId?>"><?php echo $role->role?></option><?php }?>
                                        </select>
                                    </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                         <select  class="form-control" name="location" placeholder="Enter text">
                                              <?php foreach($locations as $location){ ?>
                                                <option value="<?php echo $location->id;?>"><?php echo $location->locationName;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                         
                                           <input type="hidden" name="id" id="id" value="<?= $update_admin->id;?>">
                                    </div>
                                    <div class="col-md-7 col-md-offset-5">
                                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                    </div>
                                        
                                        <?php }?>
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