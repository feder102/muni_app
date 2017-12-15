<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $cod_client
 * @property string $cod_vended
 * @property string $cod_zona
 * @property string $cond_vta
 * @property string $razon_soci
 * @property string $domicilio
 * @property string $tipo_doc
 * @property string $cuit
 * @property string $telefono_1
 * @property string $telefono_2
 * @property string $email
 * @property string $fecha_alta
 * @property string $cupo_credi
 * @property string $nom_com
 * @property string $dir_com
 * @property string $localidad
 * @property string $c_postal
 * @property string $provincia
 */
class Cliente extends Entity
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
        'cod_client' => true,
        'cod_vended' => true,
        'cod_zona' => true,
        'cond_vta' => true,
        'razon_soci' => true,
        'domicilio' => true,
        'tipo_doc' => true,
        'cuit' => true,
        'telefono_1' => true,
        'telefono_2' => true,
        'email' => true,
        'fecha_alta' => true,
        'cupo_credi' => true,
        'nom_com' => true,
        'dir_com' => true,
        'localidad' => true,
        'c_postal' => true,
        'provincia' => true
    ];
}
