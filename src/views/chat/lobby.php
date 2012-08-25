<h1>Lobby</h1>

<?php for ($room_no = 0; $room_no < $room_count; $room_no++) : ?>
  <div id="room_<?php echo $room_no ?>">
    <span class="room_no"><?php echo sprintf("%03d", $room_no) ?></span>
    <span class="room_entrance">
      <a href="/chat/entrance/<?php echo $room_no ?>">入室</a>
    </span>
    <span class="room_name">部屋名<?php echo $room_no ?></span>
  </div>
<?php endfor; ?>

<p><a href="/chat/helpTop">チャットに関するヘルプについて</a></p>