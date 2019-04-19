<section class="padding-lg" style="background: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=956&q=80');">
    <div class="row heading heading-icon">
      <h2>Pengaturan Akun</h2>
    </div>
    <div class="container emp-profile">
        <form method="post" action="">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="http://www.webcoderskull.com/img/team4.png" alt=""/>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-head">
                        <h5>
                            <?php foreach ($users as $user) : {
                                # code...
                            } ?>
                            Selamat datang <?php echo $user['username']; ?>!
                        </h5>
                        <h6>
                            Status : User
                        </h6>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transaksi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab text-dark" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id</label>
                                </div>
                                <div class="col-md-6">
                                    <label><?php echo $user['id_user']; ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <label><?php echo $user['username']; ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <label><?php echo $user['email']; ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-6">
                                    <label><?php echo $user['gender']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Kagatau mau diisi apaan</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Test</p>
                                </div>
                            </div>
                            
                        </div>
                        <hr>    
                        <a href="" class="btn btn-primary float-right  ">Edit Akun</a>
                        <a href="<?php echo base_url('Akun/deleteAkun/'.$user['id_user']); ?>" class="btn btn-danger float-right mr-3 ">Delete Akun</a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
    
        </form>           
    </div>
</section>