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
 * DescribeRocketMQConsumerConnectionDetail请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) 设置消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getGroupId() 获取消费组名称
 * @method void setGroupId(string $GroupId) 设置消费组名称
 * @method string getClientId() 获取消费端实例ID
 * @method void setClientId(string $ClientId) 设置消费端实例ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method array getFilterType() 获取按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Retry, Transaction, DeadLetter
 * @method void setFilterType(array $FilterType) 设置按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Retry, Transaction, DeadLetter
 */
class DescribeRocketMQConsumerConnectionDetailRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $NamespaceId;

    /**
     * @var string 消费组名称
     */
    public $GroupId;

    /**
     * @var string 消费端实例ID
     */
    public $ClientId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var array 按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Retry, Transaction, DeadLetter
     */
    public $FilterType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $GroupId 消费组名称
     * @param string $ClientId 消费端实例ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param array $FilterType 按主题类型过滤查询结果，可选择Normal, GlobalOrder, PartitionedOrder, Retry, Transaction, DeadLetter
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
