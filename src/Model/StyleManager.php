<?php

namespace App\Model;

class StyleManager extends AbstractManager
{
    public const TABLE = 'style';

    public function styleName($identifier): array
    {
        $statement = $this->pdo->prepare("SELECT name FROM " . self::TABLE . " WHERE identifier=:identifier");
        $statement->bindValue('identifier', $identifier);
        $statement->execute();
        return $statement->fetchall(\PDO::FETCH_ASSOC);
    }
}
