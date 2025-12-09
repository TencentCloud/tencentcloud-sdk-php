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
 * DescribeRocketMQConsumerConnections请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceId() 获取消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setNamespaceId(string $NamespaceId) 设置消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getGroupId() 获取消费组ID
 * @method void setGroupId(string $GroupId) 设置消费组ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制数目
 * @method void setLimit(integer $Limit) 设置限制数目
 * @method string getSortedBy() 获取对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）
 * @method void setSortedBy(string $SortedBy) 设置对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）
 * @method string getSortOrder() 获取查询结果排序规则，ASC为升序，DESC为降序
 * @method void setSortOrder(string $SortOrder) 设置查询结果排序规则，ASC为升序，DESC为降序
 */
class DescribeRocketMQConsumerConnectionsRequest extends AbstractModel
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
     * @var string 消费组ID
     */
    public $GroupId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制数目
     */
    public $Limit;

    /**
     * @var string 对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）
     */
    public $SortedBy;

    /**
     * @var string 查询结果排序规则，ASC为升序，DESC为降序
     */
    public $SortOrder;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NamespaceId 消费组所在的命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $GroupId 消费组ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制数目
     * @param string $SortedBy 对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）
     * @param string $SortOrder 查询结果排序规则，ASC为升序，DESC为降序
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
