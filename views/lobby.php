<h1>Lobby</h1>
<?php $room_count = 3; ?>
<?php for ($i = 0; $i < $room_count; $i++) : ?>
  <div id="room_<?php echo $i ?>">
    <span class="room_no"><?php echo sprintf("%03d", $i) ?></span>
    <span class="room_entrance">
      <a href="entrance.php">入室</a>
    </span>
    <span class="room_name">部屋名<?php echo $i ?></span>
  </div>
<?php endfor; ?>
