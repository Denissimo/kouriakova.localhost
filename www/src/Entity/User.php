<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Sonata\UserBundle\Entity\BaseUser;

#[ORM\Entity( repositoryClass: UserRepository::class)]
#[ORM\Table( name: 'user')]
class User extends BaseUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    protected $id = null;

}
