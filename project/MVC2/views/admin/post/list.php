






                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Post</h2>
                                <a type="button" class="btn btn-success" href="index.php?mod=admin&c=post&act=create">Add new</a>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>NAME</th>
                                                <th>DESCRIPTION</th>
                                                <th class="text-right">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($posts as $key => $post) {?>
                                            <tr>
                                                <td><?php echo $post['posts_id'];  ?></td>
                                                <td><?php echo $post['posts_name'];  ?></td>
                                                <td><?php echo $post['posts_description'];  ?></td>
                                                <td>
<a class="btn btn-primary btn-sm" href="index.php?mod=admin&c=post&act=show&id=<?php echo $post['posts_id'] ?>">Detail</a>
<a class="btn btn-warning btn-sm" href="index.php?mod=admin&c=post&act=edit&id=<?php echo $post['posts_id'] ?>">Edit</a>
<a class="btn btn-danger btn-sm"  href="index.php?mod=admin&c=post&act=delete&id=<?php echo $post['posts_id'] ?>">Delete</a>
                                               </td>
                                            </tr>
                                        </tbody>
                                        <?php }  ?>
                                    </table>
                                </div>
                            </div>
                            
                        </div>