<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Filesystem;
use Magento\TestFramework\Helper\Bootstrap;

$objectManager = Bootstrap::getObjectManager();
$fileSystem = $objectManager->get(Filesystem::class);
$tmpDirectory = $fileSystem->getDirectoryWrite(DirectoryList::SYS_TMP);
$fileName = 'tablerates.csv';

unlink($tmpDirectory->getAbsolutePath($fileName));
