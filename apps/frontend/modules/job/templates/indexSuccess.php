<?php use_stylesheet('jobs.css') ?>

<!-- WARNING : it's a id at origin, but in the css file, this is configurate for a class -->
<div class="jobs">
    <table>
        <?php foreach ($jobeet_jobs as $i => $job): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <td class="location"><?php echo $job->getLocation() ?></td>
                <td class="position">
                    <a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">
                        <?php echo $job->getPosition() ?>
                    </a>
                </td>
                <td class="company"><?php echo $job->getCompany() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>