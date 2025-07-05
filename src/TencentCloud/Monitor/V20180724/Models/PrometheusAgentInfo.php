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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管Prometheus agent信息
 *
 * @method string getClusterType() 获取集群类型。可填入tke、eks、tkeedge、tdcc，分别代表标准集群、弹性集群、边缘集群、注册集群
 * @method void setClusterType(string $ClusterType) 设置集群类型。可填入tke、eks、tkeedge、tdcc，分别代表标准集群、弹性集群、边缘集群、注册集群
 * @method string getClusterId() 获取集成容器服务中关联的集群ID
 * @method void setClusterId(string $ClusterId) 设置集成容器服务中关联的集群ID
 * @method string getDescribe() 获取该参数未使用，不需要填写
 * @method void setDescribe(string $Describe) 设置该参数未使用，不需要填写
 */
class PrometheusAgentInfo extends AbstractModel
{
    /**
     * @var string 集群类型。可填入tke、eks、tkeedge、tdcc，分别代表标准集群、弹性集群、边缘集群、注册集群
     */
    public $ClusterType;

    /**
     * @var string 集成容器服务中关联的集群ID
     */
    public $ClusterId;

    /**
     * @var string 该参数未使用，不需要填写
     */
    public $Describe;

    /**
     * @param string $ClusterType 集群类型。可填入tke、eks、tkeedge、tdcc，分别代表标准集群、弹性集群、边缘集群、注册集群
     * @param string $ClusterId 集成容器服务中关联的集群ID
     * @param string $Describe 该参数未使用，不需要填写
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }
    }
}
