<?php use_stylesheet('jobs.css') ?>

<!-- WARNING : it's a id at origin, but in the css file, this is configurate for a class
               and you need at a id for the ajax -->
<div class="jobs" id="jobs">
    <?php foreach ($categories as $category): ?>
        <div class="category_<?php echo Jobeet::slugify($category->getName()) ?>">
            <div class="category">
                <div class="feed">
                    <a href="<?php echo url_for('category', array('sf_subject' => $category, 'sf_format'  => 'atom')) ?>">Feed</a>
                </div>
                <h1><?php echo link_to($category, 'category', $category) ?></h1>
            </div>
            
            <?php include_partial('global/list', 
                        array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage'))))
            ?>
            
            <?php 
                if (($count = $category->countActiveJobs() - sfConfig::get('app_max_jobs_on_homepage')) > 0):
            ?>
                <div class="more_jobs">
                    <?php echo __('and %count% more ...',
                            array('%count%' => link_to($count, 'category', $category))) ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>