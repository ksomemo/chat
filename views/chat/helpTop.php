<h1>Help</h1>

<?php foreach ($help_category_list as $help_category) : ?>
    <h4><a href="/chat/help/<?php echo $help_category['id'] ?>"><?php echo $help_category['name'] ?></a></h4>
    <ul>
        <?php $help_count = count($help_category['help']) ?>
        <?php foreach ($help_category['help'] as $key => $help) : ?>
            <?php if ($key % 2 == 0): ?>
                <li>
                <?php echo $help['title']; ?>
                <?php if ($help_count % 2 == 1 && $key == $help_count - 1): ?>
                    <?php echo '</li>'; ?>
                <?php endif; ?>
            <?php elseif ($key % 2 == 1): ?>
                <?php echo ' / '. $help['title'] ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
