<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property string $lower
 * @property string $upper
 * @property string $preamble
 * @property string $text
 * @property string $extra1
 * @property string $extra2
 * @property string $extra3
 * @property string $extra4
 * @property string $extra5
 * @property string $extra6
 * @property int $inversenumber
 */
class Article extends Entity
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
        '*' => true,
        'id' => false
    ];
}
