<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检测规则
 *
 * @method string getName() 获取健康检测规则
 * @method void setName(string $Name) 设置健康检测规则
 * @method boolean getEnabled() 获取是否检测此项目
 * @method void setEnabled(boolean $Enabled) 设置是否检测此项目
 * @method boolean getAutoRepairEnabled() 获取是否启用修复
 * @method void setAutoRepairEnabled(boolean $AutoRepairEnabled) 设置是否启用修复
 */
class HealthCheckPolicyRule extends AbstractModel
{
    /**
     * @var string 健康检测规则
     */
    public $Name;

    /**
     * @var boolean 是否检测此项目
     */
    public $Enabled;

    /**
     * @var boolean 是否启用修复
     */
    public $AutoRepairEnabled;

    /**
     * @param string $Name 健康检测规则
     * @param boolean $Enabled 是否检测此项目
     * @param boolean $AutoRepairEnabled 是否启用修复
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("AutoRepairEnabled",$param) and $param["AutoRepairEnabled"] !== null) {
            $this->AutoRepairEnabled = $param["AutoRepairEnabled"];
        }
    }
}
