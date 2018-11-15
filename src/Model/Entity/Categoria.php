<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property int $parent_id
 * @property string $nombre
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParentCategoria $parent_categoria
 * @property \App\Model\Entity\ChildCategoria[] $child_categorias
 */
class Categoria extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'parent_id' => true,
        'nombre' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'parent_categoria' => true,
        'child_categorias' => true
    ];
}
