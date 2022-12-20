<?php

namespace App\Entity;

use App\Repository\QuickLinkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity(fields: ['slug'], message: 'There is already an entity with this slug')]
#[ORM\Entity(repositoryClass: QuickLinkRepository::class)]
final class QuickLink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::STRING)]
    private string $name;

    #[ORM\Column(type: Types::STRING)]
    #[Assert\Url]
    private string $url;

    #[ORM\Column(type: Types::STRING, unique: true)]
    private string $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return QuickLink
     */
    public function setName(string $name): QuickLink
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return QuickLink
     */
    public function setUrl(string $url): QuickLink
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return QuickLink
     */
    public function setSlug(string $slug): QuickLink
    {
        $this->slug = $slug;
        return $this;
    }
}
