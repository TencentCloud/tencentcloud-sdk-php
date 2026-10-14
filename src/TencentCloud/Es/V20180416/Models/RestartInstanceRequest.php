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
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method boolean getForceRestart() 获取<p>是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false</p>
 * @method void setForceRestart(boolean $ForceRestart) 设置<p>是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false</p>
 * @method integer getRestartMode() 获取<p>重启模式：0 滚动重启； 1 全量重启</p>
 * @method void setRestartMode(integer $RestartMode) 设置<p>重启模式：0 滚动重启； 1 全量重启</p>
 * @method boolean getUpgradeKernel() 获取<p>重启时选择是否升级内核patch版本</p>
 * @method void setUpgradeKernel(boolean $UpgradeKernel) 设置<p>重启时选择是否升级内核patch版本</p>
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false</p>
     */
    public $ForceRestart;

    /**
     * @var integer <p>重启模式：0 滚动重启； 1 全量重启</p>
     */
    public $RestartMode;

    /**
     * @var boolean <p>重启时选择是否升级内核patch版本</p>
     */
    public $UpgradeKernel;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param boolean $ForceRestart <p>是否强制重启<li>true：强制重启</li><li>false：不强制重启</li>默认false</p>
     * @param integer $RestartMode <p>重启模式：0 滚动重启； 1 全量重启</p>
     * @param boolean $UpgradeKernel <p>重启时选择是否升级内核patch版本</p>
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
