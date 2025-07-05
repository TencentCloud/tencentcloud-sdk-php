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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancersProject请求参数结构体
 *
 * @method array getLoadBalancerIds() 获取一个或多个待操作的负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
列表支持最大长度为20。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置一个或多个待操作的负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
列表支持最大长度为20。
 * @method integer getProjectId() 获取项目ID。可以通过 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 接口获取。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。可以通过 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 接口获取。
 */
class ModifyLoadBalancersProjectRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
列表支持最大长度为20。
     */
    public $LoadBalancerIds;

    /**
     * @var integer 项目ID。可以通过 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 接口获取。
     */
    public $ProjectId;

    /**
     * @param array $LoadBalancerIds 一个或多个待操作的负载均衡实例ID，可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
列表支持最大长度为20。
     * @param integer $ProjectId 项目ID。可以通过 [DescribeProject](https://cloud.tencent.com/document/api/651/78725) 接口获取。
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
