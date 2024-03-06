<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PageBundle\Entity\BasePage;

#[ORM\Table(name: 'page__page')]
#[ORM\Entity]
class SonataPagePage extends BasePage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    protected $id;
}
