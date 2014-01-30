<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0000     127088   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0030     314520   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3110    3983312   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3350    3987848   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3370    3989064   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3560    4363800   6. sfDoctrineGenerateModuleTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    0.3680    4854864   7. sfDoctrineGenerateModuleTask->executeGenerate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:98
    0.3690    4867384   8. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:117
    0.3820    5003144   9. sfModelGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    0.4400    6491048  10. sfGenerator->generatePhpFiles() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:61
    0.9231    6499208  11. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:67
    0.9561    6527472  12. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    1.2081    7787952  13. sfModelGenerator->getPrimaryKeyUrlParams() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php:8
    1.2081    7788168  14. sfDoctrineGenerator->getColumnGetter() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:169
    1.2081    7788216  15. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php:100
    1.2081    7788584  16. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    1.2081    7789160  17. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362


Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0000     127088   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0030     314520   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3110    3983312   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3350    3987848   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3370    3989064   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3560    4363800   6. sfDoctrineGenerateModuleTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    0.3680    4854864   7. sfDoctrineGenerateModuleTask->executeGenerate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:98
    0.3690    4867384   8. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:117
    0.3820    5003144   9. sfModelGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    0.4400    6491048  10. sfGenerator->generatePhpFiles() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:61
    0.9231    6499208  11. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:67
    0.9561    6527472  12. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    1.2081    7787952  13. sfModelGenerator->getPrimaryKeyUrlParams() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php:8
    1.2081    7788168  14. sfDoctrineGenerator->getColumnGetter() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:169
    1.2081    7788216  15. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php:100
    1.2081    7788584  16. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    1.2081    7789160  17. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362

id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('job/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'job/delete?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0000     127088   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0030     314520   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3110    3983312   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3350    3987848   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3370    3989064   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3560    4363800   6. sfDoctrineGenerateModuleTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    0.3680    4854864   7. sfDoctrineGenerateModuleTask->executeGenerate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:98
    0.3690    4867384   8. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:117
    0.3820    5003144   9. sfModelGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    0.4400    6491048  10. sfGenerator->generatePhpFiles() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:61
    0.9231    6499208  11. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:67
    0.9561    6527472  12. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    1.2181    7787952  13. sfModelGenerator->getPrimaryKeyUrlParams() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php:29
    1.2181    7788168  14. sfDoctrineGenerator->getColumnGetter() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:169
    1.2181    7788216  15. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php:100
    1.2181    7788584  16. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    1.2181    7789160  17. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362


Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Call Stack:
    0.0000     127088   1. {main}() C:\xampp\htdocs\jobeet\symfony:0
    0.0030     314520   2. include('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php') C:\xampp\htdocs\jobeet\symfony:14
    0.3110    3983312   3. sfSymfonyCommandApplication->run() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\cli.php:20
    0.3350    3987848   4. sfTask->runFromCLI() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\command\sfSymfonyCommandApplication.class.php:76
    0.3370    3989064   5. sfBaseTask->doRun() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfTask.class.php:97
    0.3560    4363800   6. sfDoctrineGenerateModuleTask->execute() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\task\sfBaseTask.class.php:68
    0.3680    4854864   7. sfDoctrineGenerateModuleTask->executeGenerate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:98
    0.3690    4867384   8. sfGeneratorManager->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\task\sfDoctrineGenerateModuleTask.class.php:117
    0.3820    5003144   9. sfModelGenerator->generate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGeneratorManager.class.php:113
    0.4400    6491048  10. sfGenerator->generatePhpFiles() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:61
    0.9231    6499208  11. sfGenerator->evalTemplate() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:67
    0.9561    6527472  12. require('C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php') C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfGenerator.class.php:84
    1.2181    7787952  13. sfModelGenerator->getPrimaryKeyUrlParams() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\data\generator\sfDoctrineModule\default\template\templates\_form.php:29
    1.2181    7788168  14. sfDoctrineGenerator->getColumnGetter() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\generator\sfModelGenerator.class.php:169
    1.2181    7788216  15. sfInflector::camelize() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\plugins\sfDoctrinePlugin\lib\generator\sfDoctrineGenerator.class.php:100
    1.2181    7788584  16. sfToolkit::pregtr() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfInflector.class.php:32
    1.2181    7789160  17. preg_replace() C:\xampp\htdocs\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php:362

id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
