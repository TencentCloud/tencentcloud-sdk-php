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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MigrateClassicalLoadBalancers请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取传统型负载均衡ID数组
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置传统型负载均衡ID数组
 * @method ExclusiveCluster getExclusiveCluster() 获取独占集群信息
 * @method void setExclusiveCluster(ExclusiveCluster $ExclusiveCluster) 设置独占集群信息
 */
class MigrateClassicalLoadBalancersRequest extends AbstractModel
{
    /**
     * @var array 传统型负载均衡ID数组
     */
    public $LoadBalancerIds;

    /**
     * @var ExclusiveCluster 独占集群信息
     */
    public $ExclusiveCluster;

    /**
     * @param array $LoadBalancerIds 传统型负载均衡ID数组
     * @param ExclusiveCluster $ExclusiveCluster 独占集群信息
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("ExclusiveCluster",$param) and $param["ExclusiveCluster"] !== null) {
            $this->ExclusiveCluster = new ExclusiveCluster();
            $this->ExclusiveCluster->deserialize($param["ExclusiveCluster"]);
        }
    }
}
