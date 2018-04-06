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
                            Voucher Management
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                <?php foreach($update_voucher as $update_voc){?>        
                             <form  method="post" action="{{ url('edit') }}">
                                        <?php echo csrf_field();?>
                                           
                    <div class="row"> 
                        <div class="col-md-6">
                          <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="" id="name" name="name" value="<?= $update_voc->name; ?>" required>
                         </div>
                           <div class="form-group">
                                <label for="name">Email-Id</label>
                                <input type="text" class="" id="email" name="email" value="<?= $update_voc->email; ?>" required>
                         </div></div>
                         <div class="col-md-6">
                           <div class="form-group">
                                <label for="name">Mobile No.</label>
                                <input type="text" class="" id="mobno" name="mobno" value="<?= $update_voc->mobno; ?>" required>
                         </div>
                           <div class="form-group">
                                <label for="name">Address</label>
                                <input type="text"   id="address" name="address" value="<?= $update_voc->address; ?>" required></input>
                         </div></div>
                        <input type="hidden" name="id" >
                        <input type="hidden" name="voucher_code" >
                        <input type="hidden" name="dsaId" >
                        <input type="hidden" name="dsaName" >
                        <input type="hidden" name="date_of_generation" >
                        <input type="hidden" name="time" >
                        <input type="hidden" name="expiration_date" >
                        <input type="hidden" name="location_id" >

                        

                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="UPDATE" style="margin-left: 25px; margin-top: 15px;">
                    </div></div></div><?php }?></form>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- /.row -->
    
            
          
            
@include('admin.layout.footer')