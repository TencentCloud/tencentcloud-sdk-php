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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHPCNodes请求参数结构体
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤器，支持过滤字段：
- ClusterId：集群ID
- QueueId：队列ID
- NodeId：节点ID
- Name：名称
- Role：角色
- Type：类型
- Zone：可用区
- InstanceState：实例状态
- InstanceType：实例机型
- InstanceFamily：实例机型族
- InstanceChargeType：实例计费类型
- Tag：标签，Value格式为tagKey:tagValue
 * @method void setFilters(array $Filters) 设置过滤器，支持过滤字段：
- ClusterId：集群ID
- QueueId：队列ID
- NodeId：节点ID
- Name：名称
- Role：角色
- Type：类型
- Zone：可用区
- InstanceState：实例状态
- InstanceType：实例机型
- InstanceFamily：实例机型族
- InstanceChargeType：实例计费类型
- Tag：标签，Value格式为tagKey:tagValue
 */
class DescribeHPCNodesRequest extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤器，支持过滤字段：
- ClusterId：集群ID
- QueueId：队列ID
- NodeId：节点ID
- Name：名称
- Role：角色
- Type：类型
- Zone：可用区
- InstanceState：实例状态
- InstanceType：实例机型
- InstanceFamily：实例机型族
- InstanceChargeType：实例计费类型
- Tag：标签，Value格式为tagKey:tagValue
     */
    public $Filters;

    /**
     * @param string $ClusterId 集群ID。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤器，支持过滤字段：
- ClusterId：集群ID
- QueueId：队列ID
- NodeId：节点ID
- Name：名称
- Role：角色
- Type：类型
- Zone：可用区
- InstanceState：实例状态
- InstanceType：实例机型
- InstanceFamily：实例机型族
- InstanceChargeType：实例计费类型
- Tag：标签，Value格式为tagKey:tagValue
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
