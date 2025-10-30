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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQNodeList请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method integer getOffset() 获取偏移量，默认值 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认值 0
 * @method integer getLimit() 获取一页限制，默认值 20
 * @method void setLimit(integer $Limit) 设置一页限制，默认值 20
 * @method string getNodeName() 获取模糊搜索节点名字
 * @method void setNodeName(string $NodeName) 设置模糊搜索节点名字
 * @method array getFilters() 获取过滤参数的名字和数值，当前仅支持根据节点状态筛选。
"Name": "nodeStatus"
"Value": running or down

 * @method void setFilters(array $Filters) 设置过滤参数的名字和数值，当前仅支持根据节点状态筛选。
"Name": "nodeStatus"
"Value": running or down

 * @method string getSortElement() 获取按指定元素排序，现在只有2个
cpuUsage：节点CPU利用率
diskUsage：节点磁盘利用率
 * @method void setSortElement(string $SortElement) 设置按指定元素排序，现在只有2个
cpuUsage：节点CPU利用率
diskUsage：节点磁盘利用率
 * @method string getSortOrder() 获取升序/降序
ascend/descend
 * @method void setSortOrder(string $SortOrder) 设置升序/降序
ascend/descend
 */
class DescribeRabbitMQNodeListRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     */
    public $InstanceId;

    /**
     * @var integer 偏移量，默认值 0
     */
    public $Offset;

    /**
     * @var integer 一页限制，默认值 20
     */
    public $Limit;

    /**
     * @var string 模糊搜索节点名字
     */
    public $NodeName;

    /**
     * @var array 过滤参数的名字和数值，当前仅支持根据节点状态筛选。
"Name": "nodeStatus"
"Value": running or down

     */
    public $Filters;

    /**
     * @var string 按指定元素排序，现在只有2个
cpuUsage：节点CPU利用率
diskUsage：节点磁盘利用率
     */
    public $SortElement;

    /**
     * @var string 升序/降序
ascend/descend
     */
    public $SortOrder;

    /**
     * @param string $InstanceId 实例 ID，形如amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     * @param integer $Offset 偏移量，默认值 0
     * @param integer $Limit 一页限制，默认值 20
     * @param string $NodeName 模糊搜索节点名字
     * @param array $Filters 过滤参数的名字和数值，当前仅支持根据节点状态筛选。
"Name": "nodeStatus"
"Value": running or down

     * @param string $SortElement 按指定元素排序，现在只有2个
cpuUsage：节点CPU利用率
diskUsage：节点磁盘利用率
     * @param string $SortOrder 升序/降序
ascend/descend
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
