<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BaseBlock;

#[ORM\Table(name: 'page__block')]
#[ORM\Entity]
class SonataPageBlock extends BaseBlock
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    protected $id;
}
