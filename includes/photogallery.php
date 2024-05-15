<?php

// Check connection
if (!$pdo) {
    die("Connection failed: " . $pdo->errorInfo());
}

$sql = "SELECT * FROM photogallery WHERE status = 1";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
    while($row = $result->fetch()) {
        $photo = $row["photo"];
?>

          <div class="col-xs-10 col-md-6 col-lg-4" data-animate='{"class":"fadeInUpBig","delay":"0.3s"}'>
            <!-- Post classic-->
            <div class="post post-sm"><img src="images/photogallery/<?php echo $photo ?>" alt="" width="400" style = "min-height: 258px;" height="257">
              <!-- <div class="post-meta">
                <div class="post-meta-item">News</div>
              </div>
              <h4 class="post-title"><a href="blog-post<?php echo '?post='.$row['id']; ?>" target="_blank">U.S. Army evaluates new Stryker combat vehicle</a></h4> -->
            </div>
          </div>
<?php
    }
} else {
    echo "No images found";
}
?>
