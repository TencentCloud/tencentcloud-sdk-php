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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterAttribute返回参数结构体
 *
 * @method integer getProjectId() 获取<p>集群所属项目</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>集群所属项目</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterDesc() 获取<p>集群描述</p>
 * @method void setClusterDesc(string $ClusterDesc) 设置<p>集群描述</p>
 * @method string getClusterLevel() 获取<p>集群等级</p>
 * @method void setClusterLevel(string $ClusterLevel) 设置<p>集群等级</p>
 * @method AutoUpgradeClusterLevel getAutoUpgradeClusterLevel() 获取<p>自动变配集群等级</p>
 * @method void setAutoUpgradeClusterLevel(AutoUpgradeClusterLevel $AutoUpgradeClusterLevel) 设置<p>自动变配集群等级</p>
 * @method boolean getQGPUShareEnable() 获取<p>是否开启QGPU共享</p>
 * @method void setQGPUShareEnable(boolean $QGPUShareEnable) 设置<p>是否开启QGPU共享</p>
 * @method ClusterProperty getClusterProperty() 获取<p>集群属性</p>
 * @method void setClusterProperty(ClusterProperty $ClusterProperty) 设置<p>集群属性</p>
 * @method boolean getIsHighAvailability() 获取<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
 * @method void setIsHighAvailability(boolean $IsHighAvailability) 设置<p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
 * @method SecurityModeConfig getSecurityModeConfig() 获取<p>集群安全模式配置</p>
 * @method void setSecurityModeConfig(SecurityModeConfig $SecurityModeConfig) 设置<p>集群安全模式配置</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyClusterAttributeResponse extends AbstractModel
{
    /**
     * @var integer <p>集群所属项目</p>
     */
    public $ProjectId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群描述</p>
     */
    public $ClusterDesc;

    /**
     * @var string <p>集群等级</p>
     */
    public $ClusterLevel;

    /**
     * @var AutoUpgradeClusterLevel <p>自动变配集群等级</p>
     */
    public $AutoUpgradeClusterLevel;

    /**
     * @var boolean <p>是否开启QGPU共享</p>
     */
    public $QGPUShareEnable;

    /**
     * @var ClusterProperty <p>集群属性</p>
     */
    public $ClusterProperty;

    /**
     * @var boolean <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
     */
    public $IsHighAvailability;

    /**
     * @var SecurityModeConfig <p>集群安全模式配置</p>
     */
    public $SecurityModeConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProjectId <p>集群所属项目</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterDesc <p>集群描述</p>
     * @param string $ClusterLevel <p>集群等级</p>
     * @param AutoUpgradeClusterLevel $AutoUpgradeClusterLevel <p>自动变配集群等级</p>
     * @param boolean $QGPUShareEnable <p>是否开启QGPU共享</p>
     * @param ClusterProperty $ClusterProperty <p>集群属性</p>
     * @param boolean $IsHighAvailability <p>集群是否启用高可用模式。用于指导跨可用区资源打散等高可用策略的执行</p>
     * @param SecurityModeConfig $SecurityModeConfig <p>集群安全模式配置</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            $this->ClusterDesc = $param["ClusterDesc"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("AutoUpgradeClusterLevel",$param) and $param["AutoUpgradeClusterLevel"] !== null) {
            $this->AutoUpgradeClusterLevel = new AutoUpgradeClusterLevel();
            $this->AutoUpgradeClusterLevel->deserialize($param["AutoUpgradeClusterLevel"]);
        }

        if (array_key_exists("QGPUShareEnable",$param) and $param["QGPUShareEnable"] !== null) {
            $this->QGPUShareEnable = $param["QGPUShareEnable"];
        }

        if (array_key_exists("ClusterProperty",$param) and $param["ClusterProperty"] !== null) {
            $this->ClusterProperty = new ClusterProperty();
            $this->ClusterProperty->deserialize($param["ClusterProperty"]);
        }

        if (array_key_exists("IsHighAvailability",$param) and $param["IsHighAvailability"] !== null) {
            $this->IsHighAvailability = $param["IsHighAvailability"];
        }

        if (array_key_exists("SecurityModeConfig",$param) and $param["SecurityModeConfig"] !== null) {
            $this->SecurityModeConfig = new SecurityModeConfig();
            $this->SecurityModeConfig->deserialize($param["SecurityModeConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
