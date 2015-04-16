<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Backend\Console\Command;

/**
 * Command for flushing cache
 */
class CacheFlushCommand extends AbstractCacheTypeManageCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('cache:flush');
        $this->setDescription('Flushes cache type(s)');
        parent::configure();
    }

    /**
     * Flushes cache types
     *
     * @param array $cacheTypes
     * @return void
     */
    protected function performAction(array $cacheTypes)
    {
        $this->cacheManager->flush($cacheTypes);
    }

    /**
     * {@inheritdoc}
     */
    protected function getDisplayMessage()
    {
        return 'Flushed cache types:';
    }
}
