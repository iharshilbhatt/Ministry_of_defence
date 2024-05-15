      <section class="section section-60 section-md-75 section-xl-90">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8 col-xl-9">
              <article class="post post-single">
                
          <?php
          // get the post ID from the query string
          $post_id = $_GET['post'];

          // prepare the SQL statement to fetch the post data
          $stmt = $pdo->prepare("SELECT * FROM regiment WHERE id = :id AND status = 1");
          $stmt->bindParam(':id', $post_id);
          $stmt->execute();
          $result = $stmt->fetch();

          if ($result) {
            $id = $result["id"];
            $name = $result["name"];
            $date = $result["date"];
            $photo = $result["photo"];
            $active_date = $result["active_date"];
            $center = $result["center"];
            $active_date = $result["active_date"];
            $motto = $result["motto"];
            $warcry = $result["warcry"];
          ?>



                <div class="post-image">
                  <figure><img src="images/regiment/<?php echo $photo; ?>" alt="" width="350" height="450" style="max-height: 450px; max-width: 350px;">
                  </figure>
                </div>
                <div class="post-header">
                  <h4><?php echo $name ?></h4>
                </div>
                <div class="post-meta">
                  <ul class="list-bordered-horizontal">
                    <li>
                      <dl class="list-terms-inline">
                        <dt>POST Date</dt>
                        <dd>
                          <time datetime="2021-01-22"><?php echo $date ?></time>
                        </dd>
                      </dl>
                    </li>
                    <li>
                      <dl class="list-terms-inline">
                        <dt>Active From</dt>
                        <dd><?php echo $active_date ?></dd>
                      </dl>
                    </li>
                    <li>
                      <dl class="list-terms-inline">
                        <dt>Regional Center</dt>
                        <dd><?php echo $center ?></dd>
                      </dl>
                    </li>
                  </ul>
                </div>
                <div class="divider-fullwidth bg-gray-light"></div>
                <div class="post-body">
                </div>
              </article>
            </div>
          </div>
          <p>Moto: <?php echo $motto ?></p>
          <p>Warcry: <?php echo $warcry ?></p>
        </div>

          <?php
          } else {
          ?>
            <div class="col-sm-12">
              <h1>404</h1>
              <h4>The link is broken</h4>
              <a href="index">
                <p style="font-size: 20px;">Navigate back!</p>
              </a>
            </div>
          <?php
          }
          ?>

      </section>
    </div>