<div class="container">

    <ul class="unstyled">
        <h3>All Jobs</h3>
        <?php foreach ($status as $s): ?>
        <li><?php echo $counts[$s->id].' '.$s->status; ?></li>
    	<?php endforeach; ?>
    </ul>
</div>