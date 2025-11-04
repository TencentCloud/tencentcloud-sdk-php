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
 * ModifyClusterRuntimeConfig请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，必填
 * @method void setClusterId(string $ClusterId) 设置集群ID，必填
 * @method string getDstK8SVersion() 获取运行时版本需依据指定的Kubernetes版本进行设置。典型情况为，在升级过程中因版本冲突而需要调整运行时版本时。
 * @method void setDstK8SVersion(string $DstK8SVersion) 设置运行时版本需依据指定的Kubernetes版本进行设置。典型情况为，在升级过程中因版本冲突而需要调整运行时版本时。
 * @method RuntimeConfig getClusterRuntimeConfig() 获取需要修改集群运行时填写
 * @method void setClusterRuntimeConfig(RuntimeConfig $ClusterRuntimeConfig) 设置需要修改集群运行时填写
 * @method array getNodePoolRuntimeConfig() 获取需要修改节点池运行时，填需要修改的部分
 * @method void setNodePoolRuntimeConfig(array $NodePoolRuntimeConfig) 设置需要修改节点池运行时，填需要修改的部分
 */
class ModifyClusterRuntimeConfigRequest extends AbstractModel
{
    /**
     * @var string 集群ID，必填
     */
    public $ClusterId;

    /**
     * @var string 运行时版本需依据指定的Kubernetes版本进行设置。典型情况为，在升级过程中因版本冲突而需要调整运行时版本时。
     */
    public $DstK8SVersion;

    /**
     * @var RuntimeConfig 需要修改集群运行时填写
     */
    public $ClusterRuntimeConfig;

    /**
     * @var array 需要修改节点池运行时，填需要修改的部分
     */
    public $NodePoolRuntimeConfig;

    /**
     * @param string $ClusterId 集群ID，必填
     * @param string $DstK8SVersion 运行时版本需依据指定的Kubernetes版本进行设置。典型情况为，在升级过程中因版本冲突而需要调整运行时版本时。
     * @param RuntimeConfig $ClusterRuntimeConfig 需要修改集群运行时填写
     * @param array $NodePoolRuntimeConfig 需要修改节点池运行时，填需要修改的部分
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

        if (array_key_exists("DstK8SVersion",$param) and $param["DstK8SVersion"] !== null) {
            $this->DstK8SVersion = $param["DstK8SVersion"];
        }

        if (array_key_exists("ClusterRuntimeConfig",$param) and $param["ClusterRuntimeConfig"] !== null) {
            $this->ClusterRuntimeConfig = new RuntimeConfig();
            $this->ClusterRuntimeConfig->deserialize($param["ClusterRuntimeConfig"]);
        }

        if (array_key_exists("NodePoolRuntimeConfig",$param) and $param["NodePoolRuntimeConfig"] !== null) {
            $this->NodePoolRuntimeConfig = [];
            foreach ($param["NodePoolRuntimeConfig"] as $key => $value){
                $obj = new NodePoolRuntime();
                $obj->deserialize($value);
                array_push($this->NodePoolRuntimeConfig, $obj);
            }
        }
    }
}
