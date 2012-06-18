<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf8">
  <title>Chat</title>
</head>


<body>
  <h1>Lobby</h1>

  <?php for ($i = 0; $i < 3; $i++) : ?>
  <div id="room_<?php echo $i ?>">
    <span class="room_no"><?php echo sprintf("%03d", $i) ?></span>
    <span class="room_entrance">
      <a href="entrance.php">入室</a>
    </span>
    <span class="room_name">部屋名<?php echo $i ?></span>
  </div>
  <?php endfor; ?>

</body>

</html>
