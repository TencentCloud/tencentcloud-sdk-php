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
 * DeleteClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIds() 获取主机InstanceId列表
 * @method void setInstanceIds(array $InstanceIds) 设置主机InstanceId列表
 * @method string getInstanceDeleteMode() 获取集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
 * @method void setInstanceDeleteMode(string $InstanceDeleteMode) 设置集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
 * @method boolean getForceDelete() 获取是否强制删除(当节点在初始化时，可以指定参数为TRUE)
 * @method void setForceDelete(boolean $ForceDelete) 设置是否强制删除(当节点在初始化时，可以指定参数为TRUE)
 */
class DeleteClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 主机InstanceId列表
     */
    public $InstanceIds;

    /**
     * @var string 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
     */
    public $InstanceDeleteMode;

    /**
     * @var boolean 是否强制删除(当节点在初始化时，可以指定参数为TRUE)
     */
    public $ForceDelete;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIds 主机InstanceId列表
     * @param string $InstanceDeleteMode 集群实例删除时的策略：terminate（销毁实例，仅支持按量计费云主机实例） retain （仅移除，保留实例）
     * @param boolean $ForceDelete 是否强制删除(当节点在初始化时，可以指定参数为TRUE)
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

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceDeleteMode",$param) and $param["InstanceDeleteMode"] !== null) {
            $this->InstanceDeleteMode = $param["InstanceDeleteMode"];
        }

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}
