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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getIPVS() 获取是否启用IPVS
 * @method void setIPVS(boolean $IPVS) 设置是否启用IPVS
 * @method boolean getAsEnabled() 获取是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
 * @method void setAsEnabled(boolean $AsEnabled) 设置是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
 * @method string getContainerRuntime() 获取集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
 * @method void setContainerRuntime(string $ContainerRuntime) 设置集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
 */

/**
 *集群高级配置
 */
class ClusterAdvancedSettings extends AbstractModel
{
    /**
     * @var boolean 是否启用IPVS
     */
    public $IPVS;

    /**
     * @var boolean 是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
     */
    public $AsEnabled;

    /**
     * @var string 集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
     */
    public $ContainerRuntime;
    /**
     * @param boolean $IPVS 是否启用IPVS
     * @param boolean $AsEnabled 是否启用集群节点自动扩缩容(创建集群流程不支持开启此功能)
     * @param string $ContainerRuntime 集群使用的runtime类型，包括"docker"和"containerd"两种类型，默认为"docker"
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IPVS",$param) and $param["IPVS"] !== null) {
            $this->IPVS = $param["IPVS"];
        }

        if (array_key_exists("AsEnabled",$param) and $param["AsEnabled"] !== null) {
            $this->AsEnabled = $param["AsEnabled"];
        }

        if (array_key_exists("ContainerRuntime",$param) and $param["ContainerRuntime"] !== null) {
            $this->ContainerRuntime = $param["ContainerRuntime"];
        }
    }
}
