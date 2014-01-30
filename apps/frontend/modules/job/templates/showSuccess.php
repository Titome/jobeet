<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>

<div id="job">
    <h1><?php echo $job->getCompany() ?></h1>
    <h2><?php echo $job->getLocation() ?></h2>
    <h3>
        <?php echo $job->getPosition() ?>
        <small> - <?php echo $job->getType() ?></small>
    </h3>
    
    
</div>