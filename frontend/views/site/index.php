<?php

/* @var $this yii\web\View */
/* @var $filesList array */
/* @var $file \Google\Service\Drive\DriveFile */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Google Drive Files List</h1>

        <p class="lead">Using Google Drive API V3</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Title</th>
                        <th>Thumb Link</th>
                        <th>Download Link</th>
                        <th>Modified At</th>
                        <th>File Size</th>
                        <th>Owner Name</th>
                    </thead>
                    <tbody>
                        <?php foreach ($filesList as $file): ?>
                            <tr>
                            <td><?= $file->getName() ?></td>
                            <td><?= $file->getThumbnailLink() ?></td>
                            <td><?= $file->getDriveId() ?></td>
                            <td><?= $file->getModifiedTime() ?></td>
                            <td><?= $file->getSize() ?></td>
                            <td><?= implode(', ',$file->getOwners()) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
