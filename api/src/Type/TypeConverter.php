<?php

namespace App\Type;

use ApiPlatform\Core\GraphQl\Type\TypeConverterInterface;
use App\Entity\Greeting;
use GraphQL\Type\Definition\Type as GraphQLType;
use Symfony\Component\PropertyInfo\Type;

/**
 * Class TypeConverter
 * @package App\Type
 */
final class TypeConverter implements TypeConverterInterface
{
    private TypeConverterInterface $defaultTypeConverter;

    /**
     * TypeConverter constructor.
     * @param TypeConverterInterface $defaultTypeConverter
     */
    public function __construct(TypeConverterInterface $defaultTypeConverter)
    {
        $this->defaultTypeConverter = $defaultTypeConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function convertType(Type $type, bool $input, ?string $queryName, ?string $mutationName, ?string $subscriptionName, string $resourceClass, string $rootResource, ?string $property, int $depth)
    {
        if ($property === 'customsTypeManual' && $rootResource === Greeting::class) {
            return GraphQLType::string();
        } else {
            return $this->defaultTypeConverter->convertType($type, $input, $queryName, $mutationName, $subscriptionName, $resourceClass, $rootResource, $property, $depth);
        }
    }

    /**
     * @inheritDoc
     */
    public function resolveType(string $type): ?GraphQLType
    {
        return $this->defaultTypeConverter->resolveType($type);
    }
}
