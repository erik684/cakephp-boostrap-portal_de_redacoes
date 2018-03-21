<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Redacao Entity
 *
 * @property int $id_redacao
 * @property string $titulo
 * @property string $texto
 * @property string $nota
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $id_usuario
 */
class Redacao extends Entity
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
        'titulo' => true,
        'texto' => true,
        'nota' => true,
        'created' => true,
        'modified' => true,
        'id_usuario' => true
    ];
}
