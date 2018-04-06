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
                <a class="navbar-brand" href="index.html">The Holidays Club</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                @include('admin.layout.nav')
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

         <div id="page-wrapper">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">ADD </button>
                          <!--  @if (session('success'))
                                <div class="flash-message">
                                <div class="alert alert-success">

                                </div>
                                </div>
                            @endif -->
                            @if (Session::has('message'))
                                 <div id="alert" class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="pre-scrollable">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>DSA Name</th>
                                        <th>Email-ID</th>
                                        <th>Phone No.</th>
                                        <th>Role</th>
                                        <th>Location</th>
                                        
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php $i=1; foreach($admins as $admin){?>
                                    <tr class="odd gradeX">
                                       <td><?= $i++;?></td>
                                        <td><?= $admin->name;?></td>
                                         <td><?= $admin->email;?></td>
                                         <td><?= $admin->phone;?></td>
                                        
                                         <?php foreach ($roles as $rol) {
                                             if ($rol->roleId==$admin->role) { ?>
                                                 <td><?= $rol->role;?></td>
                                             <?php }?>
                                         <?php } ?>

                                         <?php foreach($locations as $location){
                                         if($location->id == $admin->location) { ?>
                                         <td><?= $location->locationName;?></td>
                                        <?php  } ?>

                                        <?php } ?>
                                        <td><a  class="fa fa-pencil btn btn-primary" href="{{url('/admin-user/edit-admin')}}/<?= $admin->id;?>"></a>&nbsp;&nbsp;&nbsp;<a class="fa fa-trash btn btn-danger" href="{{ url('/admin-user/delete-admin')}}/<?= $admin->id;?>" onclick="return confirm('Are you sure you want to delete this item?');"></a></td>
                                    </tr>
                                    <?php }?>
                                </tbody>

                            </table>
                            </div><!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- model -->
            <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                           
                            <h4 class="modal-title">Add Admin</h4>
                          </div>
                          <div class="modal-body">
                       
                        
                                    <form role="form" method="post" action="{{ route('store') }}">
                                        <?php echo csrf_field();?>
                                        <div class="form-group">
                                            <label>DSA Name</label>
                                            <input type="text" class="form-control" name="name" id="dsa_name" placeholder="Enter DSA Name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Email-ID</label>
                                            <input type="email" class="form-control" name="email" id="dsa_email" placeholder="Enter Email-Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" id="dsa_pass" placeholder="Password" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input class="form-control" name="phone" id="dsa_phone" placeholder="Enter Phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="dsa_role"  required>
                                                <option>Please Select Role</option>
                                                <?php foreach($roles as $role){?>
                                                <option value="<?php echo $role->roleId?>"><?php echo $role->role?></option><?php }?>
                                        </select></div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <select  class="form-control" name="location" id="location" placeholder="Enter text" required>
                                                <option>Please Select</option>
                                                <?php foreach($locations as $location){ ?>
                                                <option value="<?php echo $location->id;?>"><?php echo $location->locationName;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        
                                
                                       
                                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                                        <button type="button" class="btn btn-default pull pull-right" data-dismiss="modal">Close</button>
                                    </form>
                        
                        </div>

                      </div>
                    </div>
            <!-- close -->
            
            <!-- /.row -->
        </div>
      
    <script>
   window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>
@include('admin.layout.footer')