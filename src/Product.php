<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'products')]
class Product
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $name;

    // Constructeur pour initialiser le nom à la création (optionnel)
    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    // Getter pour $id
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter pour $name
    public function getName(): string
    {
        return $this->name;
    }

    // Setter pour $name
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
