<div class="container">

    <ul class="unstyled">
        <h3>All Jobs</h3>
        <?php foreach ($status as $s): ?>
        <li><a href="<?php echo Uri::Create("job/?status=".$s->id); ?>"><?php echo $counts[$s->id].' '.$s->status; ?></a></li>
    	<?php endforeach; ?>
    </ul>
</div>