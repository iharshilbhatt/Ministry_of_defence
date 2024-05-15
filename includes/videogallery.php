<div class="col-12 col-sm-4 col-md-4">
  <div class="video">
    <div>
      <div class="views-element-container" id="block-views-block-photo-gallery-block-1">
        <h2>Video Gallery</h2>
        <div>
          <div class="js-view-dom-id-01bc7ddbcce8d861f59b3a9fdaaaa36488ce1f1e79b1189a54f1cd207961b156">
            <div>
            <div id="flexslider-2" class="flexslider optionset-default">
                <ul class="slides">
                  <?php

                // query the database to fetch the video data
                  $stmt = $pdo->prepare("SELECT * FROM videogallery WHERE status = 1");
                  $stmt->execute();

                  if ($stmt->rowCount() > 0) {
                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          $link = $row["link"];
                          ?>
                          <li>
                              <div class="views-field views-field-field-image">
                                  <div class="field-content">  
                                      <iframe width="420" height="315" src="<?php echo $link ?>?autoplay=1&loop=1&mute=1"></iframe>
                                  </div>
                              </div>
                          </li>
                          <?php
                      }
                  } else {
                      echo "No Video found";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>