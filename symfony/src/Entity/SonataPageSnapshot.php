<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseSnapshot;

#[ORM\Table(name: 'page__snapshot')]
#[ORM\Index(name: 'idx_snapshot_dates_enabled', columns: ['publication_date_start', 'publication_date_end', 'enabled'])]
#[ORM\Entity]
class SonataPageSnapshot extends BaseSnapshot
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    protected $id;
}
