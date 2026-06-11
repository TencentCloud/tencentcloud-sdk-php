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
 * @method string getClusterType() 获取<p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群、外部集群</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群、外部集群</p>
 * @method string getClusterId() 获取<p>集成容器服务中关联的集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集成容器服务中关联的集群ID</p>
 * @method string getDescribe() 获取<p>该参数未使用，不需要填写</p>
 * @method void setDescribe(string $Describe) 设置<p>该参数未使用，不需要填写</p>
 */
class PrometheusAgentInfo extends AbstractModel
{
    /**
     * @var string <p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群、外部集群</p>
     */
    public $ClusterType;

    /**
     * @var string <p>集成容器服务中关联的集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>该参数未使用，不需要填写</p>
     */
    public $Describe;

    /**
     * @param string $ClusterType <p>集群类型。可填入tke、eks、tkeedge、tdcc、external，分别代表标准集群、弹性集群、边缘集群、注册集群、外部集群</p>
     * @param string $ClusterId <p>集成容器服务中关联的集群ID</p>
     * @param string $Describe <p>该参数未使用，不需要填写</p>
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
