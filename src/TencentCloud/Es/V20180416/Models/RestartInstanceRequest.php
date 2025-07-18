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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method boolean getForceRestart() 获取是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false
 * @method void setForceRestart(boolean $ForceRestart) 设置是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false
 * @method integer getRestartMode() 获取重启模式：0 滚动重启； 1 全量重启
 * @method void setRestartMode(integer $RestartMode) 设置重启模式：0 滚动重启； 1 全量重启
 * @method boolean getUpgradeKernel() 获取重启时选择是否升级内核patch版本
 * @method void setUpgradeKernel(boolean $UpgradeKernel) 设置重启时选择是否升级内核patch版本
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var boolean 是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false
     */
    public $ForceRestart;

    /**
     * @var integer 重启模式：0 滚动重启； 1 全量重启
     */
    public $RestartMode;

    /**
     * @var boolean 重启时选择是否升级内核patch版本
     */
    public $UpgradeKernel;

    /**
     * @param string $InstanceId 实例ID
     * @param boolean $ForceRestart 是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false
     * @param integer $RestartMode 重启模式：0 滚动重启； 1 全量重启
     * @param boolean $UpgradeKernel 重启时选择是否升级内核patch版本
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("RestartMode",$param) and $param["RestartMode"] !== null) {
            $this->RestartMode = $param["RestartMode"];
        }

        if (array_key_exists("UpgradeKernel",$param) and $param["UpgradeKernel"] !== null) {
            $this->UpgradeKernel = $param["UpgradeKernel"];
        }
    }
}
