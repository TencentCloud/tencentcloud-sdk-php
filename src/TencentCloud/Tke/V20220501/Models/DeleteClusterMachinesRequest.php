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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteClusterMachines请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method array getMachineNames() 获取节点名列表
 * @method void setMachineNames(array $MachineNames) 设置节点名列表
 * @method boolean getEnableScaleDown() 获取删除节点时是否缩容节点池，true为缩容
 * @method void setEnableScaleDown(boolean $EnableScaleDown) 设置删除节点时是否缩容节点池，true为缩容
 * @method string getInstanceDeleteMode() 获取集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例）retain（仅移除，保留实例）
 * @method void setInstanceDeleteMode(string $InstanceDeleteMode) 设置集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例）retain（仅移除，保留实例）
 */
class DeleteClusterMachinesRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var array 节点名列表
     */
    public $MachineNames;

    /**
     * @var boolean 删除节点时是否缩容节点池，true为缩容
     */
    public $EnableScaleDown;

    /**
     * @var string 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例）retain（仅移除，保留实例）
     */
    public $InstanceDeleteMode;

    /**
     * @param string $ClusterId 集群 ID
     * @param array $MachineNames 节点名列表
     * @param boolean $EnableScaleDown 删除节点时是否缩容节点池，true为缩容
     * @param string $InstanceDeleteMode 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例）retain（仅移除，保留实例）
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MachineNames",$param) and $param["MachineNames"] !== null) {
            $this->MachineNames = $param["MachineNames"];
        }

        if (array_key_exists("EnableScaleDown",$param) and $param["EnableScaleDown"] !== null) {
            $this->EnableScaleDown = $param["EnableScaleDown"];
        }

        if (array_key_exists("InstanceDeleteMode",$param) and $param["InstanceDeleteMode"] !== null) {
            $this->InstanceDeleteMode = $param["InstanceDeleteMode"];
        }
    }
}
