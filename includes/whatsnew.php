<div class="col-12">
  <div>
    <h2>LATEST NEWS</h2>
    <div>
      <div class="views-view-marquee marquee-direction-up">
        <marquee direction=up behavior=scroll scrollamount=2 scrolldelay=1 onmouseover=this.stop(); onmouseout=this.start(); style="max-height: 250px; min-height: 150px">

      <?php
      // Prepare and execute query to retrieve categories and dates from 'news' table
      $stmt = $pdo->prepare("SELECT categories, date, status FROM news ORDER BY date DESC");
      $stmt->execute();

      // Fetch data and display the category and date for each row
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($rows as $row) {
        if ($row["status"] == 1) {
      ?>

      <div class="marquee-row" style="color: white; font-size: 20px;">
        <div class="post-title"><span class="post-title">
          <?php echo $row["categories"]?>
          </span></div>
        <div class="views-field views-field-field-start-date">
          <div class="field-content"><u><b><time datetime="<?php echo $row["date"]?>"><?php echo $row["date"]?>.</b></u></time>
            <br>
            <br>
          </div>
        </div>
      </div>

      <?php
        }
      }
      // Check if no data is returned from the query
      if (empty($rows)) {
        ?>
        <div class="marquee-row" style="color: white; font-size: 25px;">
        <div class="post-title"><span class="post-title">
          No Latest News Available.
          </span></div>
      </div>
      <?php
      }
      ?>
        </marquee>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>