<div>
<?php foreach($issues as $issue): ?>
    <h3><a href=""><?php echo $issue['title']; ?></a></h3>
    <p>
        <span>author: <?php echo $issue['user_id']; ?></span>
        <span>submited at: <?php echo $issue['submission_date_and_time']; ?></span>
    </p>
    <p>State: <?php echo $issue['state_id']; ?></p>
    <hr>
<?php endforeach;?>
</div>