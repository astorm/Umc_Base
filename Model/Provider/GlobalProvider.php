<?php
/**
 * Umc_Base extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Umc
 * @package   Umc_Base
 * @copyright 2015 Marius Strajeru
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Marius Strajeru <ultimate.module.creator@gmail.com>
 */
namespace Umc\Base\Model\Provider;

use Umc\Base\Model\Core\Module;

class GlobalProvider implements ProviderInterface
{
    /**
     * @var Module
     */
    protected $module;
    /**
     * @param Module $module
     * @return $this
     */
    public function setModule(Module $module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return \Umc\Base\Model\Core\AbstractModel[]|\Umc\Base\Model\Core\Module[]
     */
    public function getModels()
    {
        return [
            $this->module
        ];
    }
}
