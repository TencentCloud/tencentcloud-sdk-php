<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同审查清单
 *
 * @method string getId() 获取审查清单id
 * @method void setId(string $Id) 设置审查清单id
 * @method string getName() 获取审查清单名称
 * @method void setName(string $Name) 设置审查清单名称
 * @method integer getCount() 获取审查点数量
 * @method void setCount(integer $Count) 设置审查点数量
 * @method boolean getEnabled() 获取启用状态
 * @method void setEnabled(boolean $Enabled) 设置启用状态
 * @method string getUpdater() 获取修改人
 * @method void setUpdater(string $Updater) 设置修改人
 * @method integer getModifiedOn() 获取修改时间
 * @method void setModifiedOn(integer $ModifiedOn) 设置修改时间
 * @method boolean getOfficial() 获取是否官方清单
 * @method void setOfficial(boolean $Official) 设置是否官方清单
 * @method integer getConfigStatus() 获取配置状态，[0(未配置), 1(已配置)]
 * @method void setConfigStatus(integer $ConfigStatus) 设置配置状态，[0(未配置), 1(已配置)]
 */
class Checklist extends AbstractModel
{
    /**
     * @var string 审查清单id
     */
    public $Id;

    /**
     * @var string 审查清单名称
     */
    public $Name;

    /**
     * @var integer 审查点数量
     */
    public $Count;

    /**
     * @var boolean 启用状态
     */
    public $Enabled;

    /**
     * @var string 修改人
     */
    public $Updater;

    /**
     * @var integer 修改时间
     */
    public $ModifiedOn;

    /**
     * @var boolean 是否官方清单
     */
    public $Official;

    /**
     * @var integer 配置状态，[0(未配置), 1(已配置)]
     */
    public $ConfigStatus;

    /**
     * @param string $Id 审查清单id
     * @param string $Name 审查清单名称
     * @param integer $Count 审查点数量
     * @param boolean $Enabled 启用状态
     * @param string $Updater 修改人
     * @param integer $ModifiedOn 修改时间
     * @param boolean $Official 是否官方清单
     * @param integer $ConfigStatus 配置状态，[0(未配置), 1(已配置)]
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Official",$param) and $param["Official"] !== null) {
            $this->Official = $param["Official"];
        }

        if (array_key_exists("ConfigStatus",$param) and $param["ConfigStatus"] !== null) {
            $this->ConfigStatus = $param["ConfigStatus"];
        }
    }
}
