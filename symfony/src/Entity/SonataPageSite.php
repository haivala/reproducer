<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseSite;

#[ORM\Table(name: 'page__site')]
#[ORM\Entity]
class SonataPageSite extends BaseSite
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    protected $id;
}
