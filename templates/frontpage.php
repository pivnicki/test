<?php include_once './includes/header.php'; ?>
     <div class="row">
            <div class="col-md-8">
                <?php if($topics):?>
                <?php foreach ($topics as $topic):?>
                <div class="list-group lg-border">
                    <a href="#" class="list-group-item active"><?php echo $topic["title"]  ;?></a>

                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">
                            <?php echo $topic["name"];?> >>
                                <?php echo $topic["username"];?>>>
                                Posted on <?php echo $topic["create_date"];?>
                        </h4>

                    </div>
                    <div class="list-group-item">

                    </div> <a class="list-group-item disabled">
                        <span class="badge">14</span>Messages</a>
                </div>
                <?php endforeach;?>
                <?php else:?>
                <p>No topics to display</p>
                <?php endif;?>
                

            </div>
            <?php include_once './includes/footer.php'; ?>