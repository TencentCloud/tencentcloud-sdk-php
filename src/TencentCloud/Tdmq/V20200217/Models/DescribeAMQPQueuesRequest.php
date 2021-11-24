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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAMQPQueues请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制数
 * @method void setLimit(integer $Limit) 设置查询限制数
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost名称
 * @method void setVHostId(string $VHostId) 设置Vhost名称
 * @method string getNameKeyword() 获取按队列名称搜索，支持模糊查询
 * @method void setNameKeyword(string $NameKeyword) 设置按队列名称搜索，支持模糊查询
 * @method string getSortOrder() 获取查询结果排序规则，ASC为升序，DESC为降序
 * @method void setSortOrder(string $SortOrder) 设置查询结果排序规则，ASC为升序，DESC为降序
 * @method string getSortedBy() 获取对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）、Tps
 * @method void setSortedBy(string $SortedBy) 设置对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）、Tps
 * @method string getFilterOneQueue() 获取队列名称，指定此参数后将只返回该队列信息
 * @method void setFilterOneQueue(string $FilterOneQueue) 设置队列名称，指定此参数后将只返回该队列信息
 */
class DescribeAMQPQueuesRequest extends AbstractModel
{
    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询限制数
     */
    public $Limit;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Vhost名称
     */
    public $VHostId;

    /**
     * @var string 按队列名称搜索，支持模糊查询
     */
    public $NameKeyword;

    /**
     * @var string 查询结果排序规则，ASC为升序，DESC为降序
     */
    public $SortOrder;

    /**
     * @var string 对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）、Tps
     */
    public $SortedBy;

    /**
     * @var string 队列名称，指定此参数后将只返回该队列信息
     */
    public $FilterOneQueue;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制数
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost名称
     * @param string $NameKeyword 按队列名称搜索，支持模糊查询
     * @param string $SortOrder 查询结果排序规则，ASC为升序，DESC为降序
     * @param string $SortedBy 对查询结果排序，此为排序字段，目前支持Accumulative（消息堆积量）、Tps
     * @param string $FilterOneQueue 队列名称，指定此参数后将只返回该队列信息
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            $this->NameKeyword = $param["NameKeyword"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("FilterOneQueue",$param) and $param["FilterOneQueue"] !== null) {
            $this->FilterOneQueue = $param["FilterOneQueue"];
        }
    }
}
