            <div class="col-md-4">
              <?php
                if(isset($_POST['submit'])) {
                $search = $_POST['search'];
                // $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                // $search_query = mysqli_query($connection, $query);
                $search_query = $connection->prepare("SELECT * FROM posts WHERE post_tags LIKE '%$search%' ");
                $search_query->execute();

                if(!$search_query) {
                  die("QUERY FAILED" . $connection->errorInfo());
                }

                $count = $search_query->rowCount();
                if($count == 0) {
                  echo "<h1>No result</h1>";
                } else {
                  echo "SOME RESULTS";
                }

                }
              ?>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                      <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                      </div>
                    </form>

                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">

                <?php

                  $cat_sidebar = "SELECT * FROM categories";
                  $res = $connection->query($cat_sidebar);

                ?>


                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                            <?php

                            while ($row = $res->fetch()) {
                                  // while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                              $cat_title = $row['cat_title'];
                              echo "<li><a href='#'>{$cat_title}</a></li>";
                            }
                            $res->closeCursor();

                            ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->

                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>
