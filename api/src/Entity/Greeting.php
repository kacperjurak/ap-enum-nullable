<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Enum\CustomsTypeManual;
use Doctrine\ORM\Mapping as ORM;
use Elao\Enum\Bridge\Symfony\Validator\Constraint\Enum as EnumAssert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 */
#[ApiResource(mercure: true)]
class Greeting
{
    /**
     * The entity ID
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * A nice person
     *
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $name = '';

    /**
     * @ORM\Column(type="customs_type_manual_enum", nullable=true)
     * @Groups({"greeting:read", "greeting:write", "item_query", "collection_query", "greeting:mutation"})
     * @EnumAssert(class="App\Enum\CustomsTypeManual")
     */
    private ?CustomsTypeManual $customsTypeManual = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomsTypeManual(): ?CustomsTypeManual
    {
        return $this->customsTypeManual;
    }

    public function setCustomsTypeManual(?CustomsTypeManual $customsTypeManual): self
    {
        $this->customsTypeManual = $customsTypeManual;

        return $this;
    }
}
