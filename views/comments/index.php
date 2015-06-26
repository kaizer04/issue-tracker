<div>
<?php foreach($comments as $comment): ?>
    <h3><?php echo $comment['issue_id']; ?></a></h3>
    <p><?php echo $comment['text']; ?></p>
    <p>author: <?php echo $comment['visitor_name']; ?></p>
    <hr>
<?php endforeach;?>
</div>