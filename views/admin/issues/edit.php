<form method="POST">
    <p>
        Issue tittle:
        <input type="text" name="title" value="<?php echo addslashes($issue['title']) ?>" />
    </p>
    <p>
        Description:
        <input type="text" name="description" value="<?php echo addslashes($issue['description']) ?>" />
    </p>
    <p>
        State:
        <select name="state">
            <option><?php echo addslashes($issue['state_id']) ?></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </p>
    <input type="hidden" name="id" value="<?php echo $issue['id'] ?>" />
    <input type="hidden" name="dateTime" value="<?php echo $issue['submission_date_and_time'] ?>" />
    <input type="hidden" name="user_id" value="<?php echo $issue['user_id'] ?>" />
    <input type="submit" />
</form>