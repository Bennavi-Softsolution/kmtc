        <?php 
        $page_id = null;
       
        $comp_model = new SharedController;
        ?>
        <div  class="my-1">
            <div class="container-fluid">
                <div class="page-header"><h4>Kmtc Testa</h4></div>
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <?php
                            $nacontroller=new NavController;
                            $db=$nacontroller->GetModel();
                            $sql="SELECT * FROM nav ORDER BY rand() LIMIT 1";
                            $aa=$db->rawQuery($sql);
                            foreach($aa as $key=>$value){
                            }
                            ?>
                            <?php foreach($aa as $key=>$value): ?>
                            <div class="card" style="background-image:url(' <?php echo$value['image'] ?>');background-size:cover;">
                                <div class="card-header">
                                    <div class="card-title">
                                        <a class="btn btn-primary" href="./home" role="button">Login</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="custom-btn-group">
                                        <!-- Buttons -->
                                        <a class="btn btn-primary" href="./questions_answers" role="button">Questions&Answers</a>
                                        <a class="btn btn-primary" href="./kmtc_test_papers" role="button">Test Papers</a>
                                    </div>
                                </div>
                            <?php endforeach;?></div>
                        </div>
                        <div class="col-md-4 d-none comp-grid">
                            <?php $this :: display_page_errors(); ?>
                            
                            <div  class="bg-light p-3 animated fadeIn page-content">
                                <div>
                                    <h4><i class="icon-key"></i> User Login</h4>
                                    <hr />
                                    <?php 
                                    $this :: display_page_errors(); 
                                    ?>
                                    <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                        <div class="input-group form-group">
                                            <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="form-control-feedback icon-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group form-group">
                                            <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="form-control-feedback icon-key"></i></span>
                                            </div>
                                        </div>
                                        <div class="row clearfix mt-3 mb-3">
                                            <div class="col-6">
                                                <label class="">
                                                    <input value="true" type="checkbox" name="rememberme" />
                                                    Remember Me
                                                </label>
                                            </div>
                                            <div class="col-6">
                                                <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                                <i class="load-indicator">
                                                    <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                                </i>
                                                Login <i class="icon-key"></i>
                                            </button>
                                        </div>
                                        <hr />
                                        <div class="text-center">
                                            Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                            <i class="icon-user"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="my-0">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class=""><div class="main-container-fluid">
                                <!-- Row start -->
                                <div class="row sm-gutters">
                                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <?php
                                            $blogcontroller=new BlogaController;
                                            $db=$blogcontroller->GetModel();
                                            $sql="SELECT * FROM bloga ORDER BY rand() LIMIT 1";
                                            $aa=$db->rawQuery($sql);
                                            foreach($aa as $key=>$value){
                                            }
                                            ?>
                                            <?php foreach($aa as $key=>$value): ?>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="blog">
                                                    <img class="blog-img" src="<?php echo$value['image'] ?>" alt="Card image cap">
                                                        <div class="blog-body">
                                                            <h2 class="blog-title"><?php echo$value['title'] ?></h2>
                                                            <h6 class="blog-date">
                                                                <span class="category"><?php echo$value['subtitle'] ?></span>
                                                                <span class="divider">/</span>
                                                                <span class="date"><?php echo datetime_now();?></span>
                                                            </h6>
                                                            <div class="blog-description">
                                                                <p><?php echo$value['content'] ?></p>
                                                            </div>
                                                            <div class="blog-actions">
                                                                <a href="<?php echo$value['link'] ?>" class="btn btn-primary"><?php echo$value['buttontitle'] ?></a>
                                                                <div class="actions">
                                                                    <a href="#"><i class="icon-favorite red"></i>970</a>
                                                                    <a href="#"><i class="icon-thumbs-up green"></i>725</a>
                                                                    <a href="#"><i class="icon-comment blue"></i>95</a>
                                                                    <a href="#"><i class="icon-share grey"></i>250</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach;?>
                                                <?php
                                                $blogscontroller=new BlogbController;
                                                $db=$blogscontroller->GetModel();
                                                $sql="SELECT * FROM blogb ORDER BY rand() LIMIT 1";
                                                $aa=$db->rawQuery($sql);
                                                foreach($aa as $key=>$value){
                                                }
                                                ?>
                                                <?php foreach($aa as $key=>$value): ?>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="blog">
                                                        <img class="blog-img" src="<?php echo$value['image'] ?>" alt="Card image cap">
                                                            <div class="blog-body">
                                                                <h2 class="blog-title"><?php echo$value['title'] ?></h2>
                                                                <h6 class="blog-date">
                                                                    <span class="category"><?php echo$value['subtitle'] ?></span>
                                                                    <span class="divider">/</span>
                                                                    <span class="date"><?php echo datetime_now();?></span>
                                                                </h6>
                                                                <div class="blog-description">
                                                                    <p><?php echo$value['content'] ?></p>
                                                                </div>
                                                                <div class="blog-actions">
                                                                    <a href="<?php echo$value['link'] ?>" class="btn btn-primary"><?php echo$value['button'] ?></a>
                                                                    <div class="actions">
                                                                        <a href="#"><i class="icon-favorite red"></i>550</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach;?>
                                                    <?php
                                                    $bloccontroller=new BlogdController;
                                                    $db=$bloccontroller->GetModel();
                                                    $sql="SELECT * FROM blogd ORDER BY rand() LIMIT 1";
                                                    $aa=$db->rawQuery($sql);
                                                    foreach($aa as $key=>$value){
                                                    }
                                                    ?>
                                                    <?php foreach($aa as $key=>$value): ?>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="blog">
                                                            <img class="blog-img" src="<?php echo$value['image'] ?>" alt="Card image cap">
                                                                <div class="blog-body">
                                                                    <h2 class="blog-title"><?php echo$value['title'] ?></h2>
                                                                    <h6 class="blog-date">
                                                                        <span class="category"><?php echo$value['subtitle'] ?></span>
                                                                        <span class="divider">/</span>
                                                                        <span class="date"><?php echo datetime_now();?></span>
                                                                    </h6>
                                                                    <div class="blog-description">
                                                                        <p><?php echo$value['content'] ?></p>
                                                                    </div>
                                                                    <div class="blog-actions">
                                                                        <a href="<?php echo$value['link'] ?>" class="btn btn-primary"><?php echo$value['button'] ?></a>
                                                                        <div class="actions">
                                                                            <a href="#"><i class="icon-favorite grey"></i>620</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <?php endforeach;?>
                                                    <!-- Row end -->
                                                </div>
                                                <?php
                                                $blockcontroller=new BlogeController;
                                                $db=$blockcontroller->GetModel();
                                                $sql="SELECT * FROM bloge ORDER BY rand() LIMIT 1";
                                                $aa=$db->rawQuery($sql);
                                                foreach($aa as $key=>$value){
                                                }
                                                ?>
                                                <?php foreach($aa as $key=>$value): ?>
                                                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <!-- Row start -->
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="blog">
                                                                <img class="blog-img" src="<?php echo$value['image'] ?>" alt="Card image cap">
                                                                    <div class="blog-body">
                                                                        <p><?php echo$value['content'] ?></p>
                                                                        <div class="blog-actions">
                                                                            <a href="<?php echo$value['link'] ?>" class="btn btn-primary"><?php echo$value['button'] ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endforeach;?>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <div class="card-title">Latest Units</div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="categories">
                                                                            <?php
                                                                            $notescontroller=new Search_notesController;
                                                                            $db=$notescontroller->GetModel();
                                                                            $sql="SELECT * FROM search_notes ORDER BY rand() LIMIT 10";
                                                                            $aa=$db->rawQuery($sql);
                                                                            foreach($aa as $key=>$value){
                                                                            }
                                                                            ?>
                                                                            <?php foreach($aa as $key=>$value): ?>
                                                                            <a href="./search_notes"><span class="badge"><?php echo$value['unit'] ?></span></a>
                                                                            <?php endforeach;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <div class="card-title">Latest Questions Posts</div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="popular-posts">
                                                                            <?php
                                                                            $quizcontroller=new Questions_answersController;
                                                                            $db=$quizcontroller->GetModel();
                                                                            $sql="SELECT * FROM questions_answers ORDER BY rand() LIMIT 1";
                                                                            $aa=$db->rawQuery($sql);
                                                                            foreach($aa as $key=>$value){
                                                                            }
                                                                            ?>
                                                                            <?php foreach($aa as $key=>$value): ?>
                                                                            <a href="./questions_answers">
                                                                                <img src="assets/images/pdf.png" class="post-img" alt="Le Rouge Blog Post" />
                                                                                <div class="post-content">
                                                                                    <h6 class="post-title"><?php echo $value['class'];?></h6>
                                                                                    <h6 class="post-date">
                                                                                        <span class="category"><?php echo $value['unit'];?></span>
                                                                                        <span class="divider">/</span>
                                                                                        <span class="date"><?php echo $value['date'];?></span>
                                                                                    </h6>
                                                                                </div>
                                                                            </a>
                                                                            <?php endforeach;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                                <!-- Row end -->
                                            </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            