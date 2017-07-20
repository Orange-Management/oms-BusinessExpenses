<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @author     OMS Development Team <dev@oms.com>
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
declare(strict_types=1);
namespace Modules\BusinessExpenses\Admin;

use phpOMS\DataStorage\Database\DatabasePool;
use phpOMS\Module\UpdateAbstract;
use phpOMS\System\File\Directory;

/**
 * Navigation class.
 *
 * @category   Modules
 * @package    Modules\Admin
 * @author     OMS Development Team <dev@oms.com>
 * @license    OMS License 1.0
 * @link       http://orange-management.com
 * @since      1.0.0
 */
class Update extends UpdateAbstract
{

    /**
     * {@inheritdoc}
     */
    public static function update(DatabasePool $dbPool, array $info)
    {
        Directory::deletePath(__DIR__ . '/Update');
        mkdir('Update');
        parent::update($dbPool, $info);
    }
}