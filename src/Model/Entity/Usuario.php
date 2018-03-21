<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string $nome_usuario
 * @property string $sobrenome_usuario
 * @property string $apelido_usuario
 * @property string $senha
 */
class Usuario extends Entity
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
        'nome_usuario' => true,
        'sobrenome_usuario' => true,
        'apelido_usuario' => true,
        'senha' => true
    ];

    protected function _setNome_usuario($nome_usuario)
    {
        return (strtolower($nome_usuario));
    }

    protected function _setSobrenome_usuario($sobrenome_usuario)
    {
        return (strtolower($sobrenome_usuario));
    }

    protected function _setSenha($senha)
    {
        return (new DefaultPasswordHasher)->hash($senha);
    }
}
