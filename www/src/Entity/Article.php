<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use DateTimeImmutable;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $path;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $annotation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seo_title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seo_h1 = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(
        type: 'datetime_immutable',
        nullable: false
    )]
    #[Gedmo\Timestampable(on:"create")]
    private ?\DateTimeImmutable $created_at;

    #[ORM\Column(
        type: 'datetime_immutable',
        nullable: false,
        options: ['default'=>'CURRENT_TIMESTAMP']
    )]
    #[Gedmo\Timestampable(on:"update")]
    private ?\DateTimeImmutable $updated_at;

    public function __construct()
    {
        $this->created_at = new DateTimeImmutable();
        $this->updated_at = new DateTimeImmutable();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    public function setAnnotation(?string $annotation): static
    {
        $this->annotation = $annotation;

        return $this;
    }

    public function getSeoTitle(): ?string
    {
        return $this->seo_title;
    }

    public function setSeoTitle(?string $seo_title): static
    {
        $this->seo_title = $seo_title;

        return $this;
    }

    public function getSeoH1(): ?string
    {
        return $this->seo_h1;
    }

    public function setSeoH1(?string $seo_h1): static
    {
        $this->seo_h1 = $seo_h1;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
