<?php if (isset($users) && is_array($users)): ?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user->name ?> - <?= $user->email ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No users available.</p>
<?php endif; ?>

    
    